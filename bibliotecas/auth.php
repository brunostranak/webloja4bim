<?php

require "modelo/loginModelo.php";
define('AUTENTICADOR', true);

function authLogin($login, $passwd) {
    if ($login === "admin" && $passwd == "123") {
        $_SESSION["auth"] = array("user" => "admin", "role" => "admin");
        return true;
    }

    $usuario = VerificarLogin($login, $passwd);

    if ($usuario) {
        $_SESSION["idUser"]= $usuario["idCliente"];
        $_SESSION["auth"] = array("user" => $usuario, "role" => "user");
        return true;
    }
    return false;
}




function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}
