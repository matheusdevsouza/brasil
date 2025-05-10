<!-- Header da Página -->
<section class="bg-brasil-green text-white py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-montserrat font-bold mb-4">Linha do Tempo</h1>
        <p class="text-lg">
            Explore os principais eventos que marcaram a história do Brasil
        </p>
    </div>
</section>

<!-- Linha do Tempo -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Filtros -->
            <div class="mb-8 flex flex-wrap gap-4">
                <button class="filter-btn active" data-period="all">Todos</button>
                <button class="filter-btn" data-period="colonial">Período Colonial</button>
                <button class="filter-btn" data-period="imperial">Império</button>
                <button class="filter-btn" data-period="republica">República</button>
            </div>
            
            <!-- Timeline -->
            <div id="timeline" class="relative">
                <!-- Linha central -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-brasil-green"></div>
                
                <!-- Eventos serão carregados aqui via JavaScript -->
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const timeline = document.getElementById('timeline');
    const filterButtons = document.querySelectorAll('.filter-btn');
    let currentPeriod = 'all';
    
    // Função para carregar eventos
    async function loadEvents(period = 'all') {
        try {
            const response = await fetch(`api/events.php?period=${period}`);
            const data = await response.json();
            
            if (data.success) {
                renderEvents(data.events);
            } else {
                console.error('Erro ao carregar eventos:', data.error);
            }
        } catch (error) {
            console.error('Erro:', error);
        }
    }
    
    // Função para renderizar eventos
    function renderEvents(events) {
        timeline.innerHTML = '<div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-brasil-green"></div>';
        
        events.forEach((event, index) => {
            const isEven = index % 2 === 0;
            const eventDiv = document.createElement('div');
            eventDiv.className = `relative mb-12 ${isEven ? 'left-timeline' : 'right-timeline'}`;
            
            eventDiv.innerHTML = `
                <div class="timeline-content bg-white p-6 rounded-lg shadow-lg relative">
                    <div class="absolute top-1/2 ${isEven ? 'right-0' : 'left-0'} transform translate-x-${isEven ? '1/2' : '-1/2'} -translate-y-1/2 w-4 h-4 bg-brasil-green rounded-full"></div>
                    <div class="timeline-date text-brasil-green font-bold mb-2">${event.year}</div>
                    <h3 class="text-xl font-montserrat font-bold mb-2">${event.title}</h3>
                    <p class="text-gray-600">${event.description}</p>
                </div>
            `;
            
            timeline.appendChild(eventDiv);
        });
    }
    
    // Event Listeners para filtros
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const period = this.dataset.period;
            
            // Atualizar botões
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Carregar eventos do período
            loadEvents(period);
        });
    });
    
    // Carregar eventos iniciais
    loadEvents();
});
</script>

<style>
/* Estilos da Timeline */
.left-timeline {
    margin-right: 50%;
    padding-right: 2rem;
}

.right-timeline {
    margin-left: 50%;
    padding-left: 2rem;
}

.filter-btn {
    padding: 0.5rem 1rem;
    border: 2px solid #1B5E20;
    border-radius: 0.5rem;
    color: #1B5E20;
    font-weight: 600;
    transition: all 0.3s ease;
}

.filter-btn:hover {
    background-color: #1B5E20;
    color: white;
}

.filter-btn.active {
    background-color: #1B5E20;
    color: white;
}

/* Animação de entrada */
.timeline-content {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.5s ease forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsividade */
@media (max-width: 768px) {
    .left-timeline,
    .right-timeline {
        margin: 0;
        padding: 0 0 0 2rem;
    }
    
    .timeline-content {
        margin-left: 1rem;
    }
}
</style> 