<?php

require("modelo/cupomModelo.php");


function index(){
    
    exibir("produto/cupom2");
}
function desconto(){

	if (ehPost()) {
        extract($_POST);
        
        $dadoscupom= verificarCupom($cupom);
        
        if(!empty($dadoscupom)){
            $dados=$dadoscupom;
            
        exibir("produto/cupom2",$dados);
        }else{
            
        exibir("produto/cupom2"); 
        }
        }
    
	

}

/** admin */




?>