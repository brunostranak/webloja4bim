<?php
require "modelo/localizacaoModelo.php";


function index(){
    
    
    
    
    if (ehPost()) {
        extract($_POST);
        
        adicionar($_SESSION["idUser"],$pais,$estado,$cidade,$endereco,$numero);
        exibir("produto/cupom");
        
    } else {
    	

        exibir("produto/localizacao");
    }
    
}



?>

