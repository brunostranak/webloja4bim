<?php

require "modelo/usuarioModelo.php";
require "modelo/localizacaoModelo.php";

function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/informacoes", $dados);
}

function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarUsuario($nmPessoa, $email, $dtNasc, $senha ));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}

function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}

function editar($id) {
    if (ehPost()) {
        $nmPessoa = $_POST["nome"];
        $email = $_POST["email"];
        alert(editarUsuario($id, $nmPessoa, $email));
        redirecionar("usuario/index");
    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        $dados['acao'] = "./usuario/editar/$id";
        exibir("usuario/formulario", $dados);
    }
}
/** anon */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}

function teste(){}