<?php 
include'../db.php';
include'../protege.php';





$sqla = mysql_query("SELECT * FROM noticias");
$sqlb = mysql_query("SELECT * FROM dados_usuarios");
$sqlc = mysql_query("SELECT * FROM categoria");
$total_noticias = mysql_num_rows($sqla);
$total_usuarios = mysql_num_rows($sqlb);
$total_categorias = mysql_num_rows($sqlc);
/*
include '../gerir/validar_session.php';
include '../db.php';
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
$linha = mysql_fetch_object($consulta);
$id = $linha->ID;
$sql = "SELECT 	* FROM 	dados_usuarios WHERE id='$id'";
$sqlu = "SELECT 	* FROM 	dados_usuarios";
$resultado = mysql_query($sql)
or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);
$res = mysql_query($sqlu);
$sqla = mysql_query("SELECT * FROM noticias");
$sqlb = mysql_query("SELECT * FROM dados_usuarios");
$sqlc = mysql_query("SELECT * FROM categoria");
$total_noticias = mysql_num_rows($sqla);
$total_usuarios = mysql_num_rows($sqlb);
$total_categorias = mysql_num_rows($sqlc);
*/
?>



<?php include 'HeaderTop.php';?>
<?php include 'HeaderCss.php'?>


<?php include 'HeaderNave.php'?>



<?php include 'sidebar.php'?>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    



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


<!---page start--->

<div class="row">
                  <div class="col-lg-12"> <h2>Escolha sua imagem.</h2></div>
                  <div class="col-lg-12">
                      <section class="panel">
                        <div class="panel-body">
                        
                        
                        
                        
                      
                  
                  
                  
                  
                  
                  

  
<form id="formulario" method="post" enctype="multipart/form-data" action="AtualizaImagemUpload.php" role="form">
                                                  
                                                  
                                                  <div class="form-group">
                                                      <label for="exampleInputFile"></label>
                                                       <input type="file" id="imagem" name="imagem" />
                                                    
                                                  </div>
                                                
                                                
                                                
                                                  <button type="submit" class="btn btn-default">Submit</button>
                                              </form>
                                              
                                              
                                              
                                              
                                         
<div id="visualizar"></div>  



         
                     </div>
                      </section>
                  </div>                           
                                              
                                              
                                              
              <div class="row">
              
              
              
              
              

              
              
              
              
              
              </div>
              <!-- page end-->










              
              
              
                          
          
          
      </section>
  </section>
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
