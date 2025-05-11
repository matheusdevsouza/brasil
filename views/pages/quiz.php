<?php
// Array completo de perguntas (50 perguntas)
$questions = [
    ['question' => 'Em que ano o Brasil foi descoberto?', 'options' => ['1492', '1502', '1498', '1500'], 'correct' => '1500', 'explanation' => 'Pedro Álvares Cabral chegou ao Brasil em 22 de abril de 1500.'],
    ['question' => 'Quem proclamou a independência do Brasil?', 'options' => ['D. Pedro I', 'D. João VI', 'D. Pedro II', 'D. Leopoldina'], 'correct' => 'D. Pedro I', 'explanation' => 'D. Pedro I proclamou a independência às margens do Rio Ipiranga em 7 de setembro de 1822.'],
    ['question' => 'Em que ano foi proclamada a República?', 'options' => ['1889', '1891', '1888', '1890'], 'correct' => '1889', 'explanation' => 'A República foi proclamada em 15 de novembro de 1889, pondo fim ao período imperial.'],
    ['question' => 'Qual foi a primeira capital do Brasil?', 'options' => ['Rio de Janeiro', 'Salvador', 'São Paulo', 'Belo Horizonte'], 'correct' => 'Salvador', 'explanation' => 'Salvador foi a primeira capital do Brasil, de 1549 até 1763.'],
    ['question' => 'Em que ano foi abolida a escravidão no Brasil?', 'options' => ['1888', '1889', '1887', '1890'], 'correct' => '1888', 'explanation' => 'A Lei Áurea, que aboliu a escravidão, foi assinada pela Princesa Isabel em 13 de maio de 1888.'],
    ['question' => 'Quem foi o primeiro presidente do Brasil?', 'options' => ['Floriano Peixoto', 'Prudente de Morais', 'Deodoro da Fonseca'], 'correct' => 'Deodoro da Fonseca', 'explanation' => 'Marechal Deodoro da Fonseca foi o primeiro presidente do Brasil, de 1889 a 1891.'],
    ['question' => 'Em que ano foi inaugurada Brasília?', 'options' => ['1956', '1960', '1964', '1958'], 'correct' => '1960', 'explanation' => 'Brasília foi inaugurada em 21 de abril de 1960, durante o governo de Juscelino Kubitschek.'],
    ['question' => 'Qual foi o primeiro partido político do Brasil?', 'options' => ['Partido Liberal', 'Partido Republicano', 'Partido Socialista', 'Partido Conservador'], 'correct' => 'Partido Conservador', 'explanation' => 'O Partido Conservador foi fundado em 1836, durante o período imperial.'],
    ['question' => 'Em que ano foi promulgada a primeira Constituição do Brasil?', 'options' => ['1822', '1824', '1823', '1825'], 'correct' => '1824', 'explanation' => 'A primeira Constituição do Brasil foi promulgada em 25 de março de 1824, por D. Pedro I.'],
    ['question' => 'Quem foi o último imperador do Brasil?', 'options' => ['D. Pedro II', 'D. Pedro I', 'D. João VI', 'D. Leopoldina'], 'correct' => 'D. Pedro II', 'explanation' => 'D. Pedro II foi o último imperador do Brasil, governando de 1831 até 1889.'],
    ['question' => 'Qual tratado reconheceu a independência do Brasil?', 'options' => ['Tratado de Tordesilhas', 'Tratado de Madri', 'Tratado de Utrecht', 'Tratado do Rio de Janeiro'], 'correct' => 'Tratado do Rio de Janeiro', 'explanation' => 'O Tratado do Rio de Janeiro, assinado em 1825, reconheceu a independência do Brasil por Portugal.'],
    ['question' => 'Quem liderou a Inconfidência Mineira?', 'options' => ['José Bonifácio', 'Tiradentes', 'Domingos Martins', 'Frei Caneca'], 'correct' => 'Tiradentes', 'explanation' => 'Joaquim José da Silva Xavier, conhecido como Tiradentes, liderou a Inconfidência Mineira em 1789.'],
    ['question' => 'Em que ano ocorreu a Revolta da Balaiada?', 'options' => ['1824', '1838', '1848', '1831'], 'correct' => '1838', 'explanation' => 'A Revolta da Balaiada ocorreu entre 1838 e 1841, no Maranhão.'],
    ['question' => 'Qual foi o principal produto exportado pelo Brasil no século XIX?', 'options' => ['Café', 'Açúcar', 'Ouro', 'Algodão'], 'correct' => 'Café', 'explanation' => 'O café tornou-se o principal produto de exportação do Brasil no século XIX, impulsionando a economia.'],
    ['question' => 'Quem foi o regente do Brasil durante a menoridade de D. Pedro II?', 'options' => ['José Bonifácio', 'Marquês de Paraná', 'Diogo Antônio Feijó',  'Araújo Lima'], 'correct' => 'Diogo Antônio Feijó', 'explanation' => 'Diogo Antônio Feijó foi um dos regentes durante o período de menoridade de D. Pedro II.'],
    ['question' => 'Em que ano ocorreu a Guerra do Paraguai?', 'options' => ['1850', '1870', '1864',  '1860'], 'correct' => '1864', 'explanation' => 'A Guerra do Paraguai começou em 1864 e terminou em 1870, envolvendo Brasil, Argentina e Uruguai contra o Paraguai.'],
    ['question' => 'Quem foi o autor do Hino Nacional Brasileiro?', 'options' => ['Joaquim Osório Duque-Estrada', 'Francisco Manuel da Silva', 'Machado de Assis', 'Castro Alves'], 'correct' => 'Joaquim Osório Duque-Estrada', 'explanation' => 'Joaquim Osório Duque-Estrada escreveu a letra do Hino Nacional Brasileiro em 1909.'],
    ['question' => 'Qual cidade foi palco da Revolta da Vacina?', 'options' => ['São Paulo', 'Salvador', 'Recife', 'Rio de Janeiro'], 'correct' => 'Rio de Janeiro', 'explanation' => 'A Revolta da Vacina ocorreu no Rio de Janeiro em 1904, contra a vacinação obrigatória.'],
    ['question' => 'Em que ano Getúlio Vargas assumiu o poder pela primeira vez?', 'options' => ['1922', '1930', '1945', '1951'], 'correct' => '1930', 'explanation' => 'Getúlio Vargas assumiu o poder em 1930 após a Revolução de 1930.'],
    ['question' => 'Qual foi o nome do plano econômico de JK?', 'options' => ['Plano de Metas', 'Plano Marshall', 'Plano Real', 'Plano Cruzado'], 'correct' => 'Plano de Metas', 'explanation' => 'O Plano de Metas de Juscelino Kubitschek, implementado na década de 1950, visava o desenvolvimento industrial do Brasil.'],
    ['question' => 'Em que ano começou o Regime Militar no Brasil?', 'options' => ['1964', '1960', '1970', '1954'], 'correct' => '1964', 'explanation' => 'O Regime Militar começou em 31 de março de 1964, com o golpe que depôs João Goulart.'],
    ['question' => 'Quem foi a primeira mulher presidente do Brasil?', 'options' => ['Marina Silva', 'Dilma Rousseff', 'Luiza Erundina', 'Roseana Sarney'], 'correct' => 'Dilma Rousseff', 'explanation' => 'Dilma Rousseff foi a primeira mulher presidente do Brasil, governando de 2011 a 2016.'],
    ['question' => 'Qual foi o principal motivo da Cabanagem?', 'options' => ['Desigualdade social', 'Independência', 'Abolição da escravidão', 'Reforma agrária'], 'correct' => 'Desigualdade social', 'explanation' => 'A Cabanagem (1835-1840) foi motivada por desigualdades sociais no Pará.'],
    ['question' => 'Quem foi Zumbi dos Palmares?', 'options' => ['Presidente', 'Poeta', 'Militar', 'Líder quilombola'], 'correct' => 'Líder quilombola', 'explanation' => 'Zumbi dos Palmares foi líder do Quilombo dos Palmares, símbolo da resistência à escravidão.'],
    ['question' => 'Em que ano ocorreu a Intentona Comunista?', 'options' => ['1935', '1925', '1945', '1915'], 'correct' => '1935', 'explanation' => 'A Intentona Comunista foi uma tentativa de golpe liderada por comunistas em 1935.'],
    ['question' => 'Qual foi a capital do Brasil entre 1763 e 1960?', 'options' => ['Salvador', 'São Paulo', 'Belo Horizonte', 'Rio de Janeiro'], 'correct' => 'Rio de Janeiro', 'explanation' => 'O Rio de Janeiro foi capital do Brasil de 1763 até 1960, quando Brasília foi inaugurada.'],
    ['question' => 'Quem foi Domingos Jorge Velho?', 'options' => ['Presidente', 'Bandeirante', 'Escritor', 'Religioso'], 'correct' => 'Bandeirante', 'explanation' => 'Domingos Jorge Velho foi um bandeirante que destruiu o Quilombo dos Palmares em 1695.'],
    ['question' => 'Em que ano ocorreu a Revolução Constitucionalista?', 'options' => ['1932', '1922', '1942', '1912'], 'correct' => '1932', 'explanation' => 'A Revolução Constitucionalista de 1932 foi um movimento em São Paulo pela constituição.'],
    ['question' => 'Qual foi o principal objetivo da Coluna Prestes?', 'options' => ['Independência', 'Abolição da escravidão', 'Reforma agrária', 'Reforma política'], 'correct' => 'Reforma política', 'explanation' => 'A Coluna Prestes (1925-1927) buscava reformas políticas e sociais no Brasil.'],
    ['question' => 'Quem foi o líder da Revolta dos Malês?', 'options' => ['João Goulart', 'Manuel Calado', 'Tiradentes', 'Zumbi'], 'correct' => 'Manuel Calado', 'explanation' => 'Manuel Calado liderou a Revolta dos Malês, uma revolta de escravizados muçulmanos em Salvador, em 1835.'],
    ['question' => 'Em que ano foi criada a CLT?', 'options' => ['1933', '1953', '1943', '1923'], 'correct' => '1943', 'explanation' => 'A Consolidação das Leis do Trabalho (CLT) foi criada em 1943, durante o governo de Getúlio Vargas.'],
    ['question' => 'Qual movimento artístico marcou o Brasil em 1922?', 'options' => ['Semana de Arte Moderna', 'Tropicalismo', 'Barroco', 'Realismo'], 'correct' => 'Semana de Arte Moderna', 'explanation' => 'A Semana de Arte Moderna, em 1922, marcou o início do modernismo no Brasil.'],
    ['question' => 'Quem foi o responsável pela Lei do Ventre Livre?', 'options' => ['Visconde do Rio Branco', 'D. Pedro II', 'Princesa Isabel', 'José Bonifácio'], 'correct' => 'Visconde do Rio Branco', 'explanation' => 'A Lei do Ventre Livre, de 1871, foi sancionada sob a liderança do Visconde do Rio Branco.'],
    ['question' => 'Em que ano ocorreu a Revolta do Contestado?', 'options' => ['1912', '1902', '1922', '1892'], 'correct' => '1912', 'explanation' => 'A Revolta do Contestado (1912-1916) foi um conflito social e religioso em Santa Catarina e Paraná.'],
    ['question' => 'Qual foi o principal motivo da Revolta da Chibata?', 'options' => ['Independência', 'Castigos corporais', 'Abolição', 'Reforma agrária'], 'correct' => 'Castigos corporais', 'explanation' => 'A Revolta da Chibata, em 1910, foi motivada pelos castigos corporais na Marinha.'],
    ['question' => 'Quem foi Anita Garibaldi?', 'options' => ['Escritora', 'Revolucionária', 'Rainha', 'Cientista'], 'correct' => 'Revolucionária', 'explanation' => 'Anita Garibaldi foi uma revolucionária que lutou ao lado de Giuseppe Garibaldi na Revolução Farroupilha.'],
    ['question' => 'Em que ano o Brasil sediou a Copa do Mundo pela primeira vez?', 'options' => ['1962', '1970', '1938', '1950'], 'correct' => '1950', 'explanation' => 'O Brasil sediou a Copa do Mundo em 1950, marcada pela derrota para o Uruguai no Maracanazo.'],
    ['question' => 'Qual foi o principal objetivo da Política de Valorização do Café?', 'options' => ['Estabilizar preços', 'Aumentar impostos', 'Reduzir produção', 'Eliminar concorrência'], 'correct' => 'Estabilizar preços', 'explanation' => 'A Política de Valorização do Café, no início do século XX, visava estabilizar os preços do café no mercado internacional.'],
    ['question' => 'Quem foi Lampião?', 'options' => ['Líder cangaceiro', 'Presidente', 'Poeta', 'Militar'], 'correct' => 'Líder cangaceiro', 'explanation' => 'Lampião, ou Virgulino Ferreira da Silva, foi um famoso líder cangaceiro no Nordeste brasileiro.'],
    ['question' => 'Em que ano ocorreu a Revolução de 1930?', 'options' => ['1920', '1930', '1940', '1910'], 'correct' => '1930', 'explanation' => 'A Revolução de 1930 levou Getúlio Vargas ao poder, encerrando a República Velha.'],
    ['question' => 'Qual foi o principal motivo da Guerra dos Farrapos?', 'options' => ['Impostos altos', 'Independência', 'Abolição', 'Reforma agrária'], 'correct' => 'Impostos altos', 'explanation' => 'A Guerra dos Farrapos (1835-1845) foi motivada por impostos altos e descontentamento no Rio Grande do Sul.'],
    ['question' => 'Quem foi o responsável pela construção de Brasília?', 'options' => ['Lúcio Costa', 'Roberto Burle Marx', 'Oscar Niemeyer', 'Juscelino Kubitschek'], 'correct' => 'Juscelino Kubitschek', 'explanation' => 'Juscelino Kubitschek foi o presidente responsável pela construção de Brasília, com projeto urbanístico de Lúcio Costa e arquitetônico de Oscar Niemeyer.'],
    ['question' => 'Em que ano o Brasil voltou à democracia após o Regime Militar?', 'options' => ['1975', '1985', '1995', '1965'], 'correct' => '1985', 'explanation' => 'O Brasil voltou à democracia em 1985, com a eleição indireta de Tancredo Neves.'],
    ['question' => 'Qual foi o principal produto explorado durante o Ciclo do Ouro?', 'options' => ['Café', 'Ouro', 'Açúcar', 'Madeira'], 'correct' => 'Ouro', 'explanation' => 'O Ciclo do Ouro, no século XVIII, foi marcado pela exploração de ouro em Minas Gerais.'],
    ['question' => 'Quem foi Frei Caneca?', 'options' => ['Líder religioso', 'Presidente', 'Poeta', 'Militar'], 'correct' => 'Líder religioso', 'explanation' => 'Frei Caneca foi um líder religioso que participou da Confederação do Equador, em 1824.'],
    ['question' => 'Em que ano foi criada a Petrobras?', 'options' => ['1953', '1943', '1963', '1933'], 'correct' => '1953', 'explanation' => 'A Petrobras foi criada em 1953, durante o governo de Getúlio Vargas.'],
    ['question' => 'Qual foi o principal objetivo do Plano Real?', 'options' => ['Controlar inflação', 'Aumentar exportações', 'Reduzir impostos', 'Privatizar empresas'], 'correct' => 'Controlar inflação', 'explanation' => 'O Plano Real, implementado em 1994, teve como principal objetivo controlar a hiperinflação no Brasil.'],
    ['question' => 'Quem foi o líder da Revolta da Armada?', 'options' => ['Custódio de Melo', 'Floriano Peixoto', 'Deodoro da Fonseca', 'Rui Barbosa'], 'correct' => 'Custódio de Melo', 'explanation' => 'Custódio de Melo liderou a Revolta da Armada, em 1893, contra o governo de Floriano Peixoto.'],
    ['question' => 'Em que ano o Brasil conquistou a independência?', 'options' => ['1820', '1824', '1822', '1815'], 'correct' => '1822', 'explanation' => 'O Brasil conquistou a independência em 7 de setembro de 1822, com o Grito do Ipiranga.'],
    ['question' => 'Qual foi o principal motivo da Confederação do Equador?', 'options' => ['Oposição ao governo', 'Independência', 'Abolição', 'Reforma agrária'], 'correct' => 'Oposição ao governo', 'explanation' => 'A Confederação do Equador, em 1824, foi um movimento de oposição ao governo centralizador de D. Pedro I.'],
];

// Inicializa variáveis do estado do jogo a partir de campos ocultos ou padrão
$current_round = isset($_POST['current_round']) ? (int)$_POST['current_round'] : 1;
$score = isset($_POST['score']) ? (int)$_POST['score'] : 0;
$question_count = isset($_POST['question_count']) ? (int)$_POST['question_count'] : 0;
$used_questions = isset($_POST['used_questions']) ? json_decode($_POST['used_questions'], true) : [];
$show_round_transition = isset($_POST['show_round_transition']) ? (bool)$_POST['show_round_transition'] : false;

// Processa a resposta se houver
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answer']) && isset($_POST['question_index'])) {
    $selected_answer = $_POST['answer'];
    $question_index = (int)$_POST['question_index'];
    $answered_question = $questions[$question_index];

    // Adiciona 1 ponto se a resposta estiver correta, sem penalidade por erro
    if ($selected_answer === $answered_question['correct']) {
        $score += 1;
    }

    $question_count++;
    $used_questions[] = $question_index;

    // Verifica se é hora de avançar para o próximo round (após 5 perguntas)
    if ($question_count % 5 === 0 && $current_round < 10) {
        $current_round++;
        $show_round_transition = true;
    } elseif ($question_count >= 50) {
        $show_round_transition = false;
    }
}

// Seleciona uma pergunta aleatória que ainda não foi usada
$available_questions = array_diff(array_keys($questions), $used_questions);
if (!empty($available_questions)) {
    $current_question_index = array_rand($available_questions);
    $current_question = $questions[$current_question_index];
} else {
    // Quiz terminado
    $quiz_finished = true;
}

// Verifica se o quiz terminou (após 50 perguntas)
$quiz_finished = $question_count >= 50;

// Reinicia o quiz se necessário
if (isset($_POST['restart'])) {
    $current_round = 1;
    $score = 0;
    $question_count = 0;
    $used_questions = [];
    $show_round_transition = false;
    $quiz_finished = false;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz da História do Brasil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</head>
<body class="bg-gray-100">
    <section class="min-h-screen py-20 bg-gradient-to-b from-green-100 to-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Cabeçalho do Quiz -->
                <div class="text-center mb-12" data-aos="fade-down">
                    <h1 class="text-5xl font-bold text-green-800 mb-4">
                        Quiz da História do Brasil
                    </h1>
                    <p class="text-xl text-gray-600">
                        Teste seus conhecimentos sobre a história do nosso país. Cada round tem 5 perguntas.
                    </p>
                </div>

                <?php if ($quiz_finished): ?>
                    <!-- Resultado Final -->
                    <div class="bg-white rounded-xl shadow-lg p-12 text-center" data-aos="zoom-in">
                        <div class="mb-8">
                            <i class="fas fa-trophy text-6xl text-yellow-400 mb-4"></i>
                            <h2 class="text-4xl font-bold text-green-800 mb-4">
                                Quiz Concluído!
                            </h2>
                            <p class="text-2xl mb-2">
                                Sua pontuação final:
                            </p>
                            <p class="text-5xl font-bold text-green-800 mb-8">
                                <?= $score ?> pontos
                            </p>

                            <?php if ($score <= 10): ?>
                                <div class="bg-red-100 border-2 border-red-400 text-red-700 px-6 py-4 rounded-xl mb-8" role="alert">
                                    <p class="text-2xl font-bold mb-2">Que pena! 😔</p>
                                    <p class="text-lg">Você precisa estudar mais sobre a história do Brasil. Tente novamente!</p>
                                </div>
                            <?php elseif ($score <= 20): ?>
                                <div class="bg-orange-100 border-2 border-orange-400 text-orange-700 px-6 py-4 rounded-xl mb-8" role="alert">
                                    <p class="text-2xl font-bold mb-2">Quase lá! 😐</p>
                                    <p class="text-lg">Você sabe alguma coisa, mas pode melhorar. Que tal revisar e tentar novamente?</p>
                                </div>
                            <?php elseif ($score <= 30): ?>
                                <div class="bg-blue-100 border-2 border-blue-400 text-blue-700 px-6 py-4 rounded-xl mb-8" role="alert">
                                    <p class="text-2xl font-bold mb-2">Bom trabalho! 😊</p>
                                    <p class="text-lg">Você tem um bom conhecimento da história do Brasil. Continue assim!</p>
                                </div>
                            <?php elseif ($score <= 40): ?>
                                <div class="bg-green-100 border-2 border-green-400 text-green-700 px-6 py-4 rounded-xl mb-8" role="alert">
                                    <p class="text-2xl font-bold mb-2">Muito bom! 👏</p>
                                    <p class="text-lg">Você conhece bem a história do Brasil, mas ainda há espaço para brilhar mais!</p>
                                </div>
                            <?php else: ?>
                                <div class="bg-green-100 border-2 border-green-400 text-green-700 px-6 py-4 rounded-xl mb-8 animate-bounce" role="alert">
                                    <p class="text-2xl font-bold mb-2">Parabéns! 🎉</p>
                                    <p class="text-lg">Você demonstrou um excelente conhecimento sobre a história do Brasil!</p>
                                </div>
                            <?php endif; ?>

                            <form method="POST" class="space-y-4">
                                <button type="submit" name="restart" 
                                        class="bg-green-800 text-white px-8 py-4 rounded-xl text-lg font-semibold hover:bg-green-700 transition-colors duration-300 transform hover:scale-105 active:scale-95">
                                    Jogar Novamente
                                </button>
                                <a href="?page=home" 
                                   class="block text-green-800 hover:text-green-600 transition-colors duration-300">
                                    Voltar para a página inicial
                                </a>
                            </form>
                        </div>
                    </div>
                <?php elseif ($show_round_transition): ?>
                    <!-- Tela de transição entre rounds -->
                    <div class="bg-white rounded-xl shadow-lg p-12 text-center" data-aos="zoom-in">
                        <h2 class="text-4xl font-bold text-green-800 mb-4 animate-pulse">
                            Iniciando Round <?= $current_round ?>!
                        </h2>
                        <p class="text-xl text-gray-600 mb-8">
                            Prepare-se para mais desafios!
                        </p>
                    </div>
                    <script>
                        // Redireciona após 2 segundos para continuar o quiz
                        setTimeout(function() {
                            document.getElementById('continue-form').submit();
                        }, 2000);
                    </script>
                    <form id="continue-form" method="POST" style="display: none;">
                        <input type="hidden" name="current_round" value="<?= $current_round ?>">
                        <input type="hidden" name="score" value="<?= $score ?>">
                        <input type="hidden" name="question_count" value="<?= $question_count ?>">
                        <input type="hidden" name="used_questions" value='<?= json_encode($used_questions) ?>'>
                        <input type="hidden" name="show_round_transition" value="0">
                    </form>
                <?php else: ?>
                    <!-- Progresso -->
                    <div class="mb-8 bg-white rounded-xl shadow-lg p-6" data-aos="fade-up">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <span class="text-2xl font-bold text-green-800 mr-2">Round <?= $current_round ?></span>
                                <span class="text-gray-500">de 10</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-2"></i>
                                <span class="text-2xl font-bold text-green-800"><?= $score ?></span>
                                <span class="text-gray-500 ml-1">pontos</span>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-green-800 h-3 rounded-full transition-all duration-500" 
                                 style="width: <?= ($question_count) * 2 ?>%"></div>
                        </div>
                    </div>

                    <!-- Pergunta Atual -->
                    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-2xl font-bold text-green-800 mb-8">
                            <?= $current_question['question'] ?>
                        </h2>

                        <form method="POST" class="space-y-4">
                            <input type="hidden" name="current_round" value="<?= $current_round ?>">
                            <input type="hidden" name="score" value="<?= $score ?>">
                            <input type="hidden" name="question_count" value="<?= $question_count ?>">
                            <input type="hidden" name="used_questions" value='<?= json_encode($used_questions) ?>'>
                            <input type="hidden" name="question_index" value="<?= $current_question_index ?>">
                            <input type="hidden" name="show_round_transition" value="0">
                            <?php foreach ($current_question['options'] as $option): ?>
                                <label class="flex items-center p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-green-800 hover:bg-green-50 transition-all duration-300 group">
                                    <input type="radio" name="answer" value="<?= $option ?>" class="hidden" required>
                                    <div class="w-6 h-6 border-2 border-gray-300 rounded-full mr-4 flex items-center justify-center group-hover:border-green-800 transition-colors duration-300">
                                        <div class="w-3 h-3 bg-green-800 rounded-full hidden group-hover:block"></div>
                                    </div>
                                    <span class="text-lg text-gray-700 group-hover:text-green-800 transition-colors duration-300"><?= $option ?></span>
                                </label>
                            <?php endforeach; ?>

                            <button type="submit" class="w-full bg-green-800 text-white py-4 rounded-xl text-lg font-semibold hover:bg-green-700 transition-colors duration-300 transform hover:scale-105 active:scale-95">
                                Confirmar Resposta
                            </button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Estilos Adicionais -->
    <style>
        /* Animação para o progresso */
        .progress-bar {
            transition: width 0.5s ease-in-out;
        }

        /* Efeito de hover nos botões de opção */
        input[type="radio"]:checked + div {
            border-color: #1B5E20;
        }

        input[type="radio"]:checked + div div {
            display: block;
        }

        /* Animação de confete para pontuação alta */
        @keyframes confetti {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(100vh) rotate(360deg); }
        }

        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            background-color: #1B5E20;
            animation: confetti 3s ease-in-out infinite;
        }

        /* Animação de pulso para transição de round */
        .animate-pulse {
            animation: pulse 1.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>

    <!-- Script para animações -->
    <script>
        // Adiciona animação de confete quando o usuário atinge 40 pontos ou mais
        <?php if ($quiz_finished && $score >= 40): ?>
        document.addEventListener('DOMContentLoaded', function() {
            for (let i = 0; i < 50; i++) {
                const confetti = document.createElement('div');
                confetti.className = 'confetti';
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.animationDelay = Math.random() * 3 + 's';
                confetti.style.backgroundColor = ['#1B5E20', '#FBC02D', '#4CAF50', '#8BC34A'][Math.floor(Math.random() * 4)];
                document.body.appendChild(confetti);
            }
        });
        <?php endif; ?>
    </script>
</body>
</html>