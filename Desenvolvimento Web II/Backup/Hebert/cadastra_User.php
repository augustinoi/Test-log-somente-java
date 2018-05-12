<?php
	session_start();
/* conecta ao banco de dados ----------------------------------------------------------------------------*/

	
?>
<html>
	<head>
<!--  tag envia para pagina de formatacao ------------------------------------------------------------------ -->
	
		<link rel="stylesheet" type="text/css" href="formatacao.css">
		
<!-- usado para criar caixa de informacao ------------------------------------------------------------------ -->
		
		<script language="javascript" type="text/javascript">
			function validar(){
				var nome=form_login.nome.value;
				var login=form_login.login.value;
				var senha=form_login.senha.value;
				
				if (nome == ""){
				  alert ("preencha o campo com o nome");
				  form_login.nome.focus();
				  
				  return false;
				}
				
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
			<div id="banner">
				<h1>portal</h1>
				
<!-- BUSCA --------------------------------------------------------------------------------------------- -->
					<form align="right">
						<p>
							Buscar: <input type="text" name="buscar"></br>
						</p>
						
							<p>
								<input type="submit" value="Buscar"></br>
							</p>
							
							<p>
								seja bem vindo
								<?php 
									include "valida_login.php";
								?>
							</p>
						
							<p>
								<a href= "logout.php">
								sair
								</a>
							</p>				
									 
					</form>
			
			</div>
			
<!-- postagens ------------------------------------------------------------------------------------------ -->				
			
			<div id="postagens">
				<p>formulario de cadastro de usuarios</p>
				<form method="post" action="processa_cadastra_user.php" name="form_login" >
					
					
				   <p>Nome:     <input type="text" name="nome"></p>
				   <p>Login:    <input type="text" name="login"></p>
					<p>Senha:   <input type="password" name="senha"></p>
					
					<p><input type="submit" value="cadastrar usuario " onclick="return validar()"></p>
				</form>
			</div>
			
<!-- area restrita --------------------------------------------------------------------------------------- -->			
			<div id="area_restrita">
				
				
				<?php
					include "menu_navegacao.php";
					include "valida_login.php";
				
				?>
				
			</div>
		</body>
</html>