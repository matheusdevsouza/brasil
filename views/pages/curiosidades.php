<?php
// Dados mockados para exemplo
$curiosidades = [
    [
        'titulo' => 'Origem do Nome Brasil',
        'descricao' => 'O nome Brasil vem da árvore pau-brasil, que era abundante no litoral brasileiro e produzia uma tinta vermelha muito valorizada na Europa.',
        'imagem' => 'imgs/pau-brasil.jpg',
        'categoria' => 'História'
    ],
    [
        'titulo' => 'Maior Floresta Tropical',
        'descricao' => 'A Amazônia é a maior floresta tropical do mundo, cobrindo cerca de 5,5 milhões de quilômetros quadrados.',
        'imagem' => 'imgs/amazonia.jpg',
        'categoria' => 'Natureza'
    ],
    [
        'titulo' => 'Primeira Capital',
        'descricao' => 'Salvador foi a primeira capital do Brasil, de 1549 até 1763, quando o título foi transferido para o Rio de Janeiro.',
        'imagem' => 'imgs/salvador.jpg',
        'categoria' => 'História'
    ],
    [
        'titulo' => 'Maior Biodiversidade',
        'descricao' => 'O Brasil abriga a maior biodiversidade do planeta, com mais de 100 mil espécies de animais e 43 mil espécies de plantas.',
        'imagem' => 'imgs/biodiversidade.jpg',
        'categoria' => 'Natureza'
    ],
    [
        'titulo' => 'Invenção do Avião',
        'descricao' => 'O brasileiro Santos Dumont é considerado o pai da aviação, tendo realizado o primeiro voo homologado em 1906.',
        'imagem' => 'imgs/santos-dumont.jpg',
        'categoria' => 'Ciência'
    ],
    [
        'titulo' => 'Maior Rio do Mundo',
        'descricao' => 'O Rio Amazonas é o maior rio do mundo em volume de água, despejando cerca de 209 mil metros cúbicos de água por segundo no oceano.',
        'imagem' => 'imgs/amazonas.jpg',
        'categoria' => 'Natureza'
    ]
];
?>

<!-- Header da Página -->
<div class="bg-brasil-green text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-montserrat font-bold mb-4">Curiosidades do Brasil</h1>
        <p class="text-lg max-w-2xl mx-auto">
            Descubra fatos interessantes e curiosos sobre a história, cultura e natureza do Brasil
        </p>
    </div>
</div>

<!-- Filtros -->
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-center space-x-4 mb-8">
        <button class="filter-btn active" data-category="all">
            Todas
        </button>
        <button class="filter-btn" data-category="História">
            História
        </button>
        <button class="filter-btn" data-category="Natureza">
            Natureza
        </button>
        <button class="filter-btn" data-category="Ciência">
            Ciência
        </button>
    </div>

    <!-- Grid de Curiosidades -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($curiosidades as $curiosidade): ?>
            <div class="curiosidade-card" data-category="<?= $curiosidade['categoria'] ?>">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105">
                    <div class="relative h-48">
                        <img src="<?= $curiosidade['imagem'] ?>" 
                             alt="<?= $curiosidade['titulo'] ?>" 
                             class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-brasil-green text-white px-3 py-1 rounded-full text-sm">
                            <?= $curiosidade['categoria'] ?>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-montserrat font-bold mb-2"><?= $curiosidade['titulo'] ?></h3>
                        <p class="text-gray-600"><?= $curiosidade['descricao'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Estilos -->
<style>
.filter-btn {
    @apply px-6 py-2 rounded-full text-gray-600 bg-gray-100 hover:bg-brasil-green hover:text-white transition-colors duration-300;
}

.filter-btn.active {
    @apply bg-brasil-green text-white;
}

.curiosidade-card {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.3s ease-in-out;
}

.curiosidade-card.hidden {
    opacity: 0;
    transform: translateY(20px);
    pointer-events: none;
}
</style>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.curiosidade-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Atualiza botões ativos
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const category = button.dataset.category;

            // Filtra os cards
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
});
</script> 