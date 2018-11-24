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

function listarPedidos($idCliente){
    
    
    $sql="SELECT * FROM tblpedido WHERE idCliente='$idCliente'";
    
    $resultado= mysqli_query(conn(),$sql);
    
    while($linha=mysqli_fetch_assoc($resultado)){
        
        $produtos["produtos"]= listarProdutosPedidosPorId($linha["idPedido"]);
        $pedidos[]= array_merge_recursive($linha, $produtos);
    }
    
    return $pedidos;
}

function listarProdutosPedidosPorId($idPedido){
    
    
    $sql="SELECT p.imagem, p.preco, ped.idPedido, p.descricao, ped.valorPedido, ped.dtPedido, item.quantidade  
          FROM tblpedido ped INNER JOIN tblitempedido item ON (ped.idPedido=item.idPedido)
        INNER JOIN tblproduto p ON (p.idProduto=item.idProduto) INNER JOIN tblcliente c ON
          (c.idCliente = ped.idCliente) WHERE ped.idPedido = '$idPedido';";
   
    $resultado = mysqli_query(conn(), $sql);
    while($produto= mysqli_fetch_assoc($resultado)){
        $produtos[]= $produto;
    }
    
    
    return $produtos;
}


function ativarTriggerEstoque($id,$quantidade){
    
    
    $sql="call DecrementoEstoque($id ,$quantidade)";
    
    mysqli_query(conn(),$sql);
    
    
    
}
    


