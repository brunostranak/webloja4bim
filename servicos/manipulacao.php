<?php

function manipulacao (){
    $arquivo = fopen("D:/wamp64/www/webloja4bim/servicos/manipulacao.txt", "r");
    $dados = array();
        while (!feof($arquivo)) {
            $dados[] = trim(fgets($arquivo));
        }
    return $dados;
}
?>