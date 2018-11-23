<?php
require("modelo/produtoModelo.php");


/** admin */

function index(){
    
    exibir("dashboard/index");
    
    
}

/** admin */
function listarProdutos(){
    $dados["produtos"]= pegarTodosProdutos();
    
    exibir("dashboard/listarProdutos",$dados);
}


?>


