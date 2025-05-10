<?php
header('Content-Type: application/json');
require_once '../config/config.php';
require_once '../config/database.php';

// Obtendo parâmetros
$category = isset($_GET['category']) ? $_GET['category'] : 'all';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = isset($_GET['per_page']) ? (int)$_GET['per_page'] : 12;

try {
    $db = Database::getInstance();
    $conn = $db->getConnection();
    
    // Construindo a query base
    $sql = "SELECT * FROM gallery_items";
    $params = [];
    
    // Adicionando filtro de categoria
    if ($category !== 'all') {
        $sql .= " WHERE category = ?";
        $params[] = $category;
    }
    
    // Adicionando ordenação
    $sql .= " ORDER BY year DESC";
    
    // Adicionando paginação
    $offset = ($page - 1) * $per_page;
    $sql .= " LIMIT ? OFFSET ?";
    $params[] = $per_page;
    $params[] = $offset;
    
    // Executando a query
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Obtendo o total de itens para paginação
    $count_sql = "SELECT COUNT(*) FROM gallery_items";
    if ($category !== 'all') {
        $count_sql .= " WHERE category = ?";
    }
    $count_stmt = $conn->prepare($count_sql);
    $count_stmt->execute($category !== 'all' ? [$category] : []);
    $total_items = $count_stmt->fetchColumn();
    
    // Calculando informações de paginação
    $total_pages = ceil($total_items / $per_page);
    
    // Retornando resposta
    echo json_encode([
        'success' => true,
        'data' => [
            'items' => $items,
            'pagination' => [
                'current_page' => $page,
                'per_page' => $per_page,
                'total_items' => $total_items,
                'total_pages' => $total_pages
            ]
        ]
    ]);
    
} catch (PDOException $e) {
    // Log do erro
    error_log("Erro na API de galeria: " . $e->getMessage());
    
    // Retornando erro
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Erro ao carregar dados da galeria'
    ]);
}
?> 