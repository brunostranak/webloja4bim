<?php


function pegarTodasCategorias(){
	
	$comando="SELECT * FROM tblCategoria";
	$retorno = mysqli_query(conn(), $comando);
	$categorias = array();
	while($registro = mysqli_fetch_assoc($retorno)) {
		$categorias[] = $registro;
	
	}

	return $categorias;
}


function pegarCategoriaPorId($id) {
    $sql = "SELECT * FROM tblCategoria WHERE idCategoria= $id";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = mysqli_fetch_array($resultado);
    return $categoria;
}


function adicionarCategoria($nomeCategoria){
	$comando="INSERT INTO tblCategoria (nomeCategoria) VALUES('$nomeCategoria')";
	$retorno = mysqli_query(conn(), $comando);
	



}

function deletarCategoria($idCategoria){
	$sql = "DELETE FROM tblCategoria WHERE idCategoria = '$idCategoria'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar categoria' . mysqli_error($cnx)); }
    return 'Categoria deletada com sucesso!';
	



}


function editarCategoria($idCategoria,$nomeCategoria) {
    $sql = "UPDATE tblCategoria SET nomeCategoria='$nomeCategoria' WHERE idCategoria = 
    '$idCategoria'";
    
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar categoria' . mysqli_error($cnx)); }
    return 'Categoria alterada com sucesso!';
}


