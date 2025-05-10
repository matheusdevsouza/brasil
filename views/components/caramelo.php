<!-- Botão do Chatbot -->
<button id="chatbot-button" class="fixed bottom-6 right-6 bg-brasil-yellow text-brasil-green p-4 rounded-full shadow-lg hover:bg-yellow-400 transition-colors duration-300 z-50">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
    </svg>
</button>

<!-- Modal do Chatbot -->
<div id="chatbot-modal" class="fixed bottom-24 right-6 w-96 bg-white rounded-lg shadow-xl hidden z-50">
    <!-- Header do Chat -->
    <div class="bg-brasil-green text-white p-4 rounded-t-lg flex justify-between items-center">
        <h3 class="font-montserrat font-bold">Caramelo Bot</h3>
        <button id="close-chat" class="hover:text-brasil-yellow transition-colors duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    
    <!-- Área de Mensagens -->
    <div id="chat-messages" class="h-96 overflow-y-auto p-4 space-y-4">
        <!-- Mensagem de Boas-vindas -->
        <div class="flex items-start space-x-2">
            <div class="w-8 h-8 rounded-full bg-brasil-yellow flex items-center justify-center flex-shrink-0">
                <span class="text-brasil-green font-bold">C</span>
            </div>
            <div class="bg-gray-100 rounded-lg p-3 max-w-[80%]">
                <p class="text-sm">Olá! Eu sou o Caramelo Bot, seu assistente virtual sobre a história do Brasil. Como posso ajudar?</p>
            </div>
        </div>
    </div>
    
    <!-- Área de Input -->
    <div class="border-t p-4">
        <form id="chat-form" class="flex space-x-2">
            <input type="text" 
                   id="chat-input" 
                   class="flex-1 border rounded-lg px-4 py-2 focus:outline-none focus:border-brasil-green"
                   placeholder="Digite sua pergunta...">
            <button type="submit" 
                    class="bg-brasil-green text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                Enviar
            </button>
        </form>
    </div>
</div>

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
    
    // Função para adicionar mensagem ao chat
    function addMessage(message, isUser = false) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'flex items-start space-x-2 ' + (isUser ? 'justify-end' : '');
        
        const avatar = isUser ? '' : `
            <div class="w-8 h-8 rounded-full bg-brasil-yellow flex items-center justify-center flex-shrink-0">
                <span class="text-brasil-green font-bold">C</span>
            </div>
        `;
        
        const messageContent = `
            <div class="bg-${isUser ? 'brasil-green text-white' : 'gray-100'} rounded-lg p-3 max-w-[80%]">
                <p class="text-sm">${message}</p>
            </div>
        `;
        
        messageDiv.innerHTML = isUser ? messageContent + avatar : avatar + messageContent;
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Função para enviar mensagem
    async function sendMessage(message) {
        try {
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
            
            const data = await response.json();
            
            if (data.success) {
                addMessage(data.response);
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
        chatbotModal.classList.toggle('hidden');
    });
    
    closeChat.addEventListener('click', () => {
        chatbotModal.classList.add('hidden');
    });
    
    chatForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const message = chatInput.value.trim();
        
        if (message) {
            addMessage(message, true);
            sendMessage(message);
            chatInput.value = '';
        }
    });
});
</script> 