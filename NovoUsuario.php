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







<?php include 'sidebar.php'?>





 </script>
		<!-- Validação do forumlário -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('#meu_form').validate({
					rules:{ 
						login:{ 
							required: true,
							minlength: 3
						},
						nome:{ 
							required: true,
							minlength: 3
						},
						sobrenome:{ 
							required: true,
							minlength: 3
						},
						
						email: {
							required: true,
							email: true
						},
						senha: {
							required: true
						},
						conf_senha:{
							required: true,
							equalTo: "#senha"
						},
						dia: {
							required: true
						},
						mes: {
							required: true
						},
						ano: {
							required: true
						},
						
						estado: {
							required: true
						},
						
						cidade: {
							required: true
						},
						termos: "required"
					},
					messages:{
						login:{ 
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							minlength: "<img src='../cadastro/alerta.gif' align='right'/>"
						},
						nome:{ 
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							minlength: "<img src='../cadastro/alerta.gif' align='right'/>"
						},
						sobrenome:{ 
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							minlength: "<img src='../cadastro/alerta.gif' align='right'/>"
						},
						
						email: {
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							email: "<img src='../cadastro/alerta.gif' align='right'/>"
						},
						senha: {
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							
						},
						dia: {
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							
						},
						mes: {
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							
						},
						ano: {
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							
						},
						
						estado: {
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							
						},
						
						cidade: {
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							
						},
						conf_senha:{
							required: "<img src='../cadastro/alerta.gif' align='right'/>",
							equalTo: "<img src='../cadastro/alerta.gif' align='right'/>"
						},
						termos: "<img src='../cadastro/alerta.gif' align='right'/>"
					}
					
				});
			});
		</script>
        <SCRIPT type="text/javascript">
pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 3)
{
$("#status").html('insisponivel...');

    $.ajax({  
    type: "POST",  
    url: "../cadastro/check.php",  
    data: "username="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#username").removeClass('object_error'); // if necessary
		$("#username").addClass("object_ok");
		$(this).html('<font color="Green"> Disponivel </font>  ');
	}  
	else  
	{  
		$("#username").removeClass('object_ok'); // if necessary
		$("#username").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('<font color="red">O username é menor que <strong>3</strong> caracteres.</font>');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");
	}

});

});

//-->
</SCRIPT>



<script src="../cadastro/js/jquery.js" type="text/javascript"></script>
<script src="../cadastro/js/settings.js" type="text/javascript"></script>

<script type="text/javascript">	
$(document).ready(function () {
$.getJSON('../cadastro/estados_cidades.json', function (data) {
 
var items = [];
var options = '<option value="">Escolha um estado</option>';	
 
$.each(data, function (key, val) {
options += '<option value="' + val.sigla + '">' + val.nome + '</option>';
});	
$("#estados").html(options);	
$("#estados").change(function () {	
var options_cidades = '';
var str = "";	
$("#estados option:selected").each(function () {
str += $(this).text();
});
$.each(data, function (key, val) {
if(val.nome == str) {	
$.each(val.cidades, function (key_city, val_city) {
options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
});	
}
});
 
$("#cidades").html(options_cidades);
}).change();	
});
});
</script>






        


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
                  
                  
                  
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Basic Forms
                          </header>
                          <div class="panel-body">
                             
                                 
                  
                
                  
                  
<form action="../cadastro/InsereCadastroAdmin.php" method="post" enctype="multipart/form-data" name="formcadastro" id="meu_form" role="form">
                    <fieldset>
                    
                    
                    
                      
<div class="form-group">
  <label for="exampleInputFile">Usuario</label>
  &nbsp; <span style="color:#900;">http://localhost/</span><span id="username_url">usuario</span> <span id="status" style="float:right"></span>
<input name="login" class="form-control" id="username" placeholder="Username"
onkeyup="twitter.updateUrl(this.value)" value="" size="20">

 
 </div>
                    
                    
                    
                    
                    
<div class="form-group">
  <label for="exampleInputFile">Nome</label>
<input class="form-control" placeholder="Nome" name="nome" id="nome" value="">
			    		</div>
						
						<div class="form-group">
<input class="form-control" placeholder="Sobrenome" name="sobrenome" id="sobrenome" value="">
</div>
                        
                      
                        
						
			    	  	<div class="form-group">
                          <label for="exampleInputFile">Email</label>
			    		    <input class="form-control" placeholder="E-mail" name="email" id="email" type="text">
			    		</div>
			    		<div class="form-group">
                          <label for="exampleInputFile">Senha</label>
<input class="form-control" placeholder="Senha" name="senha" id="senha" value="">

			    		</div>
						<div class="form-group">
                          <label for="exampleInputFile">Confirme a senha</label>
<input class="form-control" placeholder="Confirme a senha" name="conf_senha" id="conf_senha" type="password" value="">
			    		</div>
                        
                        
                        
                        
                        
                        
                        
                        
                          
                         <div class="form-group">
                         
      <label>Sexo</label><br>                  
Masculino: <input name="sexo" type="radio" value="Masculino" id="radiobutton" />
      Feminino: <input name="sexo" type="radio" value="Masculino" id="radiobutton" /><br>
                        
                        	</div>
                            
                            
                        
                        
                        
                        

<div class="form-group">

<label>Nascimento</label><br>

     
<select name="dia" id="dia">
  <option value="">  </option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
  <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>
           
            <select name="mes" id="label5">
              <option value="">  </option>
              <option value="01">Janeiro</option>
              <option value="02">Fevereiro</option>
              <option value="03">Mar&ccedil;o</option>
              <option value="04">Abril</option>
              <option value="05">Maio</option>
              <option value="06">Junho</option>
              <option value="07">Julho</option>
              <option value="08">Agosto</option>
              <option value="09">Setembro</option>
              <option value="10">Outubro</option>
              <option value="11">Novembro</option>
              <option value="12">Dezembro</option>
            </select>
           

        <select name="ano" id="label6">
              <option value="">  </option>
              <option value="1900">1900</option>
              <option value="1901">1901</option>
              <option value="1902">1902</option>
              <option value="1903">1903</option>
              <option value="1904">1904</option>
              <option value="1905">1905</option>
              <option value="1906">1906</option>
              <option value="1907">1907</option>
              <option value="1908">1908</option>
              <option value="1909">1909</option>
              <option value="1910">1910</option>
              <option value="1911">1911</option>
              <option value="1912">1912</option>
              <option value="1913">1913</option>
              <option value="1914">1914</option>
              <option value="1915">1915</option>
              <option value="1916">1916</option>
              <option value="1917">1917</option>
              <option value="1918">1918</option>
              <option value="1919">1919</option>
              <option value="1920">1920</option>
              <option value="1921">1921</option>
              <option value="1922">1922</option>
              <option value="1923">1923</option>
              <option value="1924">1924</option>
              <option value="1925">1925</option>
              <option value="1926">1926</option>
              <option value="1927">1927</option>
              <option value="1928">1928</option>
              <option value="1929">1929</option>
              <option value="1930">1930</option>
              <option value="1931">1931</option>
              <option value="1932">1932</option>
              <option value="1933">1933</option>
              <option value="1934">1934</option>
              <option value="1935">1935</option>
              <option value="1936">1936</option>
              <option value="1937">1937</option>
              <option value="1938">1938</option>
              <option value="1939">1939</option>
              <option value="1940">1940</option>
              <option value="1941">1941</option>
              <option value="1942">1942</option>
              <option value="1943">1943</option>
              <option value="1944">1944</option>
              <option value="1945">1945</option>
              <option value="1946">1946</option>
              <option value="1947">1947</option>
              <option value="1948">1948</option>
              <option value="1949">1949</option>
              <option value="1950">1950</option>
              <option value="1951">1951</option>
              <option value="1952">1952</option>
              <option value="1953">1953</option>
              <option value="1954">1954</option>
              <option value="1955">1955</option>
              <option value="1956">1956</option>
              <option value="1957">1957</option>
              <option value="1958">1958</option>
              <option value="1959">1959</option>
              <option value="1960">1960</option>
              <option value="1961">1961</option>
              <option value="1962">1962</option>
              <option value="1963">1963</option>
              <option value="1964">1964</option>
              <option value="1965">1965</option>
              <option value="1966">1966</option>
              <option value="1967">1967</option>
              <option value="1968">1968</option>
              <option value="1969">1969</option>
              <option value="1970">1970</option>
              <option value="1971">1971</option>
              <option value="1972">1972</option>
              <option value="1973">1973</option>
              <option value="1974">1974</option>
              <option value="1975">1975</option>
              <option value="1976">1976</option>
              <option value="1977">1977</option>
              <option value="1978">1978</option>
              <option value="1979">1979</option>
              <option value="1980">1980</option>
              <option value="1981">1981</option>
              <option value="1982">1982</option>
              <option value="1983">1983</option>
              <option value="1984">1984</option>
              
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
        </select>   
                        
                        
                    </div>    
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group">

                            <select id="estados" name="estado">
<option value="São Paulo"></option>
</select>

<select id="cidades" name="cidade">
</select>
    
			    		</div>



                      






  
                     



 <div class="form-group">



		<input name="termos" type="checkbox" class="checkboxes" id="termos">
        Aceito os termos e condições<br /><br>
        
        </div>
        
        

                 
			    		<div class="row">
				<div class="col-xs-6 col-md-6"><input type="submit" tabindex="7" class="btn btn-default btn-block btn-lg" value="Register"></div>
				<div class="col-xs-6 col-md-6"><a class="btn btn-primary btn-block btn-lg" href="#">Sign In</a></div>
			</div>
			    	</fieldset>
                    
                    
                     <script type="text/javascript">


      $( function () {
        
  twitter.screenNameKeyUp();
  $('#user_screen_name').focus();

      });
    

      </script>
      
      
			      	</form>
                    
                    
                    
                    
                    
                    
                     <!---div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <input type="file" id="exampleInputFile">
                                      <p class="help-block">Example block-level help text here.</p>
                                  </div>
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox"> Check me out
                                      </label>
                                  </div>
                                  <button type="submit" class="btn btn-info">Submit</button--->
                          
                          </div>
                      </section>
                  </div>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  </div>
              </div>
              <!-- page end-->










              
              
              
                          
          
          
      </section>
  </section>
<!--main content end-->




           




        
        
        
        
        
        
        
        
     
        
      


	



 
        
      



























<!-- js placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js" ></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/respond.min.js" ></script>
    <!--common script for all pages-->

   <script src="js/common-scripts.js"></script>
  </body>
</html>
    