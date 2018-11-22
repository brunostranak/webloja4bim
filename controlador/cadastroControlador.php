<?php

require "modelo/cadastroModelo.php";
require "modelo/localizacaoModelo.php";
require "modelo/pedidoModelo.php";
/** anon */
function index (){

exibir("cadastro/formulario");
}

/** anon */
function cadastrar (){


	if (ehPost()) {
        extract($_POST);
$dtNasc= $ano."-".$mes."-".$dia;
        alert(cadastrarUsuario($nome, $dtNasc ,$email, $senha));
        
        
        redirecionar("login/index");
    } else {

  exibir("cadastro/formulario");
    }

}

function informacoes($id){

    if($pedidos = listarPedidos($_SESSION["idUser"])){
        $dados["pedidos"] = $pedidos;
    }

    if (ehPost()) {
        extract($_POST);

        $dtNasc= $ano."-".$mes."-".$dia;
        alert(editarUsuario($id, $nome, $email, $dtNasc, $senha));
        adicionar($_SESSION["idUser"],$pais,$estado,$cidade,$endereco,$numero);
        redirecionar("produto/index");
    } else {
       $dados["usuario"]=pegarUsuarioPorId($id);
    
    exibir("cadastro/informacoes", $dados);
    }

	
}

function deletar($id) {
    alert(deletarUsuario($id));
    unset($_SESSION["auth"]);
    exibir("login/index");
}



?>