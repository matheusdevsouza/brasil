<?php
// Configurações do Ambiente
define('APP_ENV', 'development');
define('APP_DEBUG', true);
define('APP_URL', 'http://localhost');
define('APP_NAME', 'Brasil Verde');

// Configurações do Banco de Dados
define('DB_CONNECTION', 'mysql');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_DATABASE', 'brasil_verde');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

// Configurações de Email
define('MAIL_MAILER', 'smtp');
define('MAIL_HOST', 'smtp.mailtrap.io');
define('MAIL_PORT', '2525');
define('MAIL_USERNAME', 'null');
define('MAIL_PASSWORD', 'null');
define('MAIL_ENCRYPTION', 'null');
define('MAIL_FROM_ADDRESS', 'null');
define('MAIL_FROM_NAME', APP_NAME);

// Configurações da API OpenAI
define('OPENAI_API_KEY', 'your-api-key-here');

// Configurações da API Gemini
define('GEMINI_API_KEY', 'AIzaSyAjnoKrIZBa7ziXJV0tYEoU4qAB3ONLimI');

// Configurações de Cache
define('CACHE_DRIVER', 'file');
define('CACHE_PREFIX', 'brasil_verde_');

// Configurações de Log
define('LOG_CHANNEL', 'stack');
define('LOG_LEVEL', 'debug');
define('LOG_SLACK_WEBHOOK_URL', '');

// Configurações de Upload
define('UPLOAD_MAX_SIZE', 10485760);
define('ALLOWED_FILE_TYPES', 'jpg,jpeg,png,gif,pdf,doc,docx'); 