﻿
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">	
$(document).ready(function () {
$.getJSON('estados_cidades.json', function (data) {
 
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

 
<form>
<!-- Estado -->
<select id="estados" name="estado">
<option value="São Paulo"></option>
</select>

<select id="cidades" name="cidade">
</select>
</form>
