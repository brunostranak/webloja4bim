<?php

function adicionar($id, $pais, $estado, $cidade, $endereco, $numero) {

    $sql = "INSERT INTO tblLocal (idCliente,Pais,Estado,Cidade,Endereco,Numero) VALUES ('$id','$pais','$estado','$cidade','$endereco','$numero')";
   $resultado= mysqli_query($cnx = conn(), $sql);
    
    
    

    
}

?>
