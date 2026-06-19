-- 1. Cria o banco de dados se não existir
CREATE DATABASE IF NOT EXISTS gerartxt;

-- 2. Seleciona o banco para uso
USE gerartxt;

-- 3. Cria a tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nascimento DATE,
    genero VARCHAR(20) NOT NULL,
    observacao TEXT
);