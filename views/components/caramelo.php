<!-- Botão do Chatbot -->
<button id="chatbot-button" class="fixed bottom-6 right-6 bg-brasil-yellow text-brasil-green p-1 rounded-full shadow-lg hover:bg-yellow-400 transition-all duration-300 transform hover:scale-110 hover:rotate-12 z-50">
    <img src="imgs/bot.png" alt="Caramelo Bot" class="w-12 h-12 rounded-full">
</button>

<!-- Modal do Chatbot -->
<div id="chatbot-modal" class="fixed bottom-24 right-6 w-96 bg-white rounded-lg shadow-xl hidden z-50 transform transition-all duration-500 ease-in-out scale-95 opacity-0">
    <!-- Header do Chat -->
    <div class="bg-brasil-green text-white p-4 rounded-t-lg flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="imgs/bot.png" alt="Caramelo Bot" class="w-8 h-8 rounded-full border-2 border-white">
            <h3 class="font-montserrat font-bold">Caramelo Bot</h3>
        </div>
        <button id="close-chat" class="hover:text-brasil-yellow transition-colors duration-300 transform hover:rotate-90">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    
    <!-- Área de Mensagens -->
    <div id="chat-messages" class="h-96 overflow-y-auto p-4 space-y-4">
        <!-- Mensagem de Boas-vindas -->
        <div class="flex items-start space-x-2 animate-fade-in">
            <img src="imgs/bot.png" alt="Caramelo Bot" class="w-10 h-10 rounded-full flex-shrink-0">
            <div class="bg-gray-100 rounded-lg p-3 max-w-[80%] animate-slide-in-left">
                <p class="text-sm">Olá! Eu sou o Caramelo Bot, o cachorro mais adorado pelos brasileiros. Me conta aí, o que você quer saber sobre o Brasil?</p>
            </div>
        </div>
    </div>
    
    <!-- Área de Input -->
    <div class="border-t p-4">
        <!-- SUGESTÕES -->
        <div id="suggestions-box" class="hidden mb-2"></div>
        <form id="chat-form" class="flex space-x-2">
            <input type="text" 
                   id="chat-input" 
                   class="flex-1 border rounded-lg px-4 py-2 focus:outline-none focus:border-brasil-green transition-all duration-300"
                   placeholder="Digite uma palavra-chave..." autocomplete="off">
            <button type="submit" 
                    class="bg-brasil-green text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
                Enviar
            </button>
        </form>
    </div>
</div>

<!-- Estilos de Animação e Sugestões -->
<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

@keyframes slideInRight {
    from { transform: translateX(20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

@keyframes bounceIn {
    0% { transform: scale(0.3); opacity: 0; }
    50% { transform: scale(1.05); opacity: 0.8; }
    70% { transform: scale(0.9); opacity: 0.9; }
    100% { transform: scale(1); opacity: 1; }
}

.animate-fade-in {
    animation: fadeIn 0.5s ease-out;
}

.animate-slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}

.animate-slide-in-right {
    animation: slideInRight 0.5s ease-out;
}

.animate-bounce-in {
    animation: bounceIn 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.message-typing::after {
    content: '...';
    animation: typing 1.5s infinite;
}

@keyframes typing {
    0% { content: '.'; }
    33% { content: '..'; }
    66% { content: '...'; }
}

#suggestions-box {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 0.75rem;
    box-shadow: 0 4px 24px 0 rgba(0,0,0,0.08);
    padding: 0.5rem 0;
    max-height: 200px;
    overflow-y: auto;
    position: relative;
    z-index: 10;
    transition: box-shadow 0.2s;
}
.suggestion-item {
    padding: 0.75rem 1.25rem;
    cursor: pointer;
    font-size: 1rem;
    color: #1B5E20;
    border-bottom: 1px solid #f3f4f6;
    transition: background 0.2s, color 0.2s;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.suggestion-item:last-child {
    border-bottom: none;
}
.suggestion-item:hover, .suggestion-item.active {
    background: #e8f5e9;
    color: #388e3c;
}
.suggestion-icon {
    width: 1.5rem;
    height: 1.5rem;
    background: #fbc02d;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #fff;
    font-size: 1rem;
}
</style>

<!-- Script do Chatbot -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatbotButton = document.getElementById('chatbot-button');
    const chatbotModal = document.getElementById('chatbot-modal');
    const closeChat = document.getElementById('close-chat');
    const chatForm = document.getElementById('chat-form');
    const chatInput = document.getElementById('chat-input');
    const chatMessages = document.getElementById('chat-messages');
    
    // Estado do chat
    let chatHistory = [];
    
    // Função para adicionar mensagem ao chat com animações
    function addMessage(message, isUser = false) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'flex items-start space-x-2 ' + (isUser ? 'justify-end' : '');
        const avatar = isUser ? 
            `<img src="imgs/user.png" alt="Usuário" class="w-8 h-8 rounded-full flex-shrink-0">` :
            `<img src="imgs/bot.png" alt="Caramelo Bot" class="w-8 h-8 rounded-full flex-shrink-0">`;
        const messageContent = `
            <div class="bg-${isUser ? 'brasil-green text-white' : 'gray-100'} rounded-lg p-3 max-w-[80%] animate-${isUser ? 'slide-in-right' : 'slide-in-left'}">
                <p class="text-sm"></p>
            </div>
        `;
        messageDiv.innerHTML = isUser ? messageContent + avatar : avatar + messageContent;
        messageDiv.classList.add('animate-fade-in');
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;

        // Typewriter effect for bot
        if (!isUser) {
            const p = messageDiv.querySelector('p');
            let i = 0;
            function typeWriter() {
                if (i < message.length) {
                    p.innerHTML += message.charAt(i);
                    i++;
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                    setTimeout(typeWriter, 15 + Math.random() * 30); // velocidade variável
                }
            }
            typeWriter();
        } else {
            // Usuário: mostra mensagem inteira
            messageDiv.querySelector('p').textContent = message;
        }
    }
    
    // Função para mostrar indicador de digitação
    function showTypingIndicator() {
        const typingDiv = document.createElement('div');
        typingDiv.className = 'flex items-start space-x-2 animate-fade-in';
        typingDiv.innerHTML = `
            <img src="imgs/bot.png" alt="Caramelo Bot" class="w-8 h-8 rounded-full flex-shrink-0">
            <div class="bg-gray-100 rounded-lg p-3 max-w-[80%] animate-slide-in-left">
                <p class="text-sm message-typing">Digitando</p>
            </div>
        `;
        chatMessages.appendChild(typingDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        return typingDiv;
    }
    
    // Função para enviar mensagem
    async function sendMessage(message) {
        try {
            // Adicionando mensagem do usuário
            addMessage(message, true);
            
            // Mostrando indicador de digitação
            const typingIndicator = showTypingIndicator();
            
            const response = await fetch('api/chat.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    message: message,
                    history: chatHistory
                })
            });
            
            // Removendo indicador de digitação
            typingIndicator.remove();
            
            const data = await response.json();
            
            if (data.success) {
                // Adicionando resposta do bot com delay para simular digitação
                setTimeout(() => {
                    addMessage(data.response);
                }, 500);
                
                chatHistory.push({
                    role: 'user',
                    content: message
                }, {
                    role: 'assistant',
                    content: data.response
                });
            } else {
                addMessage('Desculpe, ocorreu um erro ao processar sua mensagem.');
            }
        } catch (error) {
            console.error('Erro:', error);
            addMessage('Desculpe, ocorreu um erro ao processar sua mensagem.');
        }
    }
    
    // Event Listeners
    chatbotButton.addEventListener('click', () => {
        chatbotModal.classList.remove('hidden');
        setTimeout(() => {
            chatbotModal.classList.remove('scale-95', 'opacity-0');
            chatbotModal.classList.add('scale-100', 'opacity-100');
        }, 50);
    });
    
    closeChat.addEventListener('click', () => {
        chatbotModal.classList.remove('scale-100', 'opacity-100');
        chatbotModal.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            chatbotModal.classList.add('hidden');
        }, 300);
    });
    
    chatForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const message = chatInput.value.trim();
        
        if (message) {
            sendMessage(message);
            chatInput.value = '';
        }
    });

    // SUGESTÕES DE PERGUNTAS
    let allQuestions = [];
    fetch('data.json')
        .then(res => res.json())
        .then(data => {
            allQuestions = data.questions.map(q => q.question);
        });

    const suggestionsBox = document.getElementById('suggestions-box');

    chatInput.addEventListener('input', function() {
        const value = this.value.trim().toLowerCase();
        if (!value) {
            suggestionsBox.classList.add('hidden');
            suggestionsBox.innerHTML = '';
            return;
        }
        // Filtra perguntas que contenham a palavra digitada
        const suggestions = allQuestions.filter(q => q.toLowerCase().includes(value)).slice(0, 6);
        if (suggestions.length === 0) {
            suggestionsBox.classList.add('hidden');
            suggestionsBox.innerHTML = '';
            return;
        }
        suggestionsBox.innerHTML = suggestions.map(q => `
            <div class="suggestion-item">
                <span class="suggestion-icon">?</span>
                <span>${q}</span>
            </div>
        `).join('');
        suggestionsBox.classList.remove('hidden');

        // Clique na sugestão preenche o input
        Array.from(suggestionsBox.querySelectorAll('.suggestion-item')).forEach((item, idx) => {
            item.addEventListener('mousedown', function(e) {
                e.preventDefault();
                chatInput.value = suggestions[idx];
                suggestionsBox.classList.add('hidden');
                suggestionsBox.innerHTML = '';
                chatInput.focus();
            });
        });
    });

    // Esconde sugestões ao perder o foco (mas permite clicar)
    chatInput.addEventListener('blur', function() {
        setTimeout(() => {
            suggestionsBox.classList.add('hidden');
        }, 150);
    });
});
</script> 