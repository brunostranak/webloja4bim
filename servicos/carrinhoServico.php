<?php
function addCarrinho($id){
	if (!isset($_SESSION["carrinho"])) {
		$_SESSION["carrinho"] = array();
		
	}
	if (!in_array($id, $_SESSION["carrinho"])) {
			$_SESSION["carrinho"][] = $id;

			
	}else{

		
		redirecionar("carrinho/index");
	}
}
?>