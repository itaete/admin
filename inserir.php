<?php

include'../db.php';

    $pasta = "../fotos/";
    $permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp");
         if(isset($_POST)){
        $nome_imagem    = $_FILES['imagem']['name'];
        $tamanho_imagem = $_FILES['imagem']['size'];
        $ext = strtolower(strrchr($nome_imagem,"."));
                if(in_array($ext,$permitidos)){
                 $tamanho = round($tamanho_imagem / 1024);
             
            if($tamanho < 1024){ //se imagem for até 1MB envia
                $nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem
                $tmp = $_FILES['imagem']['tmp_name']; //caminho temporário da imagem
      
                /* se enviar a foto, insere o nome da foto no banco de dados */
                if(move_uploaded_file($tmp,$pasta.$nome_atual)){
					
								
					function string_limit_words($string, $word_limit) {
   $words = explode(' ', $string);
   return implode(' ', array_slice($words, 0, $word_limit));
}
$blog='';

function retira_acentos($texto) 
{ 
$array1 = array(":",";","º","\"","\"","'","'","$",",","."," ", "á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç" 
, "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç" ); 
$array2 = array("-","-","-","-","-","-","-","-","-","-","-", "a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c" 
, "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C" ); 
return str_replace( $array1, $array2, $texto); 
} 






//$title=mysql_real_escape_string($_POST['title']);
//$body=mysql_real_escape_string($_POST['body']);
//$title=htmlentities($title);
//$body=htmlentities($body);

$newurltitle = strtolower( retira_acentos($_POST['titulo']));

$cidade = ucwords( retira_acentos($_POST['cidade']));
$estado = strtoupper( retira_acentos($_POST['estado']));



//$date=date("Y/m/d");
$date=strtolower($_POST['categoria']);
$na = rand(1,1000000000);

//$newtitle=string_limit_words($_POST['titulo'], 6);
//$urltitle=preg_replace('/[^a-z0-9]/i',' ', $newtitle);

//$newurltitle=str_replace(" ","-",$newtitle);




$url=$cidade.'/'.$estado.'/'.$date.'/'.$newurltitle.'-'.$na.'.html';

/*
mysql_query("insert into noticias(titulo,texto,url) values('$title','$body','$url')");
$blogurl="http://localhost/seo/$url";*/











					
$sql = "INSERT INTO noticias (
		estado,
		cidade,
		nome,
		email,
		data,
		hora, 
		titulo, 
		texto,
		imagem,
		categoria,
		url
	) VALUES (
		'".mysql_real_escape_string($_POST['estado'])."',
		'".mysql_real_escape_string($_POST['cidade'])."',
		'".mysql_real_escape_string($_POST['nome'])."',
		'".mysql_real_escape_string($_POST['email'])."',
		NOW(), 
		NOW(), 
		'".mysql_real_escape_string($_POST['titulo'])."',
		'".mysql_real_escape_string($_POST['editor1'])."',
		'".mysql_real_escape_string($nome_atual)."',
		'".mysql_real_escape_string($_POST['categoria'])."',
		'".mysql_real_escape_string($url)."'
	)";

/*
 * executa a query
 */
$sql = mysql_query($sql)
or die ("Houve erro na gravação dos dados.");



				}}}}
?>

<link rel="stylesheet" type="text/css" href="styles.css" />

 <span class="notification n-success">Publicado com sucesso </span>

<script language= "JavaScript">
setTimeout("document.location = 'javascript:window.history.go(-1)'",500);
</script>