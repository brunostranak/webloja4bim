                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <?php
extract($usuario);
?>
<h1>Suas informações de cadastro</h1>
<br>
<br>
<form method="post" action="">


    <label for="nome"> Nome:</label>
    <br>

    <input id="nome" type="text" name="nome" value="<?= $nmPessoa ?>">
    <br>
    <br>


    <label for="email"> Email:</label>
    <br>
    <input id="email" type="text" name="email" value="<?= $email ?>">
    <br>
    <br>


    <label for="senha"> Senha:</label>
    <br>
    <input id="senha" type="text" name="senha" value="<?= $senha ?>">
    <br>
    <br>



    Data de nascimento:
    <br>
    <select name="dia" >
        <option>DIA</option>
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo"<option>$i</option>";
        }
        ?>

    </select>

    <select name="mes" >
        <option value="0">MÊS</option>
        <option value="1">Janeiro</option>
        <option value="2">Fevereiro</option>
        <option value="3">Março</option>
        <option value="4">Abril</option>
        <option value="5">Maio</option>
        <option value="6">Junho</option>
        <option value="7">Julho</option>
        <option value="8">Agosto</option>
        <option value="9">Setembro</option>
        <option value="10">Outubro</option>
        <option value="11">Novembro</option>
        <option value="12">Dezembro</option>


    </select>

    <select name="ano" >
        <option>ANO</option>
        <?php
        $parametro = date("Y") - 18;
        for ($i = 1902; $i <= $parametro; $i++) {
            echo"<option>$i</option>";
        }
        ?>

    </select>




    <br>
    <br>


    <input type="submit" value="ALTERAR CADASTRO">
    <br>
    <br>


    <a href="./cadastro/deletar/<?= $idCliente ?>">EXCLUIR CADASTRO </a>
</div>
</div>
</form>

<br>

<br>

<br>
<br>

<div class="container">
<?php 

if(!empty($pedidos)){ ?>
        <h2 class="text-center"> <strong>Meus pedidos</strong></h2>
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
                        <strong>Você não tem pedidos realizados!</strong><br>
</div>
            <?php
            }
            ?>
        </div>
</div>







