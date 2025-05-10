<!-- Header da Página -->
<div class="bg-brasil-green text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-montserrat font-bold mb-4">Galeria Histórica</h1>
        <p class="text-lg max-w-2xl mx-auto">
            Explore imagens e artefatos que contam a história do Brasil
        </p>
    </div>
</div>

<!-- Filtros -->
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-center space-x-4 mb-8">
        <button class="filter-btn active" data-category="all">
            Todas
        </button>
        <button class="filter-btn" data-category="pinturas">
            Pinturas
        </button>
        <button class="filter-btn" data-category="fotografias">
            Fotografias
        </button>
        <button class="filter-btn" data-category="documentos">
            Documentos
        </button>
        <button class="filter-btn" data-category="artefatos">
            Artefatos
        </button>
    </div>

    <!-- Grid da Galeria -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-grid">
        <!-- Items serão carregados via JavaScript -->
    </div>

    <!-- Paginação -->
    <div class="flex justify-center mt-8 space-x-2" id="pagination">
        <!-- Botões de paginação serão inseridos aqui -->
    </div>

    <!-- Loading Spinner -->
    <div id="loading" class="hidden">
        <div class="flex justify-center items-center py-8">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-brasil-green"></div>
        </div>
    </div>
</div>

<!-- Modal do Lightbox -->
<div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 hidden z-50">
    <div class="container mx-auto px-4 h-full flex items-center justify-center">
        <div class="relative max-w-4xl w-full">
            <button id="close-lightbox" class="absolute -top-12 right-0 text-white hover:text-brasil-yellow transition-colors duration-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <img id="lightbox-image" src="" alt="" class="w-full h-auto rounded-lg">
            <div class="mt-4 text-white text-center">
                <h3 id="lightbox-title" class="text-xl font-montserrat font-bold mb-2"></h3>
                <p id="lightbox-description" class="text-gray-300"></p>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryGrid = document.getElementById('gallery-grid');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const pagination = document.getElementById('pagination');
    const loading = document.getElementById('loading');
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxDescription = document.getElementById('lightbox-description');
    const closeLightbox = document.getElementById('close-lightbox');
    
    let currentPage = 1;
    let currentCategory = 'all';
    let totalPages = 1;
    
    // Função para carregar itens da galeria
    async function loadGalleryItems(page = 1, category = 'all') {
        try {
            loading.classList.remove('hidden');
            galleryGrid.innerHTML = '';
            
            const response = await fetch(`api/gallery.php?page=${page}&category=${category}`);
            const data = await response.json();
            
            if (data.success) {
                renderGallery(data.data.items);
                renderPagination(data.data.pagination);
            } else {
                console.error('Erro ao carregar galeria:', data.error);
            }
        } catch (error) {
            console.error('Erro:', error);
        } finally {
            loading.classList.add('hidden');
        }
    }
    
    // Função para renderizar os itens da galeria
    function renderGallery(items) {
        galleryGrid.innerHTML = '';
        
        items.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.className = 'gallery-item group';
            itemElement.innerHTML = `
                <div class="relative overflow-hidden rounded-lg shadow-lg cursor-pointer transform transition-transform duration-300 hover:scale-105">
                    <img src="${item.image_url}" 
                         alt="${item.title}" 
                         class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-end">
                        <div class="p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-lg font-montserrat font-bold">${item.title}</h3>
                            <p class="text-sm text-gray-200">${item.year}</p>
                        </div>
                    </div>
                </div>
            `;
            
            itemElement.addEventListener('click', () => {
                openLightbox(item);
            });
            
            galleryGrid.appendChild(itemElement);
        });
    }
    
    // Função para renderizar a paginação
    function renderPagination(pagination) {
        totalPages = pagination.total_pages;
        currentPage = pagination.current_page;
        
        let paginationHTML = '';
        
        // Botão Anterior
        paginationHTML += `
            <button class="pagination-btn ${currentPage === 1 ? 'disabled' : ''}" 
                    ${currentPage === 1 ? 'disabled' : ''} 
                    data-page="${currentPage - 1}">
                Anterior
            </button>
        `;
        
        // Números das páginas
        for (let i = 1; i <= totalPages; i++) {
            if (
                i === 1 || 
                i === totalPages || 
                (i >= currentPage - 2 && i <= currentPage + 2)
            ) {
                paginationHTML += `
                    <button class="pagination-btn ${i === currentPage ? 'active' : ''}" 
                            data-page="${i}">
                        ${i}
                    </button>
                `;
            } else if (
                i === currentPage - 3 || 
                i === currentPage + 3
            ) {
                paginationHTML += `
                    <span class="px-4">...</span>
                `;
            }
        }
        
        // Botão Próximo
        paginationHTML += `
            <button class="pagination-btn ${currentPage === totalPages ? 'disabled' : ''}" 
                    ${currentPage === totalPages ? 'disabled' : ''} 
                    data-page="${currentPage + 1}">
                Próximo
            </button>
        `;
        
        pagination.innerHTML = paginationHTML;
        
        // Adicionando event listeners aos botões de paginação
        pagination.querySelectorAll('.pagination-btn').forEach(button => {
            button.addEventListener('click', () => {
                const page = parseInt(button.dataset.page);
                if (!button.classList.contains('disabled')) {
                    loadGalleryItems(page, currentCategory);
                }
            });
        });
    }
    
    // Função para abrir o lightbox
    function openLightbox(item) {
        lightboxImage.src = item.image_url;
        lightboxTitle.textContent = item.title;
        lightboxDescription.textContent = item.description;
        lightbox.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    
    // Event Listeners
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.dataset.category;
            
            // Atualiza botões ativos
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            // Atualiza categoria atual e carrega itens
            currentCategory = category;
            currentPage = 1;
            loadGalleryItems(currentPage, category);
        });
    });
    
    closeLightbox.addEventListener('click', () => {
        lightbox.classList.add('hidden');
        document.body.style.overflow = '';
    });
    
    // Fecha o lightbox com a tecla ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
            lightbox.classList.add('hidden');
            document.body.style.overflow = '';
        }
    });
    
    // Inicialização
    loadGalleryItems();
});
</script>

<style>
.filter-btn {
    @apply px-6 py-2 rounded-full text-gray-600 bg-gray-100 hover:bg-brasil-green hover:text-white transition-colors duration-300;
}

.filter-btn.active {
    @apply bg-brasil-green text-white;
}

.pagination-btn {
    @apply px-4 py-2 rounded-lg text-gray-600 bg-gray-100 hover:bg-brasil-green hover:text-white transition-colors duration-300;
}

.pagination-btn.active {
    @apply bg-brasil-green text-white;
}

.pagination-btn.disabled {
    @apply opacity-50 cursor-not-allowed;
}

.gallery-item {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.3s ease-in-out;
}

.gallery-item.hidden {
    opacity: 0;
    transform: translateY(20px);
    pointer-events: none;
}
</style> 