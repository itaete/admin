<<?php
include'../db.php';
include'../protege.php';

$link = mysql_connect("localhost", "root", "");
mysql_select_db("musica", $link);
$result = mysql_query("SELECT * FROM noticias ORDER BY id DESC", $link);
$num_linhas = mysql_num_rows($result);
$ultima_linha = mysql_query("SELECT FROM table1 where id = $num_linhas", $link);



$sqla = mysql_query("SELECT * FROM noticias");
$sqlb = mysql_query("SELECT * FROM dados_usuarios");
$sqlc = mysql_query("SELECT * FROM categoria");
$total_noticias = mysql_num_rows($sqla);
$total_usuarios = mysql_num_rows($sqlb);
$total_categorias = mysql_num_rows($sqlc);?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?=$linha['Nome']?></title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/colesq.css" media="all">
<link rel="stylesheet" href="css_col/6cols.css" media="all">


<link rel="stylesheet" href="css_col/responsivegridsystem.css" media="all">
	<link rel="stylesheet" href="css_col/col.css" media="all">
    
    <script src="editor/ckeditor.js"></script>
<script src="editor/assets/uilanguages/languages.js"></script>
    











</head>

<body class="errorpage">

    
    <?php include 'header_.php'?>
    
    
    <?php include 'editorEditar.php'?>
   


	<?php include 'footer_inc.php'?>
