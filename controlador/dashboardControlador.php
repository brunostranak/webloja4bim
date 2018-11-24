<?php

require("modelo/produtoModelo.php");
require("modelo/categoriaModelo.php");

/** admin */
function index() {

    exibir("dashboard/index");
}

/** admin */
function listarProdutosEstoque() {
    $dados["produtos"] = pegarTodosProdutos();

    exibir("dashboard/listarProdutosEstoque", $dados);
}

/** admin */
function listarProdutosPorCategoria() {

    if (ehPost()) {
        extract($_POST);
        $dados["categoriaselec"] = $categoria;
        $dados["produtos"] = pegarTodosProdutos();
        $dados["categorias"] = pegarTodasCategorias();
        exibir("dashboard/listarProdutosPorCategoria", $dados);
        
    } else {
        $dados["produtos"] = pegarTodosProdutos();
        $dados["categorias"] = pegarTodasCategorias();
        exibir("dashboard/listarProdutosPorCategoria", $dados);
    }
}
?>


