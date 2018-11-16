<?php

function cadastrarPedido($idCliente,$idLocal,$valorPedido,$dtPedido){
    
    $sql="INSERT INTO tblpedido (idCliente, idLocal, valorPedido, dtPedido) VALUES('$idCliente','$idLocal','$valorPedido','$dtPedido')";
    
    mysqli_query(conn(),$sql);
    
    $sql2="SELECT max(idPedido) from tblpedido";
    $retorno=mysqli_query(conn(),$sql2);
    $registro= mysqli_fetch_assoc($retorno);
    
            
    return $registro;
}


function cadastrarItemPedido ($idProduto,$quantidade,$preco,$idPedido){
    
    $sql="INSERT INTO tblitempedido (idProduto, quantidade, valoritem, idPedido) VALUES('$idProduto','$quantidade','$preco','$idPedido')";
    
    mysqli_query(conn(), $sql);
    
}

