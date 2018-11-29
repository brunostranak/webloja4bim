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
preco FLOAT(6,2),
imagem VARCHAR (100),
idCategoria INT,
sobre VARCHAR(100),
qtEstoque INT,
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
valorPedido FLOAT(6,2),
dtPedido DATE,

PRIMARY KEY(idPedido),
FOREIGN KEY (idCliente) REFERENCES tblCliente (idCliente),
FOREIGN KEY (idLocal) REFERENCES tbllocal (idLocal)



) engine = innodb;


CREATE TABLE tblitempedido(
idItempedido INT AUTO_INCREMENT,
idProduto INT,
quantidade INT,
idPedido INT,

PRIMARY KEY(idItempedido),
FOREIGN KEY (idProduto) REFERENCES tblproduto (idProduto),
FOREIGN KEY (idPedido) REFERENCES tblpedido (idPedido)



) engine = innodb;








INSERT INTO `tblCategoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Games'),
(2, 'Animes'),
(3, 'Filmes'),
(4, 'Teste2');

INSERT INTO `tblProduto` (`idProduto`, `descricao`, `preco`, `imagem`, `idCategoria`, `sobre`, `qtEstoque`) VALUES
(1, 'Camiseta League of Legends', 25.00, 'camisalol.jpg', 1, 'Tamanhos P, M e G', 30),
(4, 'Camiseta Minecraft', 25.00, 'camisamine.jpg', 1, 'Tamanhos P e M', 30),
(5, 'Camisa Death Note', 25.00, 'camisetaL.jpg', 2, 'Tamanhos P, M, G e GG', 30),
(6, 'Moletom One Piece', 100.00, 'moletom.jpg', 2, 'Tamanhos P, M, G, GG e XL', 30),
(7, 'Camiseta Itachi Naruto', 25.00, 'camisetnaruto.png', 2, 'Tamanhos P e G', 30),
(8, 'Camiseta  Attack on Titan', 25.00, 'camisetatitan.jpg', 2, 'Tamanhos M e G', 30),
(9, 'Camiseta Harry Potter', 25.00, 'camisetahp.jpg', 3, 'Tamanhos P, M e G', 30),
(10, 'Moletom Assassin\'s Creed', 100.00, 'camisetacreed.jpg', 1, 'Tamanhos P e M', 30);


INSERT INTO `tblCliente` (`idCliente`, `nmPessoa`, `dtNasc`, `email`, `senha`) VALUES
(1, 'Bruno Henrique', '0000-00-00', 'brunostranak01@gmail.com', 'bruno123'),
(3, 'G. Feld', '1902-09-20', 'stevan_feldmann@hotmail.com', '12345678'),
(5, 'fulano2', '0000-00-00', 'fulano@gmail.com', 'fulano123');


INSERT INTO `tblcupom` (`idCupom`, `cupom`, `desconto`, `decimaldesc`) VALUES
(1, '10NATAL', 10, 0.1);

INSERT INTO `tblLocal` (`idLocal`, `idCliente`, `pais`, `estado`, `cidade`, `endereco`, `numero`) VALUES
(1, 1, 'Brasil', 'SP', 'Itapetininga', 'Rua das Rosas', '2235'),
(2, 3, 'Brasil', 'SP', 'Sorocaba', 'Rua das Palmeiras', '32'),
(3, 5, 'Brasil', 'RJ', 'Cabo Frio', 'Rua teste', '9');

INSERT INTO `tblpedido` (`idPedido`, `idCliente`, `idLocal`, `valorPedido`, `dtPedido`) VALUES
(1, 1, 1, 67.00, '2018-11-25'),
(2, 1, 1, 25.00, '2018-11-25'),
(3, 1, 1, 50.00, '2018-11-25'),
(4, 1, 1, 25.00, '2018-11-26'),
(5, 1, 1, 25.00, '2018-11-26'),
(6, 5, 3, 22.00, '2018-11-26');

INSERT INTO `tblitempedido` (`idItempedido`, `idProduto`, `quantidade`, `idPedido`) VALUES
(1, 1, 1, 1),
(2, 8, 2, 1),
(3, 1, 1, 2),
(4, 1, 2, 3),
(5, 1, 1, 4),
(6, 5, 1, 5),
(7, 1, 1, 6),
(8, 1, 3, 6),
(9, 4, 1, 6);






DELIMITER $$
CREATE PROCEDURE DecrementoEstoque(IN idProd INT, IN quantidade INT)
BEGIN

UPDATE tblproduto SET qtEstoque = qtEstoque-quantidade WHERE idProduto = idProd; 

END $$
DELIMITER;



CREATE OR replace view webloja.vw_teste As SELECT 
c.idCliente, c.nmPessoa, count(p.idPedido) FROM 
tblpedido p INNER JOIN tblcliente c ON (c.idCliente=p.idCliente) 
order by count(p.idPedido);








