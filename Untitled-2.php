﻿<?php

include '../db.php';
$sql = "SELECT 
		* 
	FROM 
		dados_usuarios 
	WHERE 
		id = ".(int)$_GET['id'];
$resultado = mysql_query($sql)
or die ("Não foi possível realizar a consulta.");

$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

?>

<h1>Alterar Cadastro</h1>

<form action="alterar_db.php?id=<?php echo $_GET['id'] ?>" method="post">

	<label for="nome">Nome: </label>
	<input name="nome" id="nome" type="text" 
	value="<?php echo $linha['Nome'] ?>" />

	<label for="sobrenome">Sobrenome: </label>
	<input name="sobrenome" id="sobrenome" type="text" 
	value="<?php echo $linha['Sobrenome'] ?>" /><br />

	<label for="cidade">Cidade: </label>
	<input name="cidade" id="cidade" type="text" 
	value="<?php echo $linha['Cidade'] ?>" /><br />

	<label for="estado">Estado: </label>
	<input name="estado" id="estado" type="text" 
	value="<?php echo $linha['Estado'] ?>" /><br />

	<label for="email">Email: </label>
	<input name="email" id="email" type="text" 
	value="<?php echo $linha['Email'] ?>" /><br />

	<label for="titulo">Título do Texto: </label>
	<input name="titulo" id="titulo" type="text" 
	value="<?php echo $linha['titulo'] ?>" /><br />

	<label for="resumo">Resumo do Texto:</label>
	<input name="resumo" id="resumo" type="text" 
	value="<?php echo $linha['resumo'] ?>" ><br />

	<label for="texto">Texto: </label>
	<textarea name="texto" id="texto" rows="10" cols="30" /> 
	<?php echo $linha['texto'] ?></textarea><br />

	<label for="mostra">Mostrar Notícia? </label>
	<input name="ver" id="ver" type="checkbox" value="1" 
	<?php if ($linha['ver'] == 1) { ?>checked="checked"<?php } ?>/><br />

	<input type="submit" value="Alterar" />


</form>

