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
                    <h1 class="text-center">CARRINHO DE COMPRAS <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h1>
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
                        </tr>   
                        <!-- products date -->
                        <?php 
                        
                        
                            foreach ($produtos as $produto) {
                        ?>
                            <tr>
                                <td><img src="./imagens/<?=$produto['imagem']?>" id="lala">
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
                                <td>R$ <?= $produto["preco"] ; ?></td>
                                
                            <br>
                                <td><a href="./carrinho/deletar/<?=$produto["idProduto"];?>">excluir</a></td>
                                
                            </tr>
                        <?php 
                            $i++;}
                            }else{
                                
                                
                                echo "<h1 class='text-center'>Não há produtos existentes no seu carrinho!</h1>";
                            }
                        ?>

                    </table>
                </div>
<h1> Total da compra </h1>
<?= $total;?>
                <div class="panel-footer">
                    <div class="col-lg-10">
                        <div class="row">
                        </div>
                    </div>
                    
                    
                    
                    
                    <a href="./localizacao/" class="btn btn-primary" role="button">COMPRAR</a>
                </div>

            </div>
        </div>
    </section>