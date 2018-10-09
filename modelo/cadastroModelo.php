<?php



function cadastrarUsuario ($nome, $dt, $email, $senha) {
    $sql = "INSERT INTO tblCliente (nmPessoa, dtNasc, email, senha) 
			VALUES ('$nome', '$dt', '$email', '$senha')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM tblCliente WHERE idCliente = $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}


function editarUsuario($id, $nmPessoa, $email, $dtNasc, $senha) {
    $sql = "UPDATE tblCliente SET nmPessoa = '$nmPessoa', email = '$email', dtNasc = '$dtNasc', senha = '$senha' WHERE idCliente = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM tblCliente WHERE idCliente = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}

?>