<?php
include "conexao.php";
?>

<html>
	<head>
	
<!--  tag envia para pagina de formatacao ------------------------------------------------------------------ -->	
		<link rel="stylesheet" type="text/css" href="formatacao.css">
		
<!-- usado para criar caixa de informacao ------------------------------------------------------------------ -->		
		<script language="javascript" type="text/javascript">
			function validar(){
				var login=form_login.login.value;
				var senha=form_login.senha.value;
				
				if (login == ""){
				  alert ("preencha o campo com seu login");
				  form_login.login.focus();
				  
				  return false;
				}
				
				if (senha == ""){
				  alert ("preencha o campo com sua senha");
				  form_login.senha.focus();
				  
				  return false;
				}
			}
		</script>
	</head>

		<body>
<!-- PORTAL --------------------------------------------------------------------------------------------- -->	
		<div  id="banner">
			
				<h1>PORTAL</h1> 
<!-- BUSCA --------------------------------------------------------------------------------------------- -->
				
			
		</div>
			
			
<!-- postagens ------------------------------------------------------------------------------------------ -->			
			<div id="postagens">
			
				

<!-- area restrita --------------------------------------------------------------------------------------- -->			
			<div id="area_restrita">
				<form method="post" action="processa_login.php" name="form_login">
					<p>area restrita</p>
				
					<p>
						login:</br>
							<input type="text" name="login"></br>
						senha:</br>
							<input type="password" name="senha">
					
					</p>
				
					<p><input type="submit" value="entrar" onclick="return validar()"></p>
				</form>	
			</div>		
			
		</body>
</html>