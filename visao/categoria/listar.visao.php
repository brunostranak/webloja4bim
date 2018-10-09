<?php if(!empty($categorias)){



foreach ($categorias as $categoria) : ?>


<br>
<?= 'id '. $categoria["idCategoria"] ;?>

<?=$categoria["nomeCategoria"];?>
<br>
<a href="./categoria/deletar/<?=$categoria["idCategoria"]?>">deletar </a>

<a href="./categoria/editar/<?=$categoria["idCategoria"]?>">editar </a>



<?php endforeach; }; ?>
<br>
<br>
<br>
<a href="./categoria/adicionar">adicionar </a>
