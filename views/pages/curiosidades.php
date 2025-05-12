<?php
// Dados mockados para exemplo
$curiosidades = [
    [
        'titulo' => 'Origem do Nome Brasil',
        'descricao' => 'O nome Brasil vem da árvore pau-brasil, que era abundante no litoral brasileiro e produzia uma tinta vermelha muito valorizada na Europa.',
        'imagem' => '/brasil/imgs/pau-brasil.jpg',
        'categoria' => 'História'
    ],
    [
        'titulo' => 'Maior Floresta Tropical',
        'descricao' => 'A Amazônia é a maior floresta tropical do mundo, cobrindo cerca de 5,5 milhões de quilômetros quadrados.',
        'imagem' => '/brasil/imgs/amazonia.jpg',
        'categoria' => 'Natureza'
    ],
    [
        'titulo' => 'Primeira Capital',
        'descricao' => 'Salvador foi a primeira capital do Brasil, de 1549 até 1763, quando o título foi transferido para o Rio de Janeiro.',
        'imagem' => '/brasil/imgs/salvador.jpg',
        'categoria' => 'História'
    ],
    [
        'titulo' => 'Maior Biodiversidade',
        'descricao' => 'O Brasil abriga a maior biodiversidade do planeta, com mais de 100 mil espécies de animais e 43 mil espécies de plantas.',
        'imagem' => '/brasil/imgs/biodiversidade.jpg',
        'categoria' => 'Natureza'
    ],
    [
        'titulo' => 'Invenção do Avião',
        'descricao' => 'O brasileiro Santos Dumont é considerado o pai da aviação, tendo realizado o primeiro voo homologado em 1906.',
        'imagem' => '/brasil/imgs/santos-dumont.jpg',
        'categoria' => 'Ciência'
    ],
    [
        'titulo' => 'Maior Rio do Mundo',
        'descricao' => 'O Rio Amazonas é o maior rio do mundo em volume de água, despejando cerca de 209 mil metros cúbicos de água por segundo no oceano.',
        'imagem' => '/brasil/imgs/amazonas.jpg',
        'categoria' => 'Natureza'
    ],
    // Novas curiosidades
    [
        'titulo' => 'Cristo Redentor: Uma das Sete Maravilhas',
        'descricao' => 'O Cristo Redentor, no Rio de Janeiro, foi eleito uma das Novas Sete Maravilhas do Mundo em 2007.',
        'imagem' => '/brasil/imgs/cristo-redentor.jpg',
        'categoria' => 'Cultura'
    ],
    [
        'titulo' => 'Maior Festa Popular do Mundo',
        'descricao' => 'O Carnaval do Rio de Janeiro é considerado a maior festa popular do planeta, atraindo milhões de turistas todos os anos.',
        'imagem' => '/brasil/imgs/carnaval.jpg',
        'categoria' => 'Cultura'
    ],
    [
        'titulo' => 'Futebol: Paixão Nacional',
        'descricao' => 'O Brasil é o único país pentacampeão mundial de futebol, com títulos em 1958, 1962, 1970, 1994 e 2002.',
        'imagem' => '/brasil/imgs/futebol.jpg',
        'categoria' => 'Esportes'
    ],
    [
        'titulo' => 'Maior Produtor de Café',
        'descricao' => 'O Brasil é o maior produtor e exportador de café do mundo desde o século XIX.',
        'imagem' => '/brasil/imgs/cafe.jpg',
        'categoria' => 'Economia'
    ],
    [
        'titulo' => 'Pantanal: Maior Planície Alagável',
        'descricao' => 'O Pantanal é a maior planície alagável do planeta, com fauna e flora riquíssimas.',
        'imagem' => '/brasil/imgs/pantanal.jpg',
        'categoria' => 'Natureza'
    ],
    [
        'titulo' => 'Feijoada: Prato Típico',
        'descricao' => 'A feijoada é considerada o prato mais tradicional do Brasil, feita com feijão preto e carnes variadas.',
        'imagem' => '/brasil/imgs/feijoada.jpg',
        'categoria' => 'Gastronomia'
    ],
    [
        'titulo' => 'Maior Comunidade Japonesa Fora do Japão',
        'descricao' => 'São Paulo abriga a maior comunidade japonesa fora do Japão, resultado da imigração iniciada em 1908.',
        'imagem' => '/brasil/imgs/bairro-liberdade.jpg',
        'categoria' => 'Sociedade'
    ],
    [
        'titulo' => 'Cataratas do Iguaçu',
        'descricao' => 'As Cataratas do Iguaçu, no Paraná, são uma das maiores e mais impressionantes quedas d\'agua do mundo.',
        'imagem' => '/brasil/imgs/cataratas.jpg',
        'categoria' => 'Natureza'
    ],
    [
        'titulo' => 'Açai: Fruto da Amazônia',
        'descricao' => 'O açaí, típico da Amazônia, é consumido em todo o Brasil e exportado para o mundo inteiro.',
        'imagem' => '/brasil/imgs/acai.jpg',
        'categoria' => 'Gastronomia'
    ],
    [
        'titulo' => 'Maior Sistema de Votação Eletrônica',
        'descricao' => 'O Brasil possui o maior sistema de votação eletrônica do mundo, utilizado desde 1996.',
        'imagem' => '/brasil/imgs/urna-eletronica.jpg',
        'categoria' => 'Sociedade'
    ],
    [
        'titulo' => 'Bossa Nova',
        'descricao' => 'A Bossa Nova, gênero musical brasileiro, conquistou o mundo com artistas como Tom Jobim e João Gilberto.',
        'imagem' => '/brasil/imgs/bossa-nova.jpg',
        'categoria' => 'Cultura'
    ],
    [
        'titulo' => 'Maior Exportador de Soja',
        'descricao' => 'O Brasil é o maior exportador mundial de soja, sendo referência no agronegócio.',
        'imagem' => '/brasil/imgs/soja.jpg',
        'categoria' => 'Economia'
    ],
    [
        'titulo' => 'Praia do Cassino',
        'descricao' => 'A Praia do Cassino, no Rio Grande do Sul, é considerada a mais longa do mundo, com mais de 240 km de extensão.',
        'imagem' => '/brasil/imgs/praia-cassino.jpg',
        'categoria' => 'Natureza'
    ],
    [
        'titulo' => 'Cachaça: Bebida Típica',
        'descricao' => 'A cachaça é a bebida alcoólica mais tradicional do Brasil e base da famosa caipirinha.',
        'imagem' => '/brasil/imgs/cachaca.jpg',
        'categoria' => 'Gastronomia'
    ],
    [
        'titulo' => 'Maior Frota de Helicópteros',
        'descricao' => 'São Paulo possui a maior frota de helicópteros do mundo, devido ao intenso trânsito da cidade.',
        'imagem' => '/brasil/imgs/helicoptero.jpg',
        'categoria' => 'Sociedade'
    ],
    [
        'titulo' => 'Capoeira',
        'descricao' => 'A capoeira é uma expressão cultural afro-brasileira que mistura arte marcial, dança e música.',
        'imagem' => '/brasil/imgs/capoeira.jpg',
        'categoria' => 'Cultura'
    ],
    [
        'titulo' => 'Maior Exportador de Carne Bovina',
        'descricao' => 'O Brasil é o maior exportador mundial de carne bovina.',
        'imagem' => '/brasil/imgs/carne-bovina.jpg',
        'categoria' => 'Economia'
    ],
    [
        'titulo' => 'Floresta de Araucárias',
        'descricao' => 'A Floresta de Araucárias, típica do sul do Brasil, é uma das mais antigas do mundo.',
        'imagem' => '/brasil/imgs/araucaria.jpg',
        'categoria' => 'Natureza'
    ],
    [
        'titulo' => 'Primeira Universidade das Américas',
        'descricao' => 'A Universidade do Brasil, atual UFRJ, foi a primeira universidade fundada nas Américas, em 1792.',
        'imagem' => '/brasil/imgs/ufrj.jpg',
        'categoria' => 'Ciência'
    ],
    [
        'titulo' => 'Maior Festa Junina',
        'descricao' => 'Campina Grande (PB) e Caruaru (PE) disputam o título de maior festa junina do mundo.',
        'imagem' => '/brasil/imgs/festa-junina.jpg',
        'categoria' => 'Cultura'
    ],
    [
        'titulo' => 'Pedra da Gávea',
        'descricao' => 'A Pedra da Gávea, no Rio de Janeiro, é o maior bloco de pedra à beira-mar do planeta.',
        'imagem' => '/brasil/imgs/pedra-gavea.jpg',
        'categoria' => 'Natureza'
    ],
    [
        'titulo' => 'Maior Hidrelétrica do Mundo',
        'descricao' => 'A Usina de Itaipu, na fronteira com o Paraguai, já foi a maior hidrelétrica do mundo em geração de energia.',
        'imagem' => '/brasil/imgs/itaipu.jpg',
        'categoria' => 'Ciência'
    ],
    [
        'titulo' => 'Maior Festa de Parintins',
        'descricao' => 'O Festival de Parintins, no Amazonas, é uma das maiores festas folclóricas do Brasil, com disputa entre os bois Garantido e Caprichoso.',
        'imagem' => '/brasil/imgs/parintins.jpg',
        'categoria' => 'Cultura'
    ],
    [
        'titulo' => 'Maior Produtor de Laranja',
        'descricao' => 'O Brasil é o maior produtor mundial de laranja e suco de laranja.',
        'imagem' => '/brasil/imgs/laranja.jpg',
        'categoria' => 'Economia'
    ],
    [
        'titulo' => 'Maior Exportador de Frango',
        'descricao' => 'O Brasil é o maior exportador mundial de carne de frango.',
        'imagem' => '/brasil/imgs/frango.jpg',
        'categoria' => 'Economia'
    ],
    [
        'titulo' => 'Maior Produtor de Cana-de-Açúcar',
        'descricao' => 'O Brasil é o maior produtor mundial de cana-de-açúcar.',
        'imagem' => '/brasil/imgs/cana.jpg',
        'categoria' => 'Economia'
    ],
    [
        'titulo' => 'Maior Exportador de Minério de Ferro',
        'descricao' => 'O Brasil é um dos maiores exportadores mundiais de minério de ferro.',
        'imagem' => '/brasil/imgs/minerio.jpg',
        'categoria' => 'Economia'
    ],
    [
        'titulo' => 'Maior Festa do Divino',
        'descricao' => 'A Festa do Divino Espírito Santo, em Pirenópolis (GO), é uma das mais tradicionais do Brasil.',
        'imagem' => '/brasil/imgs/divino.jpg',
        'categoria' => 'Cultura'
    ],
    [
        'titulo' => 'Maior Exportador de Calçados',
        'descricao' => 'O Brasil é um dos maiores exportadores mundiais de calçados.',
        'imagem' => '/brasil/imgs/calcados.jpg',
        'categoria' => 'Economia'
    ],
    [
        'titulo' => 'Maior Produtor de Papel e Celulose',
        'descricao' => 'O Brasil é referência mundial na produção de papel e celulose.',
        'imagem' => '/brasil/imgs/papel-celulose.jpg',
        'categoria' => 'Economia'
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
        <button class="filter-btn" data-category="Cultura">
            Cultura
        </button>
        <button class="filter-btn" data-category="Economia">
            Economia
        </button>
        <button class="filter-btn" data-category="Gastronomia">
            Gastronomia
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