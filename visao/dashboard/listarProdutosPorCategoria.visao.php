<form method="post" action="">
    <select name="categoria">

        <?php foreach ($categorias as $categoria) : ?>

            <option value="<?= $categoria['idCategoria'] ?>" <?= @assinalarCampo($produtos['idCategoria'], $categoria['idCategoria']) ?> > 
                <?= $categoria["nomeCategoria"] ?>
            </option>

        <?php endforeach; ?>
        <input type="submit" value="Filtrar">
        </form>
<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        
                        <table class="table">
    <tr>
        <th>Produto</th>
    </tr>
       
   

        <?php
        if(isset($categoriaselec)){
        foreach ($produtos as $produto) {


            if ($produto["idCategoria"] == $categoriaselec) {
                echo"<tr>";
                echo "<td>" . $produto['descricao'] . "</td>";
                echo"</tr>";
            }
        }
        }
        ?>

</table>
                        
                    </div>

</div>
    
    