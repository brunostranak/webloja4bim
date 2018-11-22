<?php


/** anon */
function index() {
    if (ehPost()) {
        $login = $_POST["login"];
        $passwd = $_POST["passwd"];

        if (authLogin($login, $passwd)) {

            authIsLoggedIn();
            $_SESSION["email"]= $login;

            alert("bem vindo");
        } else {
            
            alert("usuario ou senha invalidos!");
        }
    }

    if(!isset($_SESSION["auth"])){
    exibir("login/index");
}else{
    redirecionar("produto/index");

}
}

/** anon */
function logout() {
    authLogout();
    unset($_SESSION["carrinho"]);
    alert("deslogado com sucesso!");
    redirecionar("produto");
}


?>