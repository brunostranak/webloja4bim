<?php
require "modelo/localizacaoModelo.php";
require "modelo/produtoModelo.php";


function index(){
    
    
    
    
    if (ehPost()) {
        extract($_POST);
        
        adicionar($_SESSION["idUser"],$pais,$estado,$cidade,$endereco,$numero);
        
        
        for($i=0; $i< count($_SESSION["carrinho"]); $i++){
        $dados["produtos"][$i]= pegarProdutoPorId($_SESSION["carrinho"][$i]["id"]);
        }
        
        if(empty($dados)){
            echo "a";
        }else{
          //echo "<pre>";
             //print_r($dados);
         
        exibir("produto/cupom",$dados);
        }
        
    } else {
    	

        exibir("produto/localizacao");
    }
    
}






?>

