

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
                                    $total+= $_SESSION["carrinho"][$i]["quantidade"]*$produto["preco"];
                                   
                                }
                            }
                            ?>
                            </td>
    <td>R$ <?= $produto["preco"]; }?></td>
                        </tr>
                        </table>
            


                        <h1> Subtotal: </h1>
                        <h2> <?=  "R$ ".$total;  ?> </h2>


                        
                        
                        
                        
                    </div>
                    
                    <div class="panel-footer">
                        <div class="col-lg-10">
                            <div class="row">
                            </div>
                        </div>




                        <a href="" class="btn btn-primary" role="button">FINALIZAR PEDIDO</a>
                    </div>

                </div>
            </div>
</div>
     

