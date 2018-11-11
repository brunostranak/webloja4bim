<?php
require "modelo/localizacaoModelo.php";
require "modelo/produtoModelo.php";


function index(){
    $dados["localidades"]=verificar($_SESSION["idUser"]);
    
    exibir("localizacao/formulario",$dados);
    
    die();
    
   
        
        for($i=0; $i< count($_SESSION["carrinho"]); $i++){
        $dados["produtos"][$i]= pegarProdutoPorId($_SESSION["carrinho"][$i]["id"]);
        }
        
        
        exibir("produto/cupom",$dados);
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

