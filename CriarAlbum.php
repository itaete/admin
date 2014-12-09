

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












  <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                   
                   
                   <?php 

$session_id=$linha['ID']; //$session id
?>
                   
                   
                   
                   <div id='preview'>
</div>
	
<form id="imageform" method="post" enctype="multipart/form-data" action='../album/ajaxImageUpload.php' style="clear:both">
<h1>Upload your images</h1> 
<div id='imageloadstatus' style='display:none'><img src="loader.gif" alt="Uploading...."/></div>
<div id='imageloadbutton'>
<input type="file" name="photos[]" id="photoimg" multiple />
</div>
</form>


</div>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                  </div>
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
    
    
    
    
    
    



<!--- CONTEUDO FIM --->


      </div>
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
</div>
<!-- Index Content -->



<?php include 'nfooter.php'?>
</body>
</html>

