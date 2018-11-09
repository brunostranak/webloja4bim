

<form  action="./cupom/desconto" method="post">
    <input type="text" name="cupom" placeholder="insira o cupom aqui">
    <br>
    <br>

    <div class="container"><button type="submit" class="btn btn-primary">Ativar</button></div>
</form>

<?php

if(!empty($dados)){
    
    echo "Cupom ativado! Você ganhou".$dados["desconto"]."%"." de desconto em sua compra";
    
}else{
    echo "<br>";
    echo "Cupom inválido!";
}


?>
