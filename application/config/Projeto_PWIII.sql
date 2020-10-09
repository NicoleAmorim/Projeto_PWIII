
CREATE DATABASE Projeto_PWIII;

USE Projeto_PWIII;

CREATE TABLE Usuario(
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    userName VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(50) NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    ativo BOOL NOT NULL DEFAULT TRUE,
    cpf VARCHAR(11) NOT NULL UNIQUE
);

CREATE TABLE Produto(
idProduto INT PRIMARY KEY AUTO_INCREMENT,
codBarras VARCHAR(13) NOT NULL UNIQUE,
nome VARCHAR(100) NOT NULL,
descricao VARCHAR(200) NOT NULL,
preco DOUBLE NOT NULL,
estoque INT NOT NULL,
ativo VARCHAR(10) NOT NULL,
foto VARCHAR(100) NULL
);

INSERT INTO Usuario(idUsuario, nome, email, userName, senha, tipo, ativo, cpf) VALUES ("1", "Bruna", "bruna@gmail.com", "bruna", "123", "cliente", true, "00000000000");
INSERT INTO Usuario(idUsuario, nome, email, userName, senha, tipo, ativo, cpf) VALUES ("2", "Joao", "joao@gmail.com", "joao", "456", "adm", true, "11111111111");
SELECT * FROM Usuario;