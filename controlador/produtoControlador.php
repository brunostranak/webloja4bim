<?php

require "modelo/produtoModelo.php";
require "modelo/categoriaModelo.php";

/** anon */
function listar(){

$dados["produtos"]=pegarTodosProdutos();
$dados["categorias"]= pegarTodasCategorias();

exibir ("produto/listar", $dados);




}
/** anon */

function index(){
$dados["produtos"]=pegar5Produtos();
$dados["categorias"]= pegarTodasCategorias();

exibir ("produto/listar", $dados);


}

/** admin */
function adicionar(){
	   if (ehPost()) {
        extract($_POST);

        $imagem= $_FILES["imagem"];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "./imagens/" . $imagem["name"];
            move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

        alert(adicionarProduto($descricao,$preco,$imagem,$categoria,$sobre));
        redirecionar("produto/index");
    } else {
    	$dados["categorias"]= pegarTodasCategorias();

        exibir("produto/formulario",$dados);
    }
}

/** admin */
function deletar($id){

alert(deletarProduto($id));
redirecionar("produto/index");


}

/** admin */
function editar($id){

    

if (ehPost()) {
        extract($_POST);
        extract($_FILES);
        $imagem= $_FILES["imagem"];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "./imagens/" . $imagem["name"];
            move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

        $imagem=$imagem["name"];
      
      
        alert(editarProduto($id,$descricao, $preco, $imagem, $categoria, $sobre));
        redirecionar("produto/index");
    } else {
        $dados['produtos'] = pegarProdutoPorId($id);
        $dados['categorias']= pegarTodasCategorias ();
        
        exibir("produto/formulario", $dados);
    }



}

/** anon */
function buscar (){


        extract($_POST);


        
        $dados["produtos"]=buscarProduto($produto);
       
        exibir("produto/busca",$dados);


}





?>