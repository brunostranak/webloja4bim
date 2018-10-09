<form action="<?=@$acao?>" method="POST">
    nome: <input type="text" name="nmPessoa" value="<?=@$usuario['nome']?>">
    <br>
    email: <input type="text" name="email" value="<?=@$usuario['email']?>">
    <br>
    data de nascimento: <input type="date" name="dtNasc" value="<?=@$usuario['dtNasc']?>">
    <br>
    senha: <input type="password" name="senha" value="<?=@$usuario['senha']?>">
    <br>
    <button type="submit">Enviar</button>
</form>