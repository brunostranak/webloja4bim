<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        
                        <table class="table">

    <tr>
        <th>Produto</th>
        <th>Quantidade Estoque</th>
    </tr>


<?php

foreach ($produtos as $produto) {

    echo "<td>".$produto['descricao']."</td>";
    //echo "<td>".$produto['quantidadeEstqoeu']."</td>";
}

?>

    </table>

                    </div>
    
</div>