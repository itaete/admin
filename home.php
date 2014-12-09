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












                                  <?=$total_usuarios?>
                           
                                  <?=$total_noticias?>
                         
                               <?=$total_categorias?>
                           




                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Codigo</th>
                                          <th>Login</th>
                                          <th>Estado</th>
                                          <th>Email</th>
                                          <th>Senha</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      
                                       <?php
								 $sqlu = "SELECT 	* FROM 	dados_usuarios";
								  $res = mysql_query($sqlu) ;
while ($line = mysql_fetch_array($res, MYSQL_ASSOC)){?>

                                      
                                      
                                      <tr class="gradeX">
                                          <td><?=$line['ID']?></td>
                                          <td><?=$line['Login']?></td>
                                          <td><?=$line['Estado']?></td>
                                          <td><?=$line['Email']?></td>
                                          <td><?=$line['Senha']?></td>
                                      </tr>
                                     
                                      
                                      <? }?>
                                      
                                   
                                    
                                     
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>Codigo</th>
                                          <th>Login</th>
                                          <th>Estado</th>
                                          <th>Email</th>
                                          <th>Senha</th>
                                      </tr>
                                      </tfoot>
                          </table>
                               









              
              
              
                          
          
          
      </section>
  </section>
 <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
   




    <!--script esta apgina somente-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>

