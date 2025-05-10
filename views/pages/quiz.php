<?php
// Dados mockados para exemplo
$quiz = [
    [
        'pergunta' => 'Em que ano o Brasil foi descoberto oficialmente?',
        'opcoes' => [
            '1500',
            '1492',
            '1502',
            '1498'
        ],
        'resposta_correta' => '1500',
        'explicacao' => 'O Brasil foi oficialmente descoberto em 22 de abril de 1500, quando a frota de Pedro Álvares Cabral chegou ao litoral da Bahia.'
    ],
    [
        'pergunta' => 'Qual foi a primeira capital do Brasil?',
        'opcoes' => [
            'Rio de Janeiro',
            'Salvador',
            'São Paulo',
            'Recife'
        ],
        'resposta_correta' => 'Salvador',
        'explicacao' => 'Salvador foi a primeira capital do Brasil, de 1549 até 1763, quando o título foi transferido para o Rio de Janeiro.'
    ],
    [
        'pergunta' => 'Quem foi o primeiro presidente do Brasil?',
        'opcoes' => [
            'Deodoro da Fonseca',
            'Floriano Peixoto',
            'Prudente de Morais',
            'Campos Sales'
        ],
        'resposta_correta' => 'Deodoro da Fonseca',
        'explicacao' => 'Marechal Deodoro da Fonseca foi o primeiro presidente do Brasil, governando de 1889 a 1891.'
    ],
    [
        'pergunta' => 'Em que ano foi proclamada a República no Brasil?',
        'opcoes' => [
            '1889',
            '1891',
            '1888',
            '1890'
        ],
        'resposta_correta' => '1889',
        'explicacao' => 'A República foi proclamada em 15 de novembro de 1889, pondo fim ao período imperial.'
    ],
    [
        'pergunta' => 'Qual é o maior rio do Brasil?',
        'opcoes' => [
            'Rio Amazonas',
            'Rio São Francisco',
            'Rio Paraná',
            'Rio Tocantins'
        ],
        'resposta_correta' => 'Rio Amazonas',
        'explicacao' => 'O Rio Amazonas é o maior rio do Brasil e do mundo em volume de água.'
    ]
];
?>

<!-- Header da Página -->
<div class="bg-brasil-green text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-montserrat font-bold mb-4">Quiz sobre o Brasil</h1>
        <p class="text-lg max-w-2xl mx-auto">
            Teste seus conhecimentos sobre a história, geografia e cultura do Brasil
        </p>
    </div>
</div>

<!-- Container do Quiz -->
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
        <!-- Progresso -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-2">
                <span class="text-gray-600">Progresso</span>
                <span class="text-brasil-green font-bold"><span id="current-question">1</span>/<?= count($quiz) ?></span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div id="progress-bar" class="bg-brasil-green h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
            </div>
        </div>

        <!-- Perguntas -->
        <div id="quiz-container">
            <?php foreach ($quiz as $index => $questao): ?>
                <div class="question-card <?= $index === 0 ? 'active' : 'hidden' ?>" data-question="<?= $index + 1 ?>">
                    <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
                        <h3 class="text-xl font-montserrat font-bold mb-4"><?= $questao['pergunta'] ?></h3>
                        <div class="space-y-3">
                            <?php foreach ($questao['opcoes'] as $opcao): ?>
                                <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50 transition-colors duration-200">
                                    <input type="radio" 
                                           name="question_<?= $index + 1 ?>" 
                                           value="<?= $opcao ?>" 
                                           class="hidden">
                                    <span class="w-6 h-6 border-2 border-brasil-green rounded-full flex items-center justify-center mr-3">
                                        <span class="w-3 h-3 bg-brasil-green rounded-full hidden"></span>
                                    </span>
                                    <span class="text-gray-700"><?= $opcao ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Botões de Navegação -->
        <div class="flex justify-between mt-8">
            <button id="prev-btn" class="px-6 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300 transition-colors duration-200 hidden">
                Anterior
            </button>
            <button id="next-btn" class="px-6 py-2 bg-brasil-green text-white rounded-lg hover:bg-brasil-green-dark transition-colors duration-200">
                Próxima
            </button>
        </div>
    </div>
</div>

<!-- Modal de Resultado -->
<div id="result-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
        <h2 class="text-2xl font-montserrat font-bold mb-4 text-center">Resultado do Quiz</h2>
        <div class="text-center mb-6">
            <p class="text-4xl font-bold text-brasil-green mb-2"><span id="score">0</span>%</p>
            <p class="text-gray-600">Você acertou <span id="correct-answers">0</span> de <?= count($quiz) ?> questões</p>
        </div>
        <div class="space-y-4">
            <button id="restart-btn" class="w-full px-6 py-3 bg-brasil-green text-white rounded-lg hover:bg-brasil-green-dark transition-colors duration-200">
                Tentar Novamente
            </button>
            <button id="home-btn" class="w-full px-6 py-3 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300 transition-colors duration-200">
                Voltar ao Início
            </button>
        </div>
    </div>
</div>

<!-- Estilos -->
<style>
.question-card {
    opacity: 1;
    transform: translateX(0);
    transition: all 0.3s ease-in-out;
}

.question-card.hidden {
    opacity: 0;
    transform: translateX(100px);
    pointer-events: none;
    position: absolute;
}

input[type="radio"]:checked + span span {
    display: block;
}

input[type="radio"]:checked + span {
    border-color: #2E7D32;
}
</style>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const quizData = <?= json_encode($quiz) ?>;
    const totalQuestions = quizData.length;
    let currentQuestion = 1;
    let answers = new Array(totalQuestions).fill(null);
    
    const questionCards = document.querySelectorAll('.question-card');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const progressBar = document.getElementById('progress-bar');
    const currentQuestionSpan = document.getElementById('current-question');
    const resultModal = document.getElementById('result-modal');
    const scoreSpan = document.getElementById('score');
    const correctAnswersSpan = document.getElementById('correct-answers');
    const restartBtn = document.getElementById('restart-btn');
    const homeBtn = document.getElementById('home-btn');

    function updateProgress() {
        const progress = ((currentQuestion - 1) / totalQuestions) * 100;
        progressBar.style.width = `${progress}%`;
        currentQuestionSpan.textContent = currentQuestion;
    }

    function showQuestion(number) {
        questionCards.forEach(card => {
            card.classList.remove('active');
            card.classList.add('hidden');
        });
        
        const currentCard = document.querySelector(`[data-question="${number}"]`);
        currentCard.classList.remove('hidden');
        currentCard.classList.add('active');
        
        // Atualiza botões
        prevBtn.classList.toggle('hidden', number === 1);
        nextBtn.textContent = number === totalQuestions ? 'Finalizar' : 'Próxima';
        
        updateProgress();
    }

    function checkAnswer(questionNumber, answer) {
        answers[questionNumber - 1] = answer;
    }

    function calculateScore() {
        let correct = 0;
        answers.forEach((answer, index) => {
            if (answer === quizData[index].resposta_correta) {
                correct++;
            }
        });
        return {
            score: Math.round((correct / totalQuestions) * 100),
            correct: correct
        };
    }

    function showResult() {
        const result = calculateScore();
        scoreSpan.textContent = result.score;
        correctAnswersSpan.textContent = result.correct;
        resultModal.classList.remove('hidden');
        resultModal.classList.add('flex');
    }

    // Event Listeners
    questionCards.forEach(card => {
        const inputs = card.querySelectorAll('input[type="radio"]');
        inputs.forEach(input => {
            input.addEventListener('change', (e) => {
                checkAnswer(parseInt(card.dataset.question), e.target.value);
            });
        });
    });

    prevBtn.addEventListener('click', () => {
        if (currentQuestion > 1) {
            currentQuestion--;
            showQuestion(currentQuestion);
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentQuestion < totalQuestions) {
            currentQuestion++;
            showQuestion(currentQuestion);
        } else {
            showResult();
        }
    });

    restartBtn.addEventListener('click', () => {
        currentQuestion = 1;
        answers = new Array(totalQuestions).fill(null);
        showQuestion(currentQuestion);
        resultModal.classList.add('hidden');
        resultModal.classList.remove('flex');
    });

    homeBtn.addEventListener('click', () => {
        window.location.href = 'index.php';
    });

    // Inicialização
    showQuestion(1);
});
</script> 