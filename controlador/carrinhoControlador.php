<?php

	require "modelo/produtoModelo.php";
	require "./servicos/carrinhoServico.php";
	
	


	function index(){
		
		$carrinhoProdutos = $_SESSION["carrinho"];
		$dados["produtos"] = pegarVariosProdutosPorId($carrinhoProdutos);

		exibir("produto/carrinho",$dados);
	}
	
	function adicionar($id){

		addCarrinho($id);
		redirecionar("carrinho/index");
	}
	
	function deletar($id){
		unset($_SESSION["carrinho"][$id]);
		unset($_SESSION["quant"]);
		$_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
		redirecionar("carrinho/index");
	}
?>