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

CREATE TABLE tblLocal(
idLocal INT AUTO_INCREMENT,
idCliente INT,
Pais VARCHAR(60),
Estado VARCHAR(60),
Cidade VARCHAR(60),
Endereco VARCHAR(60),
Numero VARCHAR(10),

PRIMARY KEY(idLocal),
FOREIGN KEY (idCliente) REFERENCES tblCliente (idCliente)


) engine = innodb;



