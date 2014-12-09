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






<?php include 'nheaderini.php'?>
<?php include 'nheader.php'?>
        
    
<div class="init">Bem vindo <h1 style="display:inline;"><strong>Everaldo Neves</strong></h1></div>





<!-- Index Content -->
<div class="subHeaderWrapper">
    <div class="subHeader">
    
    
    
    
<div class="colesq">
    
    
<?php include 'nmenu.php'?>
    
    
</div>
    
    
    
    
    
    
      <div class="coldir">
      
      


                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Codigo</th>
                                          <th>Titulo</th>
                                          <th>Categoria</th>
                                          <th>Data</th>
                                          <th>Hora</th>
                                          <th>Alterar / Excluir </th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      
                                       <?php
								 $sqlu = "SELECT 	* FROM 	noticias";
								  $res = mysql_query($sqlu) ;
while ($line = mysql_fetch_array($res, MYSQL_ASSOC)){?>

                                      
                                      
                                      <tr class="gradeX">
                                          <td><?=$line['id']?></td>
                                          <td><a href="../<?=$line['url']?>"><?=$line['titulo']?></a></td>
                                          <td><a href="../<?=strtolower($line['categoria'])?>"><?=strtolower($line['categoria'])?></a></td>
                                          <td><?=$line['data']?></td>
                                          <td><?=$line['hora']?></td>
                                          <td>
                                          <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      
                                      
                                          
                                          
                                          
                                          <a href="EditarNoticia.php?id=<?=$line['id']?>"><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>&nbsp;&nbsp;<a href="Excluir.php?id=<?=$line['id']?>"><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></a> </td>
                                      </tr>
                                     
                                      
                                      <? }?>
                                      
                                   
                                    
                                     
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>Codigo</th>
                                          <th>Titulo</th>
                                          <th>Categoria</th>
                                          <th>Data</th>
                                          <th>Hora</th>
                                          <th>Nome</th>
                                      </tr>
                                      </tfoot>
                          </table>
                              
<!--main content end-->

<!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
   


  <?php include'Footer.php'?>

    










 </div>
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
</div>
<!-- Index Content -->



<?php include 'nfooter.php'?>
</body>
</html>

