# Brasil Verde - Plataforma Educacional

Uma plataforma educacional interativa sobre a história do Brasil, desenvolvida com PHP, JavaScript e MySQL.

## Novidades e Mudanças Recentes

- **Chatbot Caramelo Bot totalmente local:**
  - Agora utiliza um sistema próprio baseado em `data.json`, sem dependência de APIs externas.
  - Sugestões de perguntas aparecem dinamicamente enquanto o usuário digita.
  - Efeito typewriter nas respostas do bot.
  - Interface aprimorada e mais responsiva.
- **Remoção do Gemini AI:**
  - O chatbot não utiliza mais a API Gemini, tornando o sistema 100% local e sem necessidade de chave de API.
- **Quiz aprimorado:**
  - Sistema de rounds: cada round possui 5 perguntas.
  - Mensagem de parabéns ao atingir 40 pontos ou mais no décimo round.
  - Visual renovado e responsivo.
- **Linha do tempo expandida:**
  - Mais eventos históricos, organizados em ordem cronológica.
  - Novos filtros detalhados: Pré-Colonial, Brasil Colônia, Brasil Império, Primeira República, Era Vargas, Ditadura Militar, Nova República.
- **Galeria de imagens:**
  - Galeria estática com imagens históricas e culturais, sem necessidade de banco de dados.
- **Curiosidades:**
  - Muitas novas curiosidades históricas, culturais, naturais, científicas e econômicas adicionadas na homepage e na página de curiosidades.
  - Novas categorias de curiosidades e filtros visuais.
- **Melhorias visuais e de usabilidade:**
  - Animações de entrada, hover e transições em cards, botões e containers.
  - Layouts mais modernos e responsivos em todas as páginas.
- **Remoção de funcionalidades:**
  - Todo o sistema de login/autenticação foi removido.
  - Dependências e arquivos relacionados ao Gemini AI e banco de dados para galeria foram removidos.

## Características

- Interface moderna e responsiva
- Linha do tempo interativa e expandida
- Quiz educativo com rounds
- Curiosidades históricas, culturais, naturais e científicas
- Chatbot inteligente (Caramelo Bot) com sugestões e efeito typewriter
- Galeria de imagens estática

## Requisitos

- PHP 7.4 ou superior
- MySQL 5.7 ou superior (apenas para recursos administrativos)
- Servidor web (Apache/Nginx)
- Composer (para gerenciamento de dependências)
- Node.js e NPM (para o Tailwind CSS)

## Instalação

1. Clone o repositório:
```bash
git clone https://github.com/matheusdevsouza/brasil.git
cd CarameloBOT
```

2. Instale as dependências do PHP:
```bash
composer install
```

3. Instale as dependências do Node.js:
```bash
npm install
```

4. Configure o banco de dados (opcional):
- Crie um banco de dados MySQL se for usar recursos administrativos
- Importe o arquivo `config/database.sql`
- Configure as credenciais em `config/config.php`

5. Configure o servidor web:
- Apache: Configure o DocumentRoot para a pasta `public`
- Nginx: Configure o root para a pasta `public`

6. Configure as permissões:
```bash
chmod 755 -R public/
chmod 777 -R logs/
```

7. Compile os assets:
```bash
npm run build
```

## Configuração

1. Copie o arquivo de configuração:
```bash
cp config/config.example.php config/config.php
```

2. Edite o arquivo `config/config.php` com suas configurações:
- Credenciais do banco de dados (opcional)
- Configurações de email
- Outras configurações específicas

## Uso

1. Acesse a aplicação pelo navegador:
```
http://localhost/CarameloBOT
```

2. O chatbot Caramelo Bot estará disponível no canto inferior direito da tela.

## Estrutura do Projeto

```
brasil-verde/
├── api/              # Endpoints da API
├── config/           # Arquivos de configuração
├── logs/             # Logs da aplicação
├── public/           # Arquivos públicos
│   ├── css/         # Estilos compilados
│   ├── js/          # Scripts JavaScript
│   └── imgs/        # Imagens
├── views/            # Templates e componentes
│   ├── components/  # Componentes reutilizáveis
│   └── pages/       # Páginas da aplicação
├── composer.json    # Dependências PHP
├── package.json     # Dependências Node.js
└── README.md        # Este arquivo
```

## Desenvolvimento

1. Para desenvolvimento, execute:
```bash
npm run dev
```

2. Para compilar os assets para produção:
```bash
npm run build
```

## Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Commit suas mudanças (`git commit -am 'Adiciona nova feature'`)
4. Push para a branch (`git push origin feature/nova-feature`)
5. Crie um Pull Request

## Licença

Este projeto está licenciado sob a licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.

## Suporte

Para suporte, envie um email para hwody@souzadev.com ou abra uma issue no GitHub. 