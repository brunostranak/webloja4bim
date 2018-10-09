<?php
require "modelo/categoriaModelo.php";
/** admin */

function index(){
$dados["categorias"]= pegarTodasCategorias();
exibir('categoria/listar',$dados);


}

/** admin */
function adicionar(){

	if (ehPost()) {
        extract($_POST);

    adicionarCategoria($categoria);
        redirecionar("categoria/index");
    } else {

    	$dados["categorias"]= pegarTodasCategorias();
      

        exibir("categoria/formulario",$dados);
    }

	

}

/** admin */

function listar(){
	$dados["categorias"]= pegarTodasCategorias ();
	exibir('produto/listar', $dados);

}

/** admin */

function deletar($idCategoria){

deletarCategoria($idCategoria);
redirecionar("categoria/index");

}

/** admin */
function editar($id){

if (ehPost()) {
        extract($_POST);
       
        alert(editarCategoria($id,$categoria));
        redirecionar("categoria/index");
    } else {
        
        $dados['categoria']= pegarCategoriaporID ($id);
        $dados['categorias'] = pegarTodasCategorias ();
        exibir("categoria/formulario", $dados);
    }

	



}

?>