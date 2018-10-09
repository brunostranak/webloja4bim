












         

<div class="container">
<?php if(!empty($produtos)){



foreach ($produtos as $produto) : ?>



<figure>
	<figcaption>
<h1><?=$produto["descricao"];?></h1>
<br>
<h2><?= "R$ ".$produto["preco"];?></h2>
<br>
	</figcaption>

<img style='height:250px; width:250px' src="./imagens/<?=$produto['imagem'];?>">
</figure>
<br>
	<figcaption>
<h3><?=$produto["sobre"];?></h3>
<br>
				<form action="./carrinho/adicionar/<?=$produto["idProduto"]?>">
                                <div class="container"><button type="submit" class="book-now-btn">Jogar no Carrinho</button></div>
                            </form>


<br>
	</figcaption>
<a href="./produto/deletar/<?=$produto["idProduto"]?>">deletar</a>
<a href="./produto/editar/<?=$produto["idProduto"]?>">editar </a>
</figure>
<br>
<br>

<?php endforeach; }; ?>
<a href="./produto/adicionar">adicionar </a>
</div>




