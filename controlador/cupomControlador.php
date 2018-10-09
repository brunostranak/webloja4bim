<?php

/** admin */

/*function desconto(){

	if (ehPost()) {
        extract($_POST);
        
$valorP = 
$percentual = 30;
$valorcomDesconto = $valorP * ( 1 - $percentual / 100 );
    
	

}

/** admin */


function listar(){
	$dados["categorias"]= pegarTodasCategorias ();
	exibir('produto/listar', $dados);

}
\\

?>