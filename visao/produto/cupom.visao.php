

<style>
    #lala{
        width:200px;
        height:250px;
    }
</style>


<section class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <?php if (!empty($produtos)) { ?>
                    <table class="table">
                        <tr>
                            <th>IMAGEM</th>
                            <th>PRODUTO</th>
                            <th>QUANTIDADE</th>
                            <th>PREÇO</th>
                            <th>Excluir</th>
                            <th>Subtotal</th>
                        </tr>   
                        <!-- products date -->
                        <?php
                        foreach ($produtos as $produto) {
                            ?>
                            <tr>
                                <td><img src="./imagens/<?= $produto['imagem'] ?>" id="lala">
                                </td>
                                <td><?= $produto['descricao'] ?></td>
                                <td><?php
                                    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
                                        if ($_SESSION["carrinho"][$i]["id"] == $produto['idProduto']) {

                                            echo $_SESSION["carrinho"][$i]["quantidade"];
                                        }
                                    }
                                    ?>
                                </td>
                                <td>R$ <?= $produto["preco"]; ?></td>

                            <br>
                            <td><a href="./carrinho/deletar/<?= $produto["idProduto"]; ?>">excluir</a></td>

                            <td> <?= $total["subtotal"]; ?></td>


                            </tr>
                            <?php
                            $i++;
                        }
                    } else {


                        echo "<h1 class='text-center'>Não há produtos existentes no seu carrinho!</h1>";
                    }
                    ?>

                </table>
            </div>
            <
            <div class="panel-footer">
                <div class="col-lg-10">
                    <div class="row">
                    </div>
                </div>




                <a href="./localizacao/" class="btn btn-primary" role="button">FINALIZAR PEDIDO</a>
            </div>

        </div>
    </div>
</section>
<?php
$preco_original = $qr_l["preco_original"]; // Preço Original do produto
$desconto = $qr_l["desconto"]; // A porcentagem que você quer descontar
//calculo do desconto
$calculo = ($preco_original) * ($desconto) / 100; //Multiplicação do valor e desconto dividido por 100
$valor = ($preco_original) - ($calculo); // Para não negativar eu fiz essa subtração ai
//Aqui para não termos aqueles problemas de casas decimais
$preco_original2 = number_format($preco_original, 2, ',', ' ');
$valor2 = number_format($valor, 2, ',', ' ');
?>

