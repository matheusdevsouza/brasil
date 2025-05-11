<?php
header('Content-Type: application/json; charset=utf-8');

// Recebe a pergunta do usuário
$input = isset($_POST['question']) ? trim($_POST['question']) : '';
if ($input === '') {
    echo json_encode(['answer' => 'Por favor, digite uma pergunta.']);
    exit;
}

// Carrega o data.json
$data = json_decode(file_get_contents(__DIR__ . '/data.json'), true);
$questions = $data['questions'] ?? [];

// Extrai palavras-chave da pergunta do usuário
// Remove pontuação, transforma em minúsculas e separa por espaço
$input_keywords = preg_split('/\s+/', mb_strtolower(preg_replace('/[[:punct:]]/', '', $input), 'UTF-8'));

$best_match = null;
$best_score = 0;

foreach ($questions as $q) {
    $q_text = mb_strtolower($q['question'], 'UTF-8');
    $score = 0;
    foreach ($input_keywords as $word) {
        if ($word && strpos($q_text, $word) !== false) {
            $score++;
        }
    }
    if ($score > $best_score) {
        $best_score = $score;
        $best_match = $q;
    }
}

if ($best_match && $best_score > 0) {
    echo json_encode(['answer' => $best_match['answer']]);
} else {
    echo json_encode(['answer' => 'Desculpe, não encontrei uma resposta para isso.']);
} 