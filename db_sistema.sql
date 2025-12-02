CREATE DATABASE IF NOT EXISTS revisao_php
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE revisao_php;

CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

INSERT INTO usuarios (nome, email, senha) VALUES
('Usuário Teste', 'teste@teste.com', 
 '$2y$10$v1FPeMMbxXfK2uAFWnXjUeSjoYUBHcCOv95ncf/W9iRnRA3A5ai6q');
