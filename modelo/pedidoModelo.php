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


function ativarProcedureEstoque($id,$quantidade){
    
    
    $sql="call DecrementoEstoque($id ,$quantidade)";
    
    mysqli_query(conn(),$sql);
    
    
    
}


function listarPedidosIntervaloData($dtInicio,$dtFim){
    
    $sql="SELECT * FROM tblpedido WHERE dtPedido>='$dtInicio' AND dtPedido<='$dtFim' ";
    $registros=mysqli_query(conn(),$sql);
    
    while($pedido = mysqli_fetch_assoc($registros)){
        
        $produtos["produtos"]= listarProdutosPedidosPorId($pedido["idPedido"]);
        $pedidos[]= array_merge_recursive($pedido, $produtos);
    }
    
    
    if(!empty($pedidos)){
    return $pedidos;
    }
    
}


function listarPedidosLocalidade($local){
    
    $comando="SELECT * FROM tbllocal WHERE cidade='$local' OR estado='$local' ";
    $resultados=mysqli_query(conn(),$comando);
    
    while($local = mysqli_fetch_assoc($resultados)){
        
        
        $locais[]= $local;
    }
    
    if(!empty($locais)){
    foreach($locais as $local){
        
        
    
    $sql="SELECT * FROM tblpedido WHERE idLocal = $local[idLocal] ";
    $registros=mysqli_query(conn(),$sql);
    
    while($pedido = mysqli_fetch_assoc($registros)){
        
        $produtos["produtos"]= listarProdutosPedidosPorId($pedido["idPedido"]);
       
        $pedidos[]= array_merge_recursive($pedido, $produtos);
       
        
    }
    
    }
    
    
    
    for($i=0;$i< count($pedidos); $i++){
       $idlocal= $pedidos[$i]['idLocal'];
        $sql3="SELECT * FROM tbllocal WHERE idLocal = $idlocal  ";
    $registros3=mysqli_query(conn(),$sql3);
    $result= mysqli_fetch_assoc($registros3);
    $pedidos[$i]["cidade"]= $result["cidade"];
    $pedidos[$i]["estado"]= $result["estado"];
    
    }
    
    }
    
    
    if(!empty($pedidos)){
    return $pedidos;
    }
    
}



    


