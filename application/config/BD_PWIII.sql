DROP DATABASE IF EXISTS Projeto_PWIII;

CREATE DATABASE IF NOT EXISTS Projeto_PWIII;

USE Projeto_PWIII;

CREATE TABLE Usuario(
    codUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    userName VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(50) NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    ativo BOOL NOT NULL DEFAULT TRUE,
    cpf VARCHAR(11) NOT NULL UNIQUE
);

CREATE TABLE Produto(
codProduto INT PRIMARY KEY AUTO_INCREMENT,
nomeProduto VARCHAR(100) NOT NULL,
marca VARCHAR(100) NOT NULL,
preco DOUBLE NOT NULL,
descricao VARCHAR(200) NOT NULL
);

CREATE TABLE Estoque(
codProduto INT NOT NULL UNIQUE,
quantidade INT	
);

CREATE TABLE Vendas(
codVenda INT PRIMARY KEY AUTO_INCREMENT,
codProduto INT NOT NULL,
quantidade INT NOT NULL,
precoUni DECIMAL NOT NULL,
precoFinal DECIMAL NOT NULL,
dataVenda INT NOT NULL,
CPF VARCHAR(13)
);

ALTER TABLE Estoque ADD CONSTRAINT FK_ESTOQUE_PRODUTO
FOREIGN KEY (codProduto)
REFERENCES Produto (codProduto);

ALTER TABLE Vendas ADD CONSTRAINT FK_VENDA_PRODUTO
FOREIGN KEY (codProduto)
REFERENCES Produto (codProduto);

INSERT INTO Usuario(codUsuario, nome, email, userName, senha, tipo, ativo, cpf) VALUES ("1", "Bruna", "bruna@gmail.com", "bruna", "123", "cliente", true, "00000000000");
INSERT INTO Usuario(codUsuario, nome, email, userName, senha, tipo, ativo, cpf) VALUES ("2", "Joao", "joao@gmail.com", "joao", "456", "adm", true, "11111111111");
SELECT * FROM Usuario;