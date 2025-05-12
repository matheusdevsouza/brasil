<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/brasil/imgs/icon.png">
    
    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brasil-green': '#1B5E20',
                        'brasil-yellow': '#FBC02D',
                        'brasil-bg': '#F9F9F9'
                    },
                    fontFamily: {
                        'montserrat': ['Montserrat', 'sans-serif'],
                        'opensans': ['Open Sans', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!-- CSS Personalizado -->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        });
    </script>
</head>
<body>
    <!-- Header Fixo -->
    <header class="fixed top-0 left-0 right-0 bg-brasil-green text-white z-50">
        <nav class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="?page=home" class="text-2xl font-montserrat font-bold">
                    <?= SITE_NAME ?>
                </a>
                
                <!-- Menu de Navegação -->
                <div class="hidden md:flex space-x-6">
                    <?php foreach ($allowed_pages as $key => $value): ?>
                        <a href="?page=<?= $key ?>" 
                           class="hover:text-brasil-yellow transition-colors duration-300 <?= $page === $key ? 'text-brasil-yellow' : '' ?>">
                            <?= $value ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                
                <!-- Menu Mobile -->
                <button class="md:hidden" id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Menu Mobile Dropdown -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="flex flex-col space-y-3 mt-4 pb-3">
                    <?php foreach ($allowed_pages as $key => $value): ?>
                        <a href="?page=<?= $key ?>" 
                           class="hover:text-brasil-yellow transition-colors duration-300 <?= $page === $key ? 'text-brasil-yellow' : '' ?>">
                            <?= $value ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- Espaçamento para o conteúdo -->
    <div class="pt-10"> 