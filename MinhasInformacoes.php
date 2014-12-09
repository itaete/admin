



                 
<?php include 'nheaderini.php'?>


<?php
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



<?php include 'nheader.php'?>
        
    
<div class="init">Bem vindo <h1 style="display:inline;"><strong>Everaldo Neves</strong></h1></div>





<!-- Index Content -->
<div class="subHeaderWrapper">
    <div class="subHeader">
    
    
    
    
<div class="colesq">
    
    
<?php include 'nmenu.php'?>
    
    
</div>
    
    
    
    
    
    
      <div class="coldir">
      
            
      
      
						
                        
                        
                        
                        
                        
                        
                        
<h2 class="subTitulo">      INFORMAÇOES PESSOAIS                   </h2>
                         

<span class="fonteGeral">Identificação: </span> <? echo $id = $_SESSION['ID']."<br />";?>
<span class="fonteGeral">Login: </span><? echo $id = $_SESSION['Login']."<br />";?>
<span class="fonteGeral">Senha: </span><? echo $id = $_SESSION['Senha']."<br />";?>
<span class="fonteGeral">Nome: </span><? echo $id = $_SESSION['Nome']."<br />";?>
<span class="fonteGeral">Email: </span><? echo $id = $_SESSION['Email']."<br />";?>
<span class="fonteGeral">Sexo: </span><? echo $id = $_SESSION['Sexo']."<br />";?>
<span class="fonteGeral">Nascimento: </span>:<? echo $id = $_SESSION['DataNasc']."<br />";?>
<span class="fonteGeral">Pais: </span><? echo $id = $_SESSION['Pais']."<br />";?>
<span class="fonteGeral">Estado: </span>:<? echo $id = $_SESSION['Estado']."<br />";?>
<span class="fonteGeral">Cidade: </span><? echo $id = $_SESSION['Cidade']."<br />";?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                      
      </div>
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
</div>
<!-- Index Content -->



<?php include 'nfooter.php'?>
</body>
</html>