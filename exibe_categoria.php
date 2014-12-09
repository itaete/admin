<select name="categoria" id="tabela">

<?php
include'db.php';
$sql = "SELECT 	* FROM categoria ORDER BY	id ASC 	LIMIT 30";
$resultado = mysql_query($sql) 
or die ("Não foi possível realizar a consulta");
if (@mysql_num_rows($resultado) == 0)
   die('Nenhum registro encontrado');
   
while ($linha = mysql_fetch_array($resultado, MYSQL_ASSOC))
{

echo("<option value='".$linha['categoria_name']."'>".$linha['categoria_name']."</option>");
}

?>
</select>