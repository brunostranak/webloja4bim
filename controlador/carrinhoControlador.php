<?php
require "modelo/produtoModelo.php";
 

//http://localhost/app/carrinho
function index()
{
    if (isset($_SESSION["carrinho"])) {
        $produtosCarrinho = array();
        $soma=0;
        foreach ($_SESSION["carrinho"] as $produtoSessao) {
            $produtoBanco = pegarProdutoPorId($produtoSessao["id"]);
            $produtosCarrinho[] = $produtoBanco; 
            $aux= $produtoSessao["quantidade"]*$produtoBanco["preco"];
            $soma= $soma + $aux;
        }
        
       

        $dados["produtos"] = $produtosCarrinho;
        $dados["total"] = $soma;
        exibir("produto/carrinho", $dados);
        
    } else {
        echo "Nao existem produtos no carrinho!";
    }
}

//http://localhost/app/carrinho/adicionar/2
function adicionar($id)
{
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    //vai existir a sessao carrinho!
    $alt = false ;


    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    if (!$alt) {
        $produto["id"] = $id;

        $produto["quantidade"]=1;

        $_SESSION["carrinho"][] = $produto;
        
        
        
        
    }
    
    redirecionar("carrinho/index");
    
 
    
}

//http://localhost/app/carrinho/deletar/2
function deletar($index)
{
    
    
    foreach($_SESSION["carrinho"] as $key => $produto){
        
     
       if($index==$produto["id"]){
           echo "deu certo";
           
           echo $produto["id"];
           unset ($_SESSION["carrinho"][$key]);
       }
       
    }
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    redirecionar("carrinho/index");
    
    
}



?>