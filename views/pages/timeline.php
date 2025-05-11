<!-- Header da Página -->
<section class="bg-brasil-green text-white py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-montserrat font-bold mb-4" style="text-align: center;" data-aos="fade-up" data-aos-delay="200">Linha do Tempo</h1>
        <p class="text-lg" style="text-align: center;" data-aos="fade-up" data-aos-delay="200">
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
                <button class="filter-btn" data-period="pre-colonial">Pré-Colonial</button>
                <button class="filter-btn" data-period="colonial">Brasil Colônia</button>
                <button class="filter-btn" data-period="imperial">Brasil Império</button>
                <button class="filter-btn" data-period="primeira-republica">Primeira República</button>
                <button class="filter-btn" data-period="era-vargas">Era Vargas</button>
                <button class="filter-btn" data-period="ditadura">Ditadura Militar</button>
                <button class="filter-btn" data-period="nova-republica">Nova República</button>
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

    // NOVA LISTA DE EVENTOS CRONOLÓGICOS
    const allEvents = [
        // Pré-Colonial
        { year: 'Antes de 1500', title: 'Povos Indígenas', description: 'Diversos povos indígenas habitavam o território brasileiro, como Tupi, Guarani, Jê, Carajá, entre outros.', period: 'pre-colonial' },
        // Brasil Colônia
        { year: '1500', title: 'Descobrimento do Brasil', description: 'Pedro Álvares Cabral chega ao Brasil em 22 de abril.', period: 'colonial' },
        { year: '1530', title: 'Início da Colonização', description: 'Martim Afonso de Sousa lidera a primeira expedição colonizadora.', period: 'colonial' },
        { year: '1534', title: 'Capitanias Hereditárias', description: 'Divisão do território em capitanias hereditárias.', period: 'colonial' },
        { year: '1549', title: 'Governo-Geral', description: 'Criação do Governo-Geral e fundação de Salvador.', period: 'colonial' },
        { year: '1580-1640', title: 'União Ibérica', description: 'Portugal e Espanha sob o mesmo rei, afetando o Brasil.', period: 'colonial' },
        { year: '1630-1654', title: 'Invasões Holandesas', description: 'Holandeses ocupam parte do Nordeste, principalmente Pernambuco.', period: 'colonial' },
        { year: '1695', title: 'Quilombo dos Palmares', description: 'Destruição do Quilombo dos Palmares, símbolo da resistência negra.', period: 'colonial' },
        { year: '1707-1709', title: 'Guerra dos Emboabas', description: 'Conflito pelo controle das minas de ouro em Minas Gerais.', period: 'colonial' },
        { year: '1763', title: 'Transferência da Capital', description: 'A capital do Brasil é transferida de Salvador para o Rio de Janeiro.', period: 'colonial' },
        { year: '1789', title: 'Inconfidência Mineira', description: 'Movimento separatista liderado por Tiradentes em Minas Gerais.', period: 'colonial' },
        { year: '1798', title: 'Conjuração Baiana', description: 'Movimento popular por independência e igualdade social na Bahia.', period: 'colonial' },
        // Brasil Império
        { year: '1808', title: 'Chegada da Família Real', description: 'Família Real portuguesa chega ao Brasil fugindo de Napoleão.', period: 'imperial' },
        { year: '1822', title: 'Independência do Brasil', description: 'Dom Pedro I proclama a independência em 7 de setembro.', period: 'imperial' },
        { year: '1824', title: 'Primeira Constituição', description: 'Outorgada a primeira Constituição do Brasil.', period: 'imperial' },
        { year: '1831', title: 'Abdicação de Dom Pedro I', description: 'Dom Pedro I abdica e retorna a Portugal.', period: 'imperial' },
        { year: '1835-1845', title: 'Revolução Farroupilha', description: 'Revolta no Rio Grande do Sul por maior autonomia.', period: 'imperial' },
        { year: '1840', title: 'Golpe da Maioridade', description: 'Dom Pedro II assume o trono com 14 anos.', period: 'imperial' },
        { year: '1888', title: 'Lei Áurea', description: 'Abolição da escravidão no Brasil.', period: 'imperial' },
        { year: '1889', title: 'Proclamação da República', description: 'Fim do Império e início da República.', period: 'imperial' },
        // Primeira República
        { year: '1891', title: 'Primeira Constituição Republicana', description: 'Promulgação da primeira constituição da República.', period: 'primeira-republica' },
        { year: '1930', title: 'Revolução de 1930', description: 'Getúlio Vargas chega ao poder, fim da República Velha.', period: 'primeira-republica' },
        // Era Vargas
        { year: '1932', title: 'Revolução Constitucionalista', description: 'Movimento paulista por uma nova constituição.', period: 'era-vargas' },
        { year: '1937', title: 'Estado Novo', description: 'Início do regime ditatorial de Vargas.', period: 'era-vargas' },
        { year: '1945', title: 'Fim do Estado Novo', description: 'Vargas deposto, início da redemocratização.', period: 'era-vargas' },
        // Ditadura Militar
        { year: '1964', title: 'Golpe Militar', description: 'Início da Ditadura Militar no Brasil.', period: 'ditadura' },
        { year: '1968', title: 'AI-5', description: 'Ato Institucional mais duro do regime militar.', period: 'ditadura' },
        { year: '1979', title: 'Lei da Anistia', description: 'Anistia para presos e exilados políticos.', period: 'ditadura' },
        { year: '1985', title: 'Fim da Ditadura', description: 'Tancredo Neves eleito, fim do regime militar.', period: 'ditadura' },
        // Nova República
        { year: '1988', title: 'Constituição Cidadã', description: 'Promulgação da Constituição de 1988.', period: 'nova-republica' },
        { year: '1992', title: 'Impeachment de Collor', description: 'Primeiro impeachment de presidente no Brasil.', period: 'nova-republica' },
        { year: '1994', title: 'Plano Real', description: 'Criação do Real e controle da hiperinflação.', period: 'nova-republica' },
        { year: '2002', title: 'Lula Eleito Presidente', description: 'Primeiro operário eleito presidente do Brasil.', period: 'nova-republica' },
        { year: '2016', title: 'Impeachment de Dilma Rousseff', description: 'Segundo impeachment presidencial.', period: 'nova-republica' },
        { year: '2020', title: 'Pandemia de COVID-19', description: 'Brasil enfrenta a pandemia global.', period: 'nova-republica' },
        { year: '2022', title: 'Eleições e Retorno de Lula', description: 'Lula é eleito presidente novamente.', period: 'nova-republica' },
    ];

    // Função para carregar eventos
    function loadEvents(period = 'all') {
        let events = allEvents;
        if (period !== 'all') {
            events = allEvents.filter(ev => ev.period === period);
        }
        // Ordena cronologicamente (anos podem ser strings, então converte para número quando possível)
        events = events.slice().sort((a, b) => {
            const getYear = y => parseInt(y.year.match(/\d{4}/)) || 0;
            return getYear(a) - getYear(b);
        });
        renderEvents(events);
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
                    <div class="absolute top-1/2 ${isEven ? 'right-0' : 'left-0'} transform ${isEven ? 'translate-x-1/2' : '-translate-x-1/2'} -translate-y-1/2 w-4 h-4 bg-brasil-green rounded-full"></div>
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
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
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