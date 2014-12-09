<?php
include'../db.php';
$sql = "DELETE FROM 
		noticias 
	WHERE 
		id = ".(int)$_GET['id'];

$resultado = mysql_query($sql)
or die ("Erro ao remover notícia.");

?>
Excluida com sucesso

<script language= "JavaScript">
setTimeout("document.location = 'javascript:window.history.go(-1)'",500);
</script>