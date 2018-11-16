<?php
require "modelo/localizacaoModelo.php";
require "modelo/produtoModelo.php";


function index(){
    $dados["localidades"]=verificar($_SESSION["idUser"]);
    
    exibir("localizacao/formulario",$dados);
    
    
    
    
    
   
     
        }
        
function adicionarLocalizacao (){
    
    
        
        extract($_POST);
        $registro = verificar($_SESSION["idUser"]);
        
        if(!empty($registro)){
            atualizar($_SESSION["idUser"], $pais, $estado, $cidade, $endereco, $numero);
        }else{
        adicionar($_SESSION["idUser"], $pais, $estado, $cidade, $endereco, $numero);
        
    }
    
    redirecionar("cupom/index");
}        




        
   
    







?>

