<?php
header('Content-Type: application/json');
require_once '../config/config.php';
require_once '../vendor/autoload.php';

use Google\GenerativeAI;

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
$history = $data['history'] ?? [];

// Função para processar a mensagem com a Gemini API
function processWithGemini($message, $history) {
    $apiKey = GEMINI_API_KEY;
    
    if (empty($apiKey)) {
        error_log("Erro: Chave da API Gemini não configurada");
        return "Desculpe, o serviço de chat não está configurado corretamente.";
    }
    
    try {
        // Inicializando o cliente da Gemini API
        $genAI = new GenerativeAI($apiKey);
        $model = $genAI->generativeModel('gemini-1.5-pro-latest', [
            'temperature' => 0.7,
            'maxOutputTokens' => 500,
            'topK' => 40,
            'topP' => 0.95
        ]);
        
        // Preparando o histórico de mensagens
        $messages = [
            [
                'role' => 'system',
                'parts' => [
                    [
                        'text' => 'Você é o Caramelo Bot, um assistente virtual especializado em história do Brasil. 
                                   Responda de forma educativa e amigável, sempre mantendo o foco no tema histórico.
                                   Use linguagem clara e acessível, adequada para estudantes.
                                   Seja conciso e direto em suas respostas.
                                   Se não souber a resposta, seja honesto e sugira consultar outras fontes.'
                    ]
                ]
            ]
        ];
        
        // Adicionando histórico
        foreach ($history as $msg) {
            $messages[] = [
                'role' => $msg['role'],
                'parts' => [
                    ['text' => $msg['content']]
                ]
            ];
        }
        
        // Adicionando a mensagem atual
        $messages[] = [
            'role' => 'user',
            'parts' => [
                ['text' => $message]
            ]
        ];
        
        // Iniciando uma sessão de chat
        $chat = $model->startChat(['history' => $messages]);
        
        // Enviando a mensagem
        $response = $chat->sendMessage($message);
        
        if (isset($response->text)) {
            return $response->text;
        }
        
        error_log("Erro: Resposta inválida da Gemini API");
        return "Desculpe, não consegui processar sua mensagem corretamente.";
    } catch (Exception $e) {
        error_log("Erro na Gemini API: " . $e->getMessage());
        return "Desculpe, ocorreu um erro ao processar sua mensagem. Por favor, tente novamente mais tarde.";
    }
}

// Processando a mensagem
$response = processWithGemini($message, $history);

// Retornando a resposta
echo json_encode([
    'success' => true,
    'response' => $response
]);
?>