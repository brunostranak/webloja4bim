<?php

require("modelo/cupomModelo.php");
require ("modelo/produtoModelo.php");
require ("modelo/LocalizacaoModelo.php");

function index(){
   
        
        
    foreach ($_SESSION["carrinho"] as $idproduto){
        
        $produtoBanco = pegarProdutoPorId($idproduto['id']);
        $produtos[]= $produtoBanco;
        
    }
    
    $dados["produtos"] = $produtos;
    $dados["localizacao"]= verificar($_SESSION["idUser"]);
    
    exibir("produto/cupom",$dados);
}
function desconto(){

	
        extract($_POST);
        
        $dadoscupom= checar($cupom);
        
        
        
        foreach ($_SESSION["carrinho"] as $idproduto){
        
        $produtoBanco = pegarProdutoPorId($idproduto['id']);
        $produtos[]= $produtoBanco;
        
    }
    
    $dados["produtos"] = $produtos;
    $dados["localizacao"]= verificar($_SESSION["idUser"]);
    
        if(!empty($dadoscupom)){
            $dados["cupom"]=$dadoscupom;
        }
        
         
        
    
	
exibir("produto/cupom",$dados);
}


/** admin */

function listarCupons (){
    
    $dados["cupons"]= listar();
    
    exibir ("cupom/vizualizar",$dados);
}

/** admin */

function adicionarCupom (){
    
    if(ehPost()){
        
        extract($_POST);
        
        cadastrar($cupom, $desconto, $decimaldesc);
        
        listarCupons();
        
        
        
    }else{
        
        exibir("cupom/formulario");
    }
    }

function excluirCupom ($id){
    
    deletar($id);
    listarCupons();
    
    
}

function editarCupom ($id){
    
    if(ehPost()){
        
        extract($_POST);
        
        editar($id,$cupom, $desconto, $decimaldesc);
        
        listarCupons();
        
        
        
    }else{
        $dados["cupom"] = pegarCupomPorId($id);
        exibir("cupom/formulario",$dados);
    }
}



?>