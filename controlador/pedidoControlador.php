<?php

require "modelo/localizacaoModelo.php";
require "modelo/pedidoModelo.php";
require "modelo/produtoModelo.php";



function cadastrar($valorPedido){
    
    extract($_POST);
    
    
    $localidades= verificar($_SESSION["idUser"]);
    $idUser= $_SESSION["idUser"];
    $idLocal= $localidades["idLocal"];
     date_default_timezone_set('America/Sao_Paulo');
   
    $dtPedido= date("Y-m-d");
    
    
    $registro = cadastrarPedido($idUser,$idLocal,$valorPedido,$dtPedido);
    
    $idPedido= $registro["max(idPedido)"];
    
    
    
    
    foreach($_SESSION["carrinho"] as $produto){
    $produtoBanco=pegarProdutoPorId($produto["id"]);    
    cadastrarItemPedido($produto["id"],$produto["quantidade"],$idPedido);
    
    }
    alert("Pedido efetuado com sucesso!");
    unset($_SESSION["carrinho"]);
    
    redirecionar("./produto/index");
    
    
}


function listar(){
    
    
    
   
    exibir("cadastro/informacoes",$dados);
    
    
}


?>
