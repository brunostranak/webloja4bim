<?php

function checar ($cupom){
    
    $sql= "SELECT * FROM tblcupom where cupom='$cupom'";
   $resultado = mysqli_query(conn(), $sql);
    $dadoscupom = mysqli_fetch_assoc($resultado);
    
    return $dadoscupom;
}

function listar (){
    $sql= "SELECT * FROM tblcupom";
    $retorno = mysqli_query(conn(), $sql);
    while ($registro = mysqli_fetch_assoc($retorno)){
        
     $cupons[]=   $registro;
    }
    
  
    if(!empty($cupons)){
    return $cupons;
    }
}
   
 function cadastrar ($cupom, $desconto, $decimaldesc) {
    $sql = "INSERT INTO tblcupom (cupom, desconto, decimaldesc) 
			VALUES ('$cupom', '$desconto', '$decimaldesc')";
    $resultado = mysqli_query($cnx = conn(), $sql);
   
}


function editar($id, $cupom, $desconto, $decimaldesc) {
    $sql = "UPDATE tblcupom SET cupom = '$cupom', desconto = '$desconto', decimaldesc = '$decimaldesc' WHERE idCupom= $id";
    
    
   mysqli_query($cnx = conn(), $sql);
        
    
}

function deletar($id) {
    $sql = "DELETE FROM tblcupom WHERE idCupom = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
   
            
}   

function pegarCupomPorId($id){
    
    $sql= "SELECT * FROM tblcupom WHERE idCupom = '$id' ";
    $retorno = mysqli_query(conn(), $sql);
    $registros = mysqli_fetch_assoc($retorno);
    
    return $registros;
    
}
    
    


