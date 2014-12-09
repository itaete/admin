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
<style>

#preview
{
color:#cc0000;
font-size:12px
}
.imgList 
{
max-height:150px;
margin-left:5px;
border:1px solid #dedede;
padding:4px;	
float:left;	
}
</style>
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
                   
                  <?php $sql = "SELECT * FROM user_uploads WHERE user_id_fk = $id ORDER BY user_id_fk DESC"; 
$resultado = mysql_query($sql) ;
while ($linha = mysql_fetch_array($resultado, MYSQL_ASSOC)){?>

<li style="display:inline-table"><img src="../albuns/<?php echo $linha['image_name']?>" width="100" height="100"></li>
                   
                   
                   
               <?php }?>    
                   
                   
                </div>
              </div>
              <!-- page end-->










              
              
              
                 <script src="../album/js/jquery.min.js"></script>
<script src="../album/js/jquery.wallform.js"></script>
<script>
 $(document).ready(function() { 
		
            $('#photoimg').die('click').live('change', function()			{ 
			           //$("#preview").html('');
			    
				$("#imageform").ajaxForm({target: '#preview', 
				     beforeSubmit:function(){ 
					
					console.log('ttest');
					$("#imageloadstatus").show();
					 $("#imageloadbutton").hide();
					 }, 
					success:function(){ 
				    console.log('test');
					 $("#imageloadstatus").hide();
					 $("#imageloadbutton").show();
					}, 
					error:function(){ 
					console.log('xtest');
					 $("#imageloadstatus").hide();
					$("#imageloadbutton").show();
					} }).submit();
					
		
			});
        }); 
</script>
          
          
          
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
