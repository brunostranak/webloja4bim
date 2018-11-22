














<div class="container">
    <?php if (!empty($produtos)) {



        foreach ($produtos as $produto) :
            ?>



            <figure>
                <figcaption>
                    <h1><?= $produto["descricao"]; ?></h1>
                    <br>
                    <h2><?= "R$ " . $produto["preco"]; ?></h2>
                    <br>
                </figcaption>

                <img style='height:250px; width:250px' src="./imagens/<?= $produto['imagem']; ?>">
            </figure>
            <br>
            <figcaption>
                <h3><?= $produto["sobre"]; ?></h3>
                <br>
                <a href="./carrinho/adicionar/<?= $produto["idProduto"]; ?>">
                    <div class="container"><button type="submit" class="book-now-btn">Jogar no Carrinho</button></div>
                </a>


                <br>
            </figcaption>
            
            <?php
            if(isset($_SESSION["auth"])){
                if($_SESSION["auth"]["role"]=="admin"){
                    ?>
                
            
            <a href="./produto/deletar/<?= $produto["idProduto"] ?>">deletar</a>
            <a href="./produto/editar/<?= $produto["idProduto"] ?>">editar </a>
        </figure>
        <br>
        <br>
            <?php }} ?>
    <?php endforeach;
}else{echo "Sem buscas correspondentes!"; echo "<br>";} ?>
        
        
         <?php
         if(isset($_SESSION["auth"])){
                if($_SESSION["auth"]["role"]=="admin"){
                    ?>
<a href="./produto/adicionar">adicionar </a>
         <?php }} ?>


    
</div>




