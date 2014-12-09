<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}


$id = $_SESSION['ID'];
$login = $_SESSION['Login'];
$senha = $_SESSION['Senha'];
$nome = $_SESSION['Nome'];
$email = $_SESSION['Email'];
$sexo = $_SESSION['Sexo'];
$nascimento = $_SESSION['DataNasc'];
$pais = $_SESSION['Pais'];
$estado = $_SESSION['Estado'];
$cidade = $_SESSION['Cidade'];


?>