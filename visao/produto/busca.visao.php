<?php if(!empty($produtos)){




foreach ($produtos as $produto) : ?>





<?=$produto["descricao"];?>
<br>
<?=$produto["preco"];?>
<br>


<img style='height:250px; width:250px' src="./imagens/<?=$produto['imagem'];?>">

<br>
<?=$produto["sobre"];?>
<br>



<br>
<br>

<?php endforeach; }else{echo "Sem buscas correspondentes!";} ?>
