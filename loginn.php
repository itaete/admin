
<!DOCTYPE html>
<html template="true" lang="en"><head>


<meta charset="UTF-8"><title>Ajax Login Page with Shake Effect</title>

<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.ui.shake.js"></script>
	<script>
			$(document).ready(function() {
			
			$('#login').click(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
		    var dataString = 'username='+username+'&password='+password;
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			
 
			$.ajax({
            type: "POST",
            url: "ajaxLogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
				 window.location.href = "nHome.php"
            
            }
            else
            {
             $('#box').shake();
			 $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
			
			}
			return false;
			});
			
				
			});
		</script>
		
		<style>
		
		body
{
font-family: "Helvetica",Arial,sans-serif;
font-weight: 500;
color:#333;
background-color:#fbfbfb;
}
label
{
	width:100px;
	display:block;
	font-size:13px;
	color:#666666;
}
#main
{
	margin:0 auto;
	width:800px;
	text-align:center;
}
#box
{
width: 224px;
margin: 0px auto;
text-align: left;
padding: 20px;
background-color: #ffffff;
color: #333;
border: 1px solid #e5e5e5;
box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
}
.input
{
	
	padding:10px;
	font-size:14px;
	border:1px solid #999999;
	width:200px;
	margin-bottom:10px;
	border: 1px solid #e5e5e5;
background: #fbfbfb;
box-shadow: inset 1px 1px 2px rgba(200,200,200,0.2);

}
.button {
font-weight: bold;
padding: 12px 15px;
background: #3f8abf;
color: #fff !important;
font-size: 14px;
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
cursor: pointer;
text-decoration: none;
text-shadow: 0 1px 0px rgba(0,0,0,0.15);
border-width: 1px 1px 3px !important;
border-style: solid;
border-color: #326e99;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
display: -moz-inline-stack;
display: inline-block;
vertical-align: middle;
zoom: 1;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
-ms-border-radius: 5px;
-o-border-radius: 5px;
border-radius: 5px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
-moz-box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
}
.button-primary {
background-color: #5fcf80 !important;
border-color: #3ac162 !important;
}
.msg
{
	font-size:11px;
	color:#666;
	padding:10px;
}
#error{font-size:12px; margin-top:10px}
		
		</style>
		
		
		
		</head><body>
		
		
<div id="main">
<h1>Ajax Login Page with Shake Effect</h1>

<div id="box">
<form action="" method="post">
  <label>Login</label> <input name="username" class="input" autocomplete="off" id="username" type="text"> <label>Senha </label>
<input name="password" class="input" autocomplete="off" id="password" type="password"><br>
<input name="login" class="button button-primary" value="Log In" id="login" type="submit"> 
<span class="msg"></span> 

<div id="error">

</div>	

</form></div>
	
</div>


</body></html>