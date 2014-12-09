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


                        
                        
                        
                        
                      
                  
                  
                  

<form id="formulario" method="post" enctype="multipart/form-data" action="inserir.php" style="background:#CCC">



    <table border="0" width="100%" cellpadding="#000">
  <tr>
    <td width="10%" style="padding:1px 8px 1px 8px;">Titulo</td>
    <td width="88%" style="padding:1px 8px 1px 8px;"><input name="titulo" type="text" id="titulo"  size="70%" /></td>
  </tr>
  <tr>
    <td style="padding:1px 8px 1px 8px;">Categoria</td>
    <td style="padding:1px 8px 1px 8px;"><?php include 'exibe_categoria.php'?></td>
  </tr>
  <tr>
    <td style="padding:1px 8px 1px 8px;">Cidades</td>
    <td style="padding:4px 8px 4px 5px;"><?php include 'cidades.php'?></td>
  </tr>
  <tr>
    <td style="padding:1px 8px 1px 8px;">Imagem</td>
    <td style="padding:1px 8px 1px 8px;"><input name="imagem" type="file" id="imagem" size="99" /></td>
    
    
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
			
		
			
			<textarea cols="80" id="editor1" name="editor1" rows="10"></textarea>
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
                
                
                   
                                              




         
              <!-- page end-->










           </div>
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
</div>
<!-- Index Content -->



<?php include 'nfooter.php'?>
</body>
</html>

