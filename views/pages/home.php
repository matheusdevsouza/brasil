<!-- Hero Section -->
<section class="bg-brasil-green text-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-montserrat font-bold mb-6">
                Descubra a História do Brasil
            </h1>
            <p class="text-lg mb-8">
                Uma jornada interativa através dos principais eventos e personagens que moldaram nosso país.
            </p>
            <a href="?page=timeline" 
               class="bg-brasil-yellow text-brasil-green px-8 py-3 rounded-lg font-bold hover:bg-yellow-400 transition-colors duration-300 inline-block">
                Começar Jornada
            </a>
        </div>
    </div>
</section>

<!-- Seções Principais -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Linha do Tempo -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-brasil-green rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-montserrat font-bold mb-2">Linha do Tempo</h3>
                <p class="text-gray-600 mb-4">
                    Explore os principais eventos históricos do Brasil, desde 1500 até os dias atuais.
                </p>
                <a href="?page=timeline" class="text-brasil-green hover:text-green-700 font-semibold">
                    Explorar →
                </a>
            </div>
            
            <!-- Curiosidades -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-brasil-green rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-montserrat font-bold mb-2">Curiosidades</h3>
                <p class="text-gray-600 mb-4">
                    Descubra fatos interessantes e pouco conhecidos sobre a história do Brasil.
                </p>
                <a href="?page=curiosities" class="text-brasil-green hover:text-green-700 font-semibold">
                    Descobrir →
                </a>
            </div>
            
            <!-- Quiz -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-brasil-green rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-montserrat font-bold mb-2">Quiz</h3>
                <p class="text-gray-600 mb-4">
                    Teste seus conhecimentos sobre a história do Brasil com nosso quiz interativo.
                </p>
                <a href="?page=quiz" class="text-brasil-green hover:text-green-700 font-semibold">
                    Começar →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sobre o Projeto -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-montserrat font-bold mb-6">Sobre o Brasil Verde</h2>
            <p class="text-gray-600 mb-8">
                O Brasil Verde é um projeto educativo que visa disseminar conhecimento sobre a história do Brasil
                de forma interativa e envolvente. Nossa missão é promover a conscientização ambiental e cultural
                através de conteúdo educativo de qualidade.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="?page=gallery" class="bg-brasil-green text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                    Galeria
                </a>
                <a href="#contato" class="border border-brasil-green text-brasil-green px-6 py-2 rounded-lg hover:bg-brasil-green hover:text-white transition-colors duration-300">
                    Contato
                </a>
            </div>
        </div>
    </div>
</section>

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

<style>
.animate-fade-in {
    animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style> 