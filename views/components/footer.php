    </div> <!-- Fechamento do div de espaçamento do header -->
    
    <!-- Footer -->
    <footer class="bg-brasil-green text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Sobre -->
                <div data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-4"><?= SITE_NAME ?></h3>
                    <p class="text-gray-300">
                        Seu assistente virtual para aprender sobre a história do Brasil de forma interativa e divertida.
                    </p>
                </div>
                
                <!-- Links Rápidos -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-bold mb-4">Links Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="?page=home" class="text-gray-300 hover:text-white transition-colors duration-300">Home Page</a></li>
                        <li><a href="?page=chat" class="text-gray-300 hover:text-white transition-colors duration-300">Chat Bot</a></li>
                        <li><a href="?page=quiz" class="text-gray-300 hover:text-white transition-colors duration-300">Quiz sobre a História</a></li>
                        <li><a href="?page=timeline" class="text-gray-300 hover:text-white transition-colors duration-300">Linha do Tempo</a></li>
                    </ul>
                </div>
                
                <!-- Contato -->
                <div class="text-right" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-xl font-bold mb-4">Contato</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-300">
                            <i class="fas fa-envelope mr-2"></i>
                            howdy@souzadev.com
                        </li>
                        <li class="text-gray-300">
                            <i class="fas fa-phone mr-2"></i>
                            (13) 99683-7572
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-green-700 mt-8 pt-8 text-center text-gray-300" data-aos="fade-up" data-aos-delay="600">
                <p>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script>
        // Menu Mobile
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html> 