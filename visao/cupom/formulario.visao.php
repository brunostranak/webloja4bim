<form action="" method="post">
    
    Cupom<input type="text" name="cupom" value="<?=@$cupom['cupom']; ?>">
    Desconto<input type="number" name="desconto" value="<?=@$cupom['desconto']; ?>">
    DecimalDesc<input type="float" name="decimaldesc" value="<?=@$cupom['decimaldesc']; ?>">
    
    <input type="submit">
    
</form>

<a href="./cupom/listarCupons">Ver cupons

