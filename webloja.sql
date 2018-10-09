DROP DATABASE WEBLOJA;
CREATE DATABASE WEBLOJA;
USE WEBLOJA;



CREATE TABLE tblCliente(
idCliente INT AUTO_INCREMENT,
nmPessoa VARCHAR(60),
dtNasc DATE,
email VARCHAR(60),
senha VARCHAR(20),
PRIMARY KEY(idCliente)
) engine = innodb;

CREATE TABLE tblCategoria(
idCategoria INT AUTO_INCREMENT,
nomeCategoria VARCHAR(60),
PRIMARY KEY(idCategoria)
        
) engine = innodb;

CREATE TABLE tblProduto(
idProduto INT AUTO_INCREMENT,
descricao VARCHAR(60),
preco FLOAT,
imagem VARCHAR (100),
idCategoria INT,
sobre VARCHAR(100),
PRIMARY KEY(idProduto),
FOREIGN KEY (idCategoria) REFERENCES tblCategoria (idCategoria)


) engine = innodb;



