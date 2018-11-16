

<style>
    #lala{
        width:200px;
        height:250px;
    }
</style>


<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">




                <table class="table">
                    <tr>

                        <th>PRODUTO</th>
                        <th>QUANTIDADE</th>
                        <th>PREÇO UN.</th>

                    </tr>  

                    <tr>
                        <!-- products date -->

                        <?php
                        //morrer($_SESSION);
                        $total = 0;
                        foreach ($produtos as $produto) {
                            ?>
                        <tr>
                            <td> <?= $produto["descricao"]; ?></td>
                            <td><?php
                                for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
                                    if ($_SESSION["carrinho"][$i]["id"] == $produto['idProduto']) {

                                        echo $_SESSION["carrinho"][$i]["quantidade"];
                                        $total += $_SESSION["carrinho"][$i]["quantidade"] * $produto["preco"];
                                    }
                                }
                                ?>
                            </td>
                            <td>R$ <?=
                                $produto["preco"];
                            }
                            ?></td>
                    </tr>
                </table>
                <h1>Endereço de entrega </h1>
                <br>

                <?php
                echo "<h3>";
                echo $localizacao["endereco"] . ", " . $localizacao["numero"];
                echo "<br>";
                echo $localizacao["cidade"] . " - " . $localizacao["estado"];
                echo "<br>";
                echo $localizacao["pais"];
                echo "</h3>";
                echo "<br>";
                ?>
                <a href="./localizacao/index" class="btn btn-primary" role="button">ALTERAR ENDEREÇO</a>

                <br>
                <br>

                <h3>Tem algum cupom de desconto? Insira abaixo! </h3>
                <form action="./cupom/desconto" method="post">
                    <input type="text" name="cupom">
                    <br>
                    <br>
                    <br>
                    <?php
                    
                    if(isset($cupom)){
                    if ($cupom<>"Cupom inválido!") {
                        
                            echo "Você ativou um cupom de " . $cupom["desconto"] . "% " . "de desconto";
                        } else {
                            echo $cupom;
                        }
                    }
                        
                    
                    ?>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">ATIVAR</button>
                    
                </form>
                
                <br>
                <br>
                <br>
                <h1> Subtotal: <?= "R$ " . number_format($total,2,',','.'); ?> </h1>
                
                <?php if(!empty($cupom)){
                    if($cupom<>"Cupom inválido!"){
                        ?>
                <h1> Desconto: <?= "- R$ " . number_format( ($cupom["decimaldesc"]*$total), 2, ',', '.'); ?> </h1>
                <?php $final= number_format(($total - ($cupom["decimaldesc"]*$total)), 2, ',', '.'); ?>
                <h1> Total: <?= "R$ ".$final; ?> </h1>
                <?php }else{
                    $final= number_format($total,2,',','.');}}else{ $final= number_format($total,2,',','.'); }?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>Formas de pagamento</h1>
                
                <form action="./pedido/cadastrar/<?=$final;?>" method="post">
                    
                Cartão <input type="radio" name="pay" value="cartao" required> <img height="100px" width="100px" src="./imagens/card.png" ><br>
                Boleto <input type="radio" name="pay" value="boleto" > <img height="100px" width="100px" src="./imagens/barcode.png"><br>

            </div>

            <div class="panel-footer">
                <div class="col-lg-10">
                    <div class="row">
                    </div>
                </div>




                <button type="submit" class="btn btn-primary" role="button">FINALIZAR PEDIDO</button>
            
            </div>

        </div>
    </div>
</div>


