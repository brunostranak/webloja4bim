<?php

function VerificarLogin ($login,$pass){
$login=strip_tags($login);
$pass=strip_tags($pass);
$pass = mysqli_real_escape_string($cnx = conn(), $pass);
$login = mysqli_real_escape_string($cnx = conn(), $login);
	$sql="SELECT * FROM tblCliente WHERE email = '$login' and senha = '$pass';";
$retorno = mysqli_query(conn(),$sql);
if(!$retorno){
	echo mysqli_error(conn());
}

$registro = mysqli_fetch_assoc($retorno);//retorna os registros


return $registro; 
}
//if($registro != null) {
	

	//$_SESSION["user"]= $registro["nmPessoa"];
	//$_SESSION["iduser"]= $registro["idCliente"];
	//echo"<script> alert('Logado com sucesso!'); window.location.href='inicio.php'</script>";
//}




?>