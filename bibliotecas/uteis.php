<?php

function ehPost() {
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

function morrer($dado) {
    echo "<pre>";
    print_r($dado);
    echo "</pre>";
    die();
}