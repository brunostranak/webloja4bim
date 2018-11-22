<?php

function manipulacao (){
    $arquivo = fopen("C:/xampp/htdocs/webloja4bim/servicos/manipulacao.txt", "r");
    $dados = array();
        while (!feof($arquivo)) {
            $dados[] = trim(fgets($arquivo));
        }
    return $dados;
}
?>