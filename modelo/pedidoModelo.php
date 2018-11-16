<?php

function cadastrarPedido($idCliente,$idLocal,$valorPedido,$dtPedido){
  
    $sql="INSERT INTO tblpedido (idCliente, idLocal, valorPedido, dtPedido) VALUES('$idCliente','$idLocal','$valorPedido','$dtPedido')";
    
    mysqli_query(conn(),$sql);
    
    $sql2="SELECT max(idPedido) from tblpedido";
    $retorno=mysqli_query(conn(),$sql2);
    $registro= mysqli_fetch_assoc($retorno);
    
            
    return $registro;
}


function cadastrarItemPedido ($idProduto,$quantidade,$idPedido){
    
    $sql="INSERT INTO tblitempedido (idProduto, quantidade, idPedido) VALUES('$idProduto','$quantidade','$idPedido')";
    
    mysqli_query(conn(), $sql);
    
}

function listarPedidosPorId($idCliente){
    
    
    $sql="SELECT ped.idPedido, p.descricao, ped.valorPedido, ped.dtPedido, item.quantidade  
          FROM tblpedido ped INNER JOIN tblitempedido item ON (ped.idPedido=item.idPedido)
        INNER JOIN tblproduto p ON (p.idProduto=item.idProduto) INNER JOIN tblcliente c ON
          (c.idCliente = ped.idCliente) WHERE c.idCliente = '$idCliente';";
   
    $resultado = mysqli_query(conn(), $sql);
    while($pedido= mysqli_fetch_assoc($resultado)){
        $pedidos[]= $pedido;
    }
    
    
    return $pedidos;
}
    


