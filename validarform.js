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
        