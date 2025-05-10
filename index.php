<?php
// Configurações iniciais
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Definindo constantes
define('BASE_PATH', __DIR__);
define('CONFIG_PATH', BASE_PATH . '/config');
define('VIEWS_PATH', BASE_PATH . '/views');
define('PUBLIC_PATH', BASE_PATH . '/public');

// Carregando configurações
require_once CONFIG_PATH . '/config.php';
require_once CONFIG_PATH . '/database.php';

// Roteamento básico
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Array de páginas permitidas
$allowed_pages = [
    'home' => 'Home',
    'timeline' => 'Linha do Tempo',
    'curiosidades' => 'Curiosidades',
    'gallery' => 'Galeria',
    'quiz' => 'Quiz'
];

// Verificando se a página existe
if (!array_key_exists($page, $allowed_pages)) {
    $page = 'home';
}

// Incluindo header
require_once VIEWS_PATH . '/components/header.php';

// Incluindo conteúdo da página
require_once VIEWS_PATH . "/pages/{$page}.php";

// Incluindo footer
require_once VIEWS_PATH . '/components/footer.php';

// Incluindo chatbot
require_once VIEWS_PATH . '/components/caramelo.php';
?> 