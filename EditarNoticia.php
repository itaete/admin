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



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    



<!--main content start-->
  <section id="main-content">
      <section class="wrapper">
      
      



     <!--state overview start
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

<div class="row" style="background:#CCC">
                  <div class="col-lg-12"> <h4>Imagem alterada com sucesso !!!</h4></div>
                  <div class="col-lg-12">
                      <section class="panel">
                        <div class="panel-body" style="background:#CCC">
                        
                        
                        
                        
                      
                  
                  
          <?php


$sql = "SELECT 	* FROM 	noticias WHERE 	id = ".(int)$_GET['id'];
$resultado = mysql_query($sql);
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

?>
                
                
                
                <form action="alteraNoticia.php?id=<?php echo $_GET['id'] ?>" method="post">



    <table border="0" width="100%" cellpadding="#000">
  <tr>
    <td width="10%" style="padding:1px 8px 1px 8px;">Titulo</td>
    <td width="88%" style="padding:1px 8px 1px 8px;"><input name="titulo" type="text" id="titulo" value="<?=$linha['titulo']?>"  size="70%" /></td>
  </tr>
  <tr>
    <td style="padding:1px 8px 1px 8px;">Categoria</td>
    <td style="padding:1px 8px 1px 8px;"><input name="categoria" type="text" id="titulo" value="<?php echo $linha['categoria'] ?>" size="45" /></td>
  </tr>
  <tr>
    <td style="padding:1px 8px 1px 8px;">Cidades</td>
    <td style="padding:4px 8px 4px 5px;"><?php include 'cidades.php'?></td>
  </tr>
 
  
  
  
  <tr>
    <td style="padding:1px 8px 1px 8px;">Visitas</td>
    <td style="padding:1px 8px 1px 8px;"><input name="visitas" type="text" id="resumo" value="<?php echo $linha['visitas'] ?>" size="3" ></td>
    
    
  </tr>
  
  
  
  <tr>
    <td style="padding:1px 8px 1px 8px;">Ver</td>
    <td style="padding:1px 8px 1px 8px;"><input name="ver" id="ver" type="checkbox" value="1"<?php if ($linha['ver'] == 1) { ?>checked="checked"<?php } ?>/></td>
    
    
  </tr>
  
  
  
  
  
  
</table>
               
<input name="nome" type="hidden" value="<?php echo $nome?>" readonly />
<input name="email" type="hidden" value="<?php echo $email?>" readonly />  

   

                
                
<hr />


    

                
                
                
               <script src="../ckeditor.js"></script>
	<script src="assets/uilanguages/languages.js"></script>


	

			(<span id="count"> </span> linguas):
			
		
			
			<textarea name="editor1" cols="80" id="editor1"><?=$linha['texto']?>
			</textarea>
			<script>

				// Set the number of languages.
				document.getElementById( 'count' ).innerHTML = window.CKEDITOR_LANGS.length;

				var editor;

				function createEditor( languageCode ) {
					if ( editor )
						editor.destroy();

					// Replace the <textarea id="editor"> with an CKEditor
					// instance, using default configurations.
					editor = CKEDITOR.replace( 'editor1', {
						language: languageCode,

						on: {
							instanceReady: function() {
								// Wait for the editor to be ready to set
								// the language combo.
								var languages = document.getElementById( 'languages' );
								languages.value = this.langCode;
								languages.disabled = false;
							}
						}
					});
				}

				// At page startup, load the default language:
				createEditor( '' );

			</script>
            
            <script>

				document.write( '<select disabled="disabled" id="languages" onchange="createEditor( this.value );">' );

				// Get the language list from the _languages.js file.
				for ( var i = 0 ; i < window.CKEDITOR_LANGS.length ; i++ ) {
					document.write(
						'<option value="' + window.CKEDITOR_LANGS[i].code + '">' +
							window.CKEDITOR_LANGS[i].name +
						'</option>' );
				}

				document.write( '</select>' );

			</script>
		
	</form>
                
                
          
                
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
              
                                              
                                              




         
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


