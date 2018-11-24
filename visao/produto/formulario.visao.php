<form action="" method="POST" enctype="multipart/form-data">


    Descricao: <input type="text" name="descricao" value="<?= @$produtos['descricao'] ?>">
    Preco: <input type="text" name="preco" value="<?= @$produtos['preco'] ?>">


    Categoria: <select name="categoria">

        <?php foreach ($categorias as $categoria) : ?>

            <option value="<?= $categoria['idCategoria'] ?>" <?= @assinalarCampo($produtos['idCategoria'], $categoria['idCategoria']) ?> > 
                <?= $categoria["nomeCategoria"] ?>
            </option>

        <?php endforeach; ?>




    </select> 
    Imagem: <input type="file" name="imagem">

    Sobre: <textarea input type="text" name="sobre"><?= @$produtos['sobre'] ?></textarea>
    <br>

    QtEstoque: <input type="int" name="qtEstoque" value="<?= @$produtos['qtEstoque'] ?>">
    <br>
    <button type="submit">vai!</button>
</form>