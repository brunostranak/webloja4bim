<?php

function ehPost() {
    $ehPost = $_SERVER["REQUEST_METHOD"] == "POST";
	if($ehPost) {
		foreach ($_POST as $key => $value) {
			$_POST[$key] = mysqli_real_escape_string(conexao(),$value);
		}
	}
    return $ehPost;
}

function morrer($dado) {
    echo "<pre>";
    print_r($dado);
    echo "</pre>";
    die();
}
