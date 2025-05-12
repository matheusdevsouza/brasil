<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasil Verde</title>
<link rel="icon" type="image/png" href="/brasil/imgs/icon.png?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center bg-gradient-to-b from-brasil-green to-green-800 text-white overflow-hidden">
    <div class="relative z-10 text-center px-4 animate-slide-in-up">
        <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-slide-in-up">Brasil Verde</h1>
        <p class="text-xl md:text-2xl mb-8 animate-slide-in-up">Descubra a riqueza da história do Brasil</p>
        <a href="#periodos" class="bg-brasil-yellow text-brasil-green px-8 py-3 rounded-full font-bold hover:bg-yellow-400 transition-all duration-300 transform hover:scale-105 animate-bounce-in" data-aos="fade-up" data-aos-delay="400">
            Explorar História
        </a>
    </div>
</section>

<!-- Seção de Destaques -->
<section id="explore" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16 text-brasil-green animate-slide-in-up">Destaques da História</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="200" >
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                <img src="/brasil/imgs/independencia.jpg" alt="Independência do Brasil" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-brasil-green">Independência do Brasil</h3>
                    <p class="text-gray-600">O processo que transformou o Brasil em uma nação independente em 1822.</p>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                <img src="/brasil/imgs/república.jpg" alt="Proclamação da República" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-brasil-green">Proclamação da República</h3>
                    <p class="text-gray-600">O fim do Império e o início de uma nova era na história brasileira.</p>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                <img src="/brasil/imgs/brasilia.jpg" alt="Construção de Brasília" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-brasil-green">Construção de Brasília</h3>
                    <p class="text-gray-600">A criação da capital moderna do Brasil, um marco da arquitetura mundial.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção de Períodos Históricos -->
<div class="relative py-16 bg-brasil-green overflow-hidden"  id="periodos">
    <div class="absolute inset-0 bg-[url('imgs/pattern.png')] opacity-10"></div>
    <div class="absolute inset-0 transform -skew-x-12 bg-brasil-green"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-4" data-aos="fade-up" data-aos-delay="200">Períodos Históricos</h2>
        <p class="text-white/80" data-aos="fade-up" data-aos-delay="200">Descubra os momentos mais importantes que moldaram o Brasil</p>
    </div>
</div>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        
        <div class="space-y-12">
            <!-- Período Colonial -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2">
                    <img src="/brasil/imgs/colonial.jpg" alt="Período Colonial" class="rounded-lg shadow-lg w-full" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Período Colonial</h3>
                    <p class="text-gray-600 mb-4" data-aos="fade-up" data-aos-delay="200">O período colonial brasileiro (1500-1822) foi marcado pela exploração de recursos naturais, como o pau-brasil, e pela implementação do sistema de capitanias hereditárias.</p>
                    <a href="?page=timeline&period=colonial" class="inline-block bg-brasil-yellow text-brasil-green px-6 py-2 rounded-full font-bold hover:bg-yellow-400 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                        Saiba Mais
                    </a>
                </div>
            </div>
            
            <!-- Período Imperial -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-8" data-aos="fade-up" data-aos-delay="200">
                <div class="md:w-1/2">
                    <img src="imgs/imperial.jpg" alt="Período Imperial" class="rounded-lg shadow-lg w-full">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Período Imperial</h3>
                    <p class="text-gray-600 mb-4" data-aos="fade-up" data-aos-delay="200">O Império do Brasil (1822-1889) foi um período de consolidação da independência e de importantes transformações sociais, como a abolição da escravidão.</p>
                    <a href="?page=timeline&period=imperial" class="inline-block bg-brasil-yellow text-brasil-green px-6 py-2 rounded-full font-bold hover:bg-yellow-400 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                        Saiba Mais
                    </a>
                </div>
            </div>
            
            <!-- Período Republicano -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2">
                    <img src="imgs/republicano.jpg" alt="Período Republicano" class="rounded-lg shadow-lg w-full" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Período Republicano</h3>
                    <p class="text-gray-600 mb-4" data-aos="fade-up" data-aos-delay="200">A República brasileira (1889-presente) tem sido marcada por diferentes fases, incluindo a Era Vargas, a ditadura militar e a redemocratização.</p>
                    <a href="?page=timeline&period=republicano" class="inline-block bg-brasil-yellow text-brasil-green px-6 py-2 rounded-full font-bold hover:bg-yellow-400 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                        Saiba Mais
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divisor de Seção -->
<div class="relative py-16 bg-brasil-green overflow-hidden">
    <div class="absolute inset-0 bg-[url('imgs/pattern.png')] opacity-10"></div>
    <div class="absolute inset-0 transform -skew-x-12 bg-brasil-green"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-4" data-aos="fade-up" data-aos-delay="200">Teste Seu Conhecimento</h2>
        <p class="text-white/80" data-aos="fade-up" data-aos-delay="200">Participe do nosso quiz e descubra o quanto você sabe sobre a história do Brasil</p>
        <a href="?page=quiz" class="inline-block mt-6 bg-white text-brasil-green px-8 py-3 rounded-full font-bold hover:bg-white-400 transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
            Começar Quiz
        </a>
    </div>
</div>

<!-- Seção de Curiosidades -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Curiosidades Históricas</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Curiosidade 1 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Origem do Nome Brasil</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">O nome Brasil vem da árvore pau-brasil, que era abundante no litoral brasileiro e foi um dos primeiros produtos explorados pelos portugueses.</p>
            </div>
            
            <!-- Curiosidade 2 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Primeira Capital</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">Salvador foi a primeira capital do Brasil, de 1549 até 1763, quando a capital foi transferida para o Rio de Janeiro.</p>
            </div>
            
            <!-- Curiosidade 3 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Construção de Brasília</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">Brasília foi construída em apenas 41 meses, de 1956 a 1960, e é considerada um marco da arquitetura moderna.</p>
            </div>
            
            <!-- Curiosidade 4 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Maior Floresta Tropical</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">A Amazônia é a maior floresta tropical do mundo e abriga a maior biodiversidade do planeta.</p>
            </div>

            <!-- Curiosidade 5 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Lei Áurea</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">A Lei Áurea, assinada em 1888, aboliu oficialmente a escravidão no Brasil, tornando o país o último das Américas a acabar com a prática.</p>
            </div>

            <!-- Curiosidade 6 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Independência do Brasil</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">A independência do Brasil foi proclamada por Dom Pedro I em 7 de setembro de 1822, às margens do rio Ipiranga.</p>
            </div>

            <!-- Curiosidade 7 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Quilombo dos Palmares</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">O Quilombo dos Palmares foi o maior refúgio de escravizados fugitivos do Brasil colonial, resistindo por quase um século.</p>
            </div>

            <!-- Curiosidade 8 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Primeira Constituição</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">A primeira Constituição brasileira foi promulgada em 1824, estabelecendo a monarquia constitucional no país.</p>
            </div>

            <!-- Curiosidade 9 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Proclamação da República</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">A República foi proclamada em 15 de novembro de 1889, encerrando o período imperial e iniciando uma nova era política.</p>
            </div>

            <!-- Curiosidade 10 -->
            <div class="bg-gray-50 rounded-lg p-6 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-xl font-bold mb-4 text-brasil-green" data-aos="fade-up" data-aos-delay="200">Primeira Eleição Direta</h3>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">A primeira eleição direta para presidente no Brasil ocorreu em 1894, elegendo Prudente de Morais.</p>
            </div>
        </div>
    </div>
</section>

<!-- Estilos de Animação -->
<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideInUp {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes bounceIn {
    0% { transform: scale(0.3); opacity: 0; }
    50% { transform: scale(1.05); opacity: 0.8; }
    70% { transform: scale(0.9); opacity: 0.9; }
    100% { transform: scale(1); opacity: 1; }
}

.animate-fade-in {
    animation: fadeIn 1s ease-out;
}

.animate-slide-in-up {
    animation: slideInUp 1s ease-out;
}

.animate-bounce-in {
    animation: bounceIn 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
</style>

<!-- Scripts -->
<script>
// Animação de entrada dos elementos
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, {
        threshold: 0.1
    });
    
    sections.forEach(section => {
        observer.observe(section);
    });
});
</script> 
</body>
</html>

