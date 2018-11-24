<?php

require("modelo/produtoModelo.php");
require("modelo/categoriaModelo.php");
require("modelo/pedidoModelo.php");

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

/** admin */
function listarPedidosDatas() {

if(ehPost()){
extract($_POST);

$dados["pedidos"] = listarPedidosIntervaloData($dtInicio, $dtFim);
exibir("dashboard/listarPedidosDatas", $dados);
}else{

exibir("dashboard/listarPedidosDatas");
}


}


/** admin */
function listarPedidosLocal(){

if(ehPost()){

extract($_POST);

$dados["pedidos"] = listarPedidosLocalidade($local);
exibir("dashboard/listarPedidosLocal",$dados);
morrer($dados["pedidos"]);

}else{

exibir("dashboard/listarPedidosLocal");


}
}
?>


