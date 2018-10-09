<?php

extract($usuario);

?>

<form method="post" action="">


<label for="nome"> Nome:</label>
<br>

<input id="nome" type="text" name="nome" value="<?=$nmPessoa?>">
<br>
<br>


<label for="email"> Email:</label>
<br>
<input id="email" type="text" name="email" value="<?=$email?>">
<br>
<br>


<label for="senha"> Senha:</label>
<br>
<input id="senha" type="text" name="senha" value="<?=$senha?>">
<br>
<br>



Data de nascimento:
<br>
<select name="dia" >
<option>DIA</option>
<?php

for ($i=1;$i<=31;$i++){
	echo"<option>$i</option>";
}

?>

</select>

<select name="mes" >
	<option value="0">MÊS</option>
	<option value="1">Janeiro</option>
	<option value="2">Fevereiro</option>
	<option value="3">Março</option>
	<option value="4">Abril</option>
	<option value="5">Maio</option>
	<option value="6">Junho</option>
	<option value="7">Julho</option>
	<option value="8">Agosto</option>
	<option value="9">Setembro</option>
	<option value="10">Outubro</option>
	<option value="11">Novembro</option>
	<option value="12">Dezembro</option>


</select>

<select name="ano" >
<option>ANO</option>
<?php
$parametro= date("Y") - 18;
for ($i=1902;$i<=$parametro;$i++){
	echo"<option>$i</option>";
}

?>

</select>

<br>
<br>


<input type="submit" value="ALTERAR CADASTRO">
<br>
<br>
</form>

<a href="./cadastro/deletar/<?=$idCliente?>">EXCLUIR CADASTRO
