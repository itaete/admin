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



<?php include 'HeaderTop.php';?>
<?php include 'HeaderCss.php'?>


<?php include 'HeaderNave.php'?>



<?php include 'sidebar.php'?>







<!--main content start-->
  <section id="main-content">
      <section class="wrapper">
      
      



     <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="icon-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  <?=$total_usuarios?>
                              </h1>
                              <p>Usuario</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="icon-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  <?=$total_noticias?>
                              </h1>
                              <p>Noticias</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="icon-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                               <?=$total_categorias?>
                              </h1>
                              <p>Categorias</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="icon-bar-chart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  1.550
                              </h1>
                              <p>Acessos</p>
                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->






  <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Dynamic Table
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
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
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->










              
              
              
                          
          
          
      </section>
  </section>
<!--main content end-->

<!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="js/respond.min.js" ></script>


  <?php include'Footer.php'?>

    <!--script esta apgina somente-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
  </body>
</html>
