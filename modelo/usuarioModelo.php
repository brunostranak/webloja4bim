<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM tblCliente";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    if(!empty($usuarios)){
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM tblCliente WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function adicionarUsuario($nmPessoa, $email, $dtNasc, $senha) {
    $sql = "INSERT INTO tblCliente (nmPessoa, email, dtNasc, senha) 
			VALUES ('$nmPessoa', '$email', '$dtNasc', '$senha')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id, $nmPessoa, $email, $dtNasc, $senha) {
    $sql = "UPDATE tblCliente SET nmPessoa = '$nmPessoa', email = '$email', dtNasc = '$dtNasc', senha = '$senha' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM tblCliente WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}
