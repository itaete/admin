<?php
include("db.php");
session_start();
if(isSet($_POST['username']) && isSet($_POST['password']))
{
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=mysqli_real_escape_string($db,$_POST['password']); 

$result=mysqli_query($db,"SELECT * FROM dados_usuarios WHERE Login='$username' and Senha='$password'");
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

$_SESSION['ID']			=$row['id'];
$_SESSION['Login']		=$row['Login'];
$_SESSION['Senha']		=$row['Senha'];
$_SESSION['Nome']		=$row['Nome'];
$_SESSION['Email']		=$row['Email'];
$_SESSION['Sexo']		=$row['Sexo'];
$_SESSION['DataNasc']	=$row['DataNasc'];
$_SESSION['Pais']		=$row['Pais'];
$_SESSION['Estado']		=$row['Estado'];
$_SESSION['Cidade']		=$row['Cidade'];

$_SESSION['login_user']=$row['ID'];


/*$_SESSION['login_user']=$row['ID'];
$_SESSION['Nome']=$row['Nome'];
$_SESSION['DataNasc']=$row['DataNasc'];
$_SESSION['Email']=$row['Email'];
echo $row['ID'];*/
}

}
?>