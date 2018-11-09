<?php
require "modelo/localizacaoModelo.php";
require "modelo/produtoModelo.php";


function index(){
    
    
    exibir("produto/cupom2");
    
    die();
    
   
        
        for($i=0; $i< count($_SESSION["carrinho"]); $i++){
        $dados["produtos"][$i]= pegarProdutoPorId($_SESSION["carrinho"][$i]["id"]);
        }
        
        
        exibir("produto/cupom",$dados);
        }
        
   
    







?>

