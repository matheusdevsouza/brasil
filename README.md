# Brasil Verde - Plataforma Educacional

Uma plataforma educacional interativa sobre a história do Brasil, desenvolvida com PHP, JavaScript e MySQL.

## Características

- Interface moderna e responsiva
- Linha do tempo interativa
- Quiz educativo
- Curiosidades históricas
- Chatbot inteligente (Caramelo Bot) usando Gemini AI
- Painel administrativo
- Sistema de métricas

## Requisitos

- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Servidor web (Apache/Nginx)
- Composer (para gerenciamento de dependências)
- Node.js e NPM (para o Tailwind CSS)
- Chave de API do Google Gemini

## Instalação

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/brasil-verde.git
cd brasil-verde
```

2. Instale as dependências do PHP:
```bash
composer install
```

3. Instale as dependências do Node.js:
```bash
npm install
```

4. Configure o banco de dados:
- Crie um banco de dados MySQL
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
- Credenciais do banco de dados
- Chave da API Gemini (obtenha em https://makersuite.google.com/app/apikey)
- Configurações de email
- Outras configurações específicas

## Uso

1. Acesse a aplicação pelo navegador:
```
http://localhost/brasil-verde
```

2. Credenciais padrão do administrador:
- Email: admin@brasilverde.edu.br
- Senha: admin123

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

Para suporte, envie um email para suporte@brasilverde.edu.br ou abra uma issue no GitHub. 