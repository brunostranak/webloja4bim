<?php

function verificarCupom ($cupom){
    
    $sql= "SELECT * FROM tblcupom where cupom='$cupom'";
   $resultado = mysqli_query(conn(), $sql);
    $dadoscupom = mysqli_fetch_assoc($resultado);
    
    return $dadoscupom;
        
   
    
    
    
}

