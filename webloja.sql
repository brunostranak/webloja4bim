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
pais VARCHAR(60),
estado VARCHAR(60),
cidade VARCHAR(60),
endereco VARCHAR(60),
numero VARCHAR(10),

PRIMARY KEY(idLocal),
FOREIGN KEY (idCliente) REFERENCES tblCliente (idCliente)


) engine = innodb;

CREATE TABLE tblcupom(
idCupom INT AUTO_INCREMENT,
cupom VARCHAR(8),
desconto INT,
decimaldesc FLOAT,

PRIMARY KEY(idCupom)



) engine = innodb;

CREATE TABLE tblpedido(
idPedido INT AUTO_INCREMENT,
idCliente INT,
idLocal INT,
valorPedido FLOAT,
dtPedido DATE,

PRIMARY KEY(idPedido),
FOREIGN KEY (idCliente) REFERENCES tblCliente (idCliente),
FOREIGN KEY (idLocal) REFERENCES tbllocal (idLocal)



) engine = innodb;


CREATE TABLE tblitempedido(
idItempedido INT AUTO_INCREMENT,
idProduto INT,
quantidade FLOAT,
valoritem FLOAT,
idPedido INT,

PRIMARY KEY(idItempedido),
FOREIGN KEY (idProduto) REFERENCES tblproduto (idProduto),
FOREIGN KEY (idPedido) REFERENCES tblpedido (idPedido)



) engine = innodb;



