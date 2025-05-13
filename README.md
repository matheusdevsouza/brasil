# Brasil Verde – Plataforma Educacional sobre a História do Brasil

**Brasil Verde** é um projeto de extensão universitária com foco educativo e social. A plataforma foi desenvolvida com PHP, JavaScript e MySQL, com o objetivo de promover o conhecimento histórico do Brasil de forma acessível, dinâmica e interativa, contribuindo com a formação cidadã e o fortalecimento da memória nacional.

---

## 🔗 Acesse o Projeto

👉 [Brasil Verde](https://www.souzadev.com/brasil)

---

## 🧠 Objetivo do Projeto

- Estimular o aprendizado da História do Brasil por meio de ferramentas digitais modernas.
- Criar um ambiente interativo que aproxime os usuários dos fatos históricos de forma leve e acessível.
- Contribuir com a educação de jovens e adultos, oferecendo uma plataforma gratuita e inclusiva.

---

## 🎯 Vinculação com os ODS da ONU

Este projeto está alinhado com os Objetivos de Desenvolvimento Sustentável (ODS) da ONU:

- 🎓 **ODS 4 – Educação de Qualidade**: Garantir acesso inclusivo, equitativo e de qualidade à educação e promover oportunidades de aprendizagem ao longo da vida para todos.

---

## 🛠️ Tecnologias Utilizadas

- **PHP**
- **HTML5**
- **CSS3 / TailwindCSS**
- **JavaScript (Vanilla)**
- **JSON**
- **MySQL** (opcional)
- **Node.js / NPM**
- **Composer**
- **Design Responsivo**
- **Animações com Transições**

---

## 🧪 Funcionalidades

- 🔁 Quiz educativo com rounds (10 rounds, 5 perguntas cada)
- 🧠 Caramelo Bot: chatbot local com sugestão de perguntas
- 📊 Sistema de pontuação e feedback visual**
- 🧭 Linha do tempo interativa
- 🖼️ Galeria de imagens com conteúdo cultural e histórico
- 🧩 Curiosidades históricas, científicas, culturais e naturais organizadas por categorias
- 🎨 Interface moderna com animações, responsividade e interações agradáveis

---

## 🧩 Novidades Recentes

- ✅ Caramelo Bot: sistema baseado em `data.json`, sem APIs externas
- ✂️ Remoção da Gemini AI: chatbot não depende mais de APIs externas nem de autenticação
- 🎉 Quiz com novo sistema de rounds e finalização com mensagem personalizada
- 🕰️ Linha do tempo com novos eventos e filtros históricos
- 🖼️ Galeria simplificada e otimizada (sem uso de banco de dados)
- ✨ Revisão completa do layout e usabilidade

---

## 📸 Imagens do Projeto

| Página        | Link                                                                 |
|---------------|----------------------------------------------------------------------|
| Home Page     | [Ver imagem](https://www.souzadev.com/brasil/imgs/Brasil%20Verde%20-%20Homepage.png)     |
| Timeline      | [Ver imagem](https://www.souzadev.com/brasil/imgs/Brasil%20Verde%20-%20Timeline.png)      |
| Curiosidades  | [Ver imagem](https://www.souzadev.com/brasil/imgs/Brasil%20Verde%20-%20Curiosidades.png)  |
| Galeria       | [Ver imagem](https://www.souzadev.com/brasil/imgs/Brasil%20Verde%20-%20Galeria.png)       |
| Quiz          | [Ver imagem](https://www.souzadev.com/brasil/imgs/Brasil%20Verde%20-%20Quiz.png)          |


---

## 🚀 Instalação

1. Clone o repositório:
```bash
git clone https://github.com/matheusdevsouza/brasil.git
cd brasil
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
    - Crie um banco de dados MySQL
    - Importe config/database.sql
    - Configure config/config.php

5. Configure o servidor:
    - Apache: defina ```public/``` como DocumentRoot
    - Nginx: defina ```public/``` como root

6. Configure permissões:
```bash
chmod 755 -R public/
chmod 777 -R logs/
```

7. Compile os assets:
```bash
npm run build
```

---

## ⚙️ Configuração

Copie e edite o arquivo de configuração:
```bash
cp config/config.example.php config/config.php
```

---

## 🧪 Como Executar Localmente

1. Inicie o servidor web (Apache, XAMPP, etc)

2. Acesse no navegador:
```bash
http://localhost/brasil
```

---

## 🗂️ Estrutura do Projeto
```
brasil-verde/
├── .vscode/                      # Configurações do VS Code
├── api/                          # Endpoints da API
│   ├── chat.php
│   ├── events.php
│   └── gallery.php
├── config/                       # Arquivos de configuração e banco de dados
│   ├── config.example.php
│   ├── config.php
│   ├── database.php
│   └── database.sql
├── imgs/                         # Imagens do projeto
├── node_modules/                 # Dependências JS
├── public/                       # Arquivos públicos acessíveis
│   └── css/                      # Arquivos CSS compilados e personalizados
│       ├── output.css
│       └── styles.css
├── src/                          # Código-fonte da aplicação
│   └── controllers/              # Controladores da lógica do chatbot
│       └── chatcontrollers.php
├── vendor/                       # Dependências PHP 
├── views/                        # Templates e páginas da aplicação
│   ├── components/               # Componentes reutilizáveis
│   │   ├── caramelo.php
│   │   ├── footer.php
│   │   └── header.php
│   └── pages/                    # Páginas principais do site
│       ├── curiosidades.php
│       ├── gallery.php
│       ├── home.php
│       ├── quiz.php
│       └── timeline.php
├── .env                          # Variáveis de ambiente 
├── .gitignore                    # Ignora arquivos/pastas no Git
├── chatbot.php                   # Endpoint ou lógica principal do chatbot
├── composer.json                 # Dependências PHP
├── composer.lock                 # Lockfile de dependências PHP
├── data.json                     # Base de dados local para o chatbot
├── index.php                     # Entrada principal da aplicação
├── LICENSE                       # Licença do projeto
├── package-lock.json             # Lockfile do Node.js
├── package.json                  # Dependências do Node.js
├── php.ini                       # Configuração personalizada do PHP
├── postcss.config.js             # Configuração do PostCSS
├── tailwind.config.js            # Configuração do TailwindCSS
└── README.md                     # Documentação do projeto
```

---

## 👨‍💻 Desenvolvimento

Modo dev:
```bash
npm run dev
```

Modo produção:
```bash
npm run build
```

---

## 📬 Suporte

Para dúvidas ou sugestões:

✉️ howdy@souzadev.com | 📞 (13) 99683-7572 | 🐛 Abra uma issue no GitHub

---

## 📄 Licença

Este projeto está sob a licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais detalhes.

---

## 💻 Desenvolvedor

**Matheus Souza**
Desenvolvedor Web e estudante de Análise e Desenvolvimento de Sistemas

🔗 [GitHub](https://github.com/matheusdevsouza/) | 🌐 [Portfolio](https://www.souzadev.com) | 🏢 [LinkedIn](https://www.linkedin.com/in/matheusouzadev/)
