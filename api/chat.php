<?php
header('Content-Type: application/json');
require_once '../config/config.php';

// Verificando se é uma requisição POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Método não permitido']);
    exit;
}

// Obtendo dados do POST
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['message'])) {
    echo json_encode(['success' => false, 'error' => 'Mensagem não fornecida']);
    exit;
}

$message = $data['message'];

// Função para processar a mensagem usando o data.json
function processMessage($message) {
    // Carregando o arquivo data.json
    $jsonData = json_decode(file_get_contents(__DIR__ . '/../data.json'), true);
    
    if (!$jsonData || !isset($jsonData['questions'])) {
        return "Desculpe, não consegui acessar o banco de dados de perguntas.";
    }
    
    // Convertendo a mensagem para minúsculas para melhor comparação
    $message = mb_strtolower($message, 'UTF-8');
        
    // Procurando por uma pergunta similar
    $bestMatch = null;
    $highestSimilarity = 0;
    
    foreach ($jsonData['questions'] as $qa) {
        $question = mb_strtolower($qa['question'], 'UTF-8');
        
        // Calculando similaridade usando similar_text
        similar_text($message, $question, $percent);
        
        if ($percent > $highestSimilarity) {
            $highestSimilarity = $percent;
            $bestMatch = $qa;
        }
    }
    
    // Se encontrou uma correspondência com similaridade maior que 60%
    if ($bestMatch && $highestSimilarity > 60) {
        return $bestMatch['answer'];
        }
        
    // Respostas padrão para quando não encontrar uma correspondência
    $defaultResponses = [
        "Desculpe, não tenho uma resposta específica para essa pergunta. Posso ajudar com outros tópicos da história do Brasil.",
        "Essa pergunta está um pouco fora do meu conhecimento atual. Posso ajudar com outros aspectos da história do Brasil.",
        "Não tenho informações suficientes sobre esse tópico específico. Que tal perguntar sobre outro período da história do Brasil?",
        "Essa pergunta é um pouco complexa para meu banco de dados atual. Posso ajudar com outros temas históricos.",
        "Não encontrei uma resposta precisa para essa pergunta. Posso ajudar com outros tópicos da história do Brasil."
    ];
    
    return $defaultResponses[array_rand($defaultResponses)];
}

// Processando a mensagem
$response = processMessage($message);

// Retornando a resposta
echo json_encode([
    'success' => true,
    'response' => $response
]);
?>