<link rel="stylesheet" type="text/css" href="styles.css" />

<?php
include'../db.php';
include'../protege.php';




function retira_acentos($texto) 
{ 
$array1 = array(":",";","º","\"","\"","'","'","$",",","."," ", "á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç" 
, "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç" ); 
$array2 = array("-","-","-","-","-","-","-","-","-","-","-", "a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c" 
, "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C" ); 
return str_replace( $array1, $array2, $texto); 
} 


$newurltitle = strtolower( retira_acentos($_POST['titulo']));

$date=strtolower($_POST['categoria']);
$na = rand(1,1000000000);

$url=$date.'/'.$newurltitle.'-'.$na.'.html';















$sql = "UPDATE 
		noticias 
	SET 
		
		
		
		
		
		data=NOW(), 
		hora=NOW(), 
		titulo='".mysql_real_escape_string($_POST['titulo'])."', 
		
		texto='".mysql_real_escape_string($_POST['editor1'])."', 
		ver='".(($_POST['ver']) ? 1 : '0')."' ,
		categoria='".mysql_real_escape_string($_POST['categoria'])."',
		url='".mysql_real_escape_string($url)."',
		visitas='".mysql_real_escape_string($_POST['visitas'])."'
	WHERE 
		id = ".(int)$_GET['id'];

$resultado = mysql_query($sql)
or die ("<span class='notification n-error'>Erro ao alterar noticia</span>");


if ($resultado){
?>

<link rel="stylesheet" type="text/css" href="styles.css" />

 <span class="notification n-success">Alterado com sucesso</span>

<script language= "JavaScript">
setTimeout("document.location = 'javascript:window.history.go(-1)'",500);
</script>

<?php }else {
	
	
?>


<span class='notification n-error'>Erro ao alterar noticia</span>
 
 <script language= "JavaScript">
setTimeout("document.location = 'javascript:window.history.go(-1)'",500);
</script>

<?
	
	
	}?>