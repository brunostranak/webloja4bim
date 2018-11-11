<?php

function adicionar($id, $pais, $estado, $cidade, $endereco, $numero) {

    $sql = "INSERT INTO tblLocal (idCliente,Pais,Estado,Cidade,Endereco,Numero) VALUES ('$id','$pais','$estado','$cidade','$endereco','$numero')";
   $resultado= mysqli_query(conn(), $sql);
    
    
    

    
}


function verificar($id){
    
    $sql= "SELECT * FROM tblLocal where idCliente = $id";
    $resultado = mysqli_query(conn(),$sql);
    $registro = mysqli_fetch_assoc($resultado);
    
    return $registro;
}


function atualizar($id, $pais, $estado, $cidade, $endereco, $numero) {
    
    $sql= "UPDATE tblLocal SET pais = '$pais', estado = '$estado', cidade = '$cidade', endereco = '$endereco', numero = '$numero' WHERE idCliente = $id";
    
    mysqli_query(conn(),$sql);
}

?>
