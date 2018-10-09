<form action="" method="POST" enctype="multipart/form-data">
	
	Categoria: <input type='text' name='categoria' value="<?=@$categoria['nomeCategoria']; ?>">


<select>
<?php foreach ($categorias as $categoria) : ?>
	<option value="<?=$categoria['idCategoria']?>">
		<?=$categoria["nomeCategoria"]?>
	</option>
<?php endforeach; ?>
</select>

	<button type="submit">vai!</button>
</form>
