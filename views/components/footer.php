    </div> <!-- Fechamento do div de espaçamento do header -->
    
    <!-- Footer -->
    <footer class="bg-brasil-green text-white mt-20">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Sobre -->
                <div>
                    <h3 class="text-xl font-montserrat font-bold mb-4">Sobre o Brasil Verde</h3>
                    <p class="text-sm">
                        Projeto educativo que visa disseminar conhecimento sobre a história do Brasil,
                        promovendo a conscientização ambiental e cultural através de conteúdo interativo.
                    </p>
                </div>
                
                <!-- Links Rápidos -->
                <div>
                    <h3 class="text-xl font-montserrat font-bold mb-4">Links Rápidos</h3>
                    <ul class="space-y-2">
                        <?php foreach ($allowed_pages as $key => $value): ?>
                            <?php if ($key !== 'admin'): ?>
                                <li>
                                    <a href="?page=<?= $key ?>" class="hover:text-brasil-yellow transition-colors duration-300">
                                        <?= $value ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Contato -->
                <div>
                    <h3 class="text-xl font-montserrat font-bold mb-4">Contato</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Email: contato@brasilverde.edu.br</li>
                        <li>Telefone: (11) 1234-5678</li>
                        <li>Endereço: Universidade XYZ</li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-white/20 mt-8 pt-8 text-center text-sm">
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