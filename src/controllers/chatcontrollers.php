<?php
       namespace App\Controllers;

       use GeminiAPI\Client;
       use GeminiAPI\Resources\Parts\TextPart;
       use Monolog\Logger;
       use Monolog\Handler\StreamHandler;

       class ChatController
       {
           private $client;
           private $logger;

           public function __construct()
           {
               // Initialize Gemini API Client
               $this->client = new Client(GOOGLE_API_KEY);
               // Initialize Monolog for logging
               $this->logger = new Logger('chat');
               $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../../logs/chat.log', Logger::ERROR));
           }

           public function handle()
           {
               header('Content-Type: application/json');

               // Verificar se é uma requisição POST
               if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                   echo json_encode(['success' => false, 'error' => 'Método não permitido']);
                   exit;
               }

               // Obter dados do POST
               $data = json_decode(file_get_contents('php://input'), true);

               if (!isset($data['message'])) {
                   echo json_encode(['success' => false, 'error' => 'Mensagem não fornecida']);
                   exit;
               }

               $message = $data['message'];
               $history = $data['history'] ?? [];

               // Processar a mensagem
               $response = $this->processWithGemini($message, $history);

               // Retornar a resposta
               echo json_encode([
                   'success' => true,
                   'response' => $response
               ]);
           }

           private function processWithGemini($message, $history)
           {
               try {
                   // Preparar o histórico de mensagens
                   $contents = [
                       new TextPart('Você é o Caramelo Bot, um assistente virtual especializado em história do Brasil. 
                                     Responda de forma educativa e amigável, sempre mantendo o foco no tema histórico.
                                     Use linguagem clara e acessível, adequada para estudantes.')
                   ];

                   // Adicionar histórico
                   foreach ($history as $msg) {
                       $contents[] = new TextPart($msg['content']);
                   }

                   // Adicionar a mensagem atual
                   $contents[] = new TextPart($message);

                   // Fazer a requisição à Gemini API
                   $response = $this->client->geminiPro()->generateContent($contents);

                   return $response->text();
               } catch (\Exception $e) {
                   $this->logger->error("Erro na Gemini API: " . $e->getMessage());
                   return "Desculpe, ocorreu um erro ao processar sua mensagem.";
               }
           }
       }

       // Instanciar e executar o controlador
       $controller = new ChatController();
       $controller->handle();
       ?>