<?php
header('Content-Type: application/json');
require_once '../config/config.php';

// Dados mockados dos eventos históricos
$events = [
    // Período Colonial
    [
        'year' => '1500',
        'title' => 'Chegada dos Portugueses',
        'description' => 'Pedro Álvares Cabral chega ao Brasil com sua frota, marcando o início da colonização portuguesa.',
        'period' => 'colonial'
    ],
    [
        'year' => '1534',
        'title' => 'Capitanias Hereditárias',
        'description' => 'D. João III divide o Brasil em 15 capitanias hereditárias para facilitar a colonização.',
        'period' => 'colonial'
    ],
    [
        'year' => '1549',
        'title' => 'Governo-Geral',
        'description' => 'Criação do primeiro governo-geral do Brasil, com Tomé de Sousa como governador.',
        'period' => 'colonial'
    ],
    [
        'year' => '1630',
        'title' => 'Invasão Holandesa',
        'description' => 'Holandeses invadem Pernambuco, iniciando um período de domínio na região.',
        'period' => 'colonial'
    ],
    [
        'year' => '1695',
        'title' => 'Destruição de Palmares',
        'description' => 'O Quilombo dos Palmares é destruído após anos de resistência.',
        'period' => 'colonial'
    ],
    
    // Período Imperial
    [
        'year' => '1808',
        'title' => 'Chegada da Família Real',
        'description' => 'D. João VI e a corte portuguesa chegam ao Brasil, fugindo das tropas napoleônicas.',
        'period' => 'imperial'
    ],
    [
        'year' => '1822',
        'title' => 'Independência do Brasil',
        'description' => 'D. Pedro I proclama a independência do Brasil às margens do rio Ipiranga.',
        'period' => 'imperial'
    ],
    [
        'year' => '1831',
        'title' => 'Abdicação de D. Pedro I',
        'description' => 'D. Pedro I abdica do trono em favor de seu filho, D. Pedro II.',
        'period' => 'imperial'
    ],
    [
        'year' => '1888',
        'title' => 'Lei Áurea',
        'description' => 'Princesa Isabel assina a Lei Áurea, abolindo a escravidão no Brasil.',
        'period' => 'imperial'
    ],
    [
        'year' => '1889',
        'title' => 'Proclamação da República',
        'description' => 'Marechal Deodoro da Fonseca proclama a República, pondo fim ao Império.',
        'period' => 'imperial'
    ],
    
    // Período Republicano
    [
        'year' => '1930',
        'title' => 'Revolução de 1930',
        'description' => 'Getúlio Vargas assume o poder após um golpe de estado.',
        'period' => 'republica'
    ],
    [
        'year' => '1964',
        'title' => 'Golpe Militar',
        'description' => 'Início do período da ditadura militar no Brasil.',
        'period' => 'republica'
    ],
    [
        'year' => '1985',
        'title' => 'Redemocratização',
        'description' => 'Fim da ditadura militar e início do processo de redemocratização.',
        'period' => 'republica'
    ],
    [
        'year' => '1988',
        'title' => 'Nova Constituição',
        'description' => 'Promulgação da Constituição Federal, conhecida como Constituição Cidadã.',
        'period' => 'republica'
    ],
    [
        'year' => '1994',
        'title' => 'Plano Real',
        'description' => 'Implementação do Plano Real, que estabilizou a economia brasileira.',
        'period' => 'republica'
    ]
];

// Filtrando eventos por período
$period = isset($_GET['period']) ? $_GET['period'] : 'all';
$filteredEvents = $period === 'all' ? $events : array_filter($events, function($event) use ($period) {
    return $event['period'] === $period;
});

// Ordenando eventos por ano
usort($filteredEvents, function($a, $b) {
    return $a['year'] - $b['year'];
});

// Retornando resposta
echo json_encode([
    'success' => true,
    'events' => array_values($filteredEvents)
]);
?> 