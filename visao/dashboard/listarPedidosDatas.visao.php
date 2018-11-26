
<form action="" method="post">
Data início<input type="date" name="dtInicio">
Data Fim<input type="date" name="dtFim">
<input type="submit" value="Filtrar">
</form>

<div class="container">
<?php 

if(!empty($pedidos)){ ?>
        
        <div class="panel-group" id="pedidos" role="tablist" aria-multiselectable="true">
        <?php 
            foreach ($pedidos as $pedido) {
                ?>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        
                        <table class="table">
                            <tr>
                                <th>Nº do pedido</th>
                                <th>Data do pedido</th>
                                <th>Valor do pedido</th>
                                
                            </tr>
                            <tr>
                                <td><?=$pedido["idPedido"] ?></td>
                                <td><?=$pedido["dtPedido"] ?></td>
                                <td><?=$pedido["valorPedido"] . " R$" ?></td>
                                
                            </tr>
                        </table>
                    </div>
                        <div id="<?=$pedido["idPedido"]?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table col-lg-12">
                                    <tr>
                                        <th>Imagem</th>
                                        <th>Produto</th>
                                        <th>Preço</th>
                                        <th>Quantidade</th>
                                    </tr>
                                    <?php foreach ($pedido["produtos"] as $produto) { ?>	
                                    <tr>
                                        <td><img class="imagem-produto" heigth="250px" width="100px" src="./imagens/<?= $produto["imagem"] ?>"></td>
                                        <td><?= $produto["descricao"] ?></td>
                                        <td><?= $produto["preco"] . " R$"; ?></td>
                                        <td><?= $produto["quantidade"] ?></td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                        </div>
                </div>
                <?php } ?>
            <?php }else{ 
                ?>
                <div class="alert">
                    <h3 class="text-center">
                        <strong>Não há pedidos nesse invervalo de data!</strong><br>
</div>
            <?php
            }

            ?>
        </div>
</div>