<?php

function index(){
    
    
    exibir("produto/localizacao");
}

function adicionar(){
    
    if (ehPost()) {
        extract($_POST);

        
        redirecionar("produto/index");
    } else {
    	$dados["localizacoes"]= 

        exibir("produto/localizacao",$dados);
    }
    
}



?>

