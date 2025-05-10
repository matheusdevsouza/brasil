-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS brasil_verde;
USE brasil_verde;

-- Tabela de eventos históricos
CREATE TABLE IF NOT EXISTS historical_events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    year INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    period ENUM('Colonial', 'Imperial', 'Republicano') NOT NULL,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de curiosidades
CREATE TABLE IF NOT EXISTS curiosities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    category VARCHAR(50) NOT NULL,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de perguntas do quiz
CREATE TABLE IF NOT EXISTS quiz_questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    correct_answer VARCHAR(255) NOT NULL,
    explanation TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de opções do quiz
CREATE TABLE IF NOT EXISTS quiz_options (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question_id INT NOT NULL,
    option_text VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (question_id) REFERENCES quiz_questions(id) ON DELETE CASCADE
);

-- Tabela de resultados do quiz
CREATE TABLE IF NOT EXISTS quiz_results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    score INT NOT NULL,
    total_questions INT NOT NULL,
    completed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de interações com o chat
CREATE TABLE IF NOT EXISTS chat_interactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    answer TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de métricas
CREATE TABLE IF NOT EXISTS metrics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    total_access INT DEFAULT 0,
    quiz_participants INT DEFAULT 0,
    chat_interactions INT DEFAULT 0,
    average_score DECIMAL(5,2) DEFAULT 0.00,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de itens da galeria
CREATE TABLE IF NOT EXISTS gallery_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    category ENUM('pinturas', 'fotografias', 'documentos', 'artefatos') NOT NULL,
    year INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserção de dados iniciais
INSERT INTO metrics (total_access, quiz_participants, chat_interactions, average_score) VALUES
(0, 0, 0, 0.00);

-- Inserção de eventos históricos
INSERT INTO historical_events (year, title, description, period) VALUES
(1500, 'Descobrimento do Brasil', 'Pedro Álvares Cabral chega ao litoral brasileiro.', 'Colonial'),
(1822, 'Independência do Brasil', 'Dom Pedro I proclama a independência do Brasil.', 'Imperial'),
(1889, 'Proclamação da República', 'Marechal Deodoro da Fonseca proclama a República.', 'Republicano');

-- Inserção de curiosidades
INSERT INTO curiosities (title, description, category) VALUES
('Origem do Nome Brasil', 'O nome Brasil vem da árvore pau-brasil, que era abundante no litoral brasileiro.', 'História'),
('Maior Floresta Tropical', 'A Amazônia é a maior floresta tropical do mundo.', 'Natureza');

-- Inserção de perguntas do quiz
INSERT INTO quiz_questions (question, correct_answer, explanation) VALUES
('Em que ano o Brasil foi descoberto oficialmente?', '1500', 'O Brasil foi oficialmente descoberto em 22 de abril de 1500.'),
('Qual foi a primeira capital do Brasil?', 'Salvador', 'Salvador foi a primeira capital do Brasil, de 1549 até 1763.');

-- Inserção de opções do quiz
INSERT INTO quiz_options (question_id, option_text) VALUES
(1, '1500'),
(1, '1492'),
(1, '1502'),
(1, '1498'),
(2, 'Rio de Janeiro'),
(2, 'Salvador'),
(2, 'São Paulo'),
(2, 'Recife');

-- Inserção de dados iniciais na galeria
INSERT INTO gallery_items (title, description, image_url, category, year) VALUES
('Proclamação da República', 'Pintura histórica retratando o momento da Proclamação da República em 1889.', 'imgs/gallery/proclamacao.jpg', 'pinturas', 1889),
('Construção de Brasília', 'Fotografia histórica da construção da capital federal.', 'imgs/gallery/brasilia.jpg', 'fotografias', 1960),
('Lei Áurea', 'Documento original da Lei Áurea que aboliu a escravidão no Brasil.', 'imgs/gallery/lei-aurea.jpg', 'documentos', 1888),
('Coroa Imperial', 'Réplica da coroa imperial brasileira, símbolo do período monárquico.', 'imgs/gallery/coroa.jpg', 'artefatos', 1822),
('Independência do Brasil', 'Pintura de Pedro Américo retratando o Grito do Ipiranga.', 'imgs/gallery/independencia.jpg', 'pinturas', 1822),
('Construção do Cristo Redentor', 'Fotografia histórica da construção do monumento no Rio de Janeiro.', 'imgs/gallery/cristo.jpg', 'fotografias', 1931); 