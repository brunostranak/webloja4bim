<?php

if(!empty($cupons)){

foreach($cupons as $cupom){
    
    echo "<br>";
    echo "<br>";
    echo "id ".$cupom["idCupom"];
    echo "<br>";
    echo $cupom["cupom"];
    echo "<br>";
    echo $cupom["desconto"]."%";
    echo "<br>";
    echo $cupom["decimaldesc"];
    echo "<br>";
    echo "<br>";
    ?>

<a href="./cupom/editarCupom/<?=$cupom['idCupom'];?>">Edit Cupom</a>
<br>
<a href="./cupom/excluirCupom/<?=$cupom['idCupom'];?>">Del Cupom</a>
<br>
    
<?php  }}else{ echo "Sem cupons";} ?>
<br>
<br>
<br>
<a href="./cupom/adicionarCupom">Add Cupom</a>