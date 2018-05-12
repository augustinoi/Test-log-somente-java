<?php
	session_start();
	include "conexao.php";
?>

<html>
	<head>
<!-- essa tag conecta ao css que formata a pagina --------------------------------------------------------->	
		<link rel="stylesheet" type="text/css" href="formatacao.css">
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
			
<!-- POSTAGENS ------------------------------------------------------------------------------------------ -->			
			
			<div id="postagens">
					
					<h3> exibicao de usuarios</h3>
						<?php 
							$cod = $_GET["codigo"];
								
								$pesquisa = mysql_query ("SELECT nome_user, login_user
								                          FROM usuarios
														  where
														  cod_user = '$cod'");
														  
						$nome= mysql_result ($pesquisa,0, "nome_user");	
						$login= mysql_result ($pesquisa,0, "login_user");	

									echo "<p>Usuario: $nome</p>";
									echo "<p>Login: $login</p>";
						?>
							<p>
								<a href= "altera_Exclui_User.php">
									voltar
								</a>	
							</p>
			</div>

<!-- AREA RESTRITA ------------------------------------------------------------------------------------------ -->			
			<div id="area_restrita">
				
				<?php
					include "menu_navegacao.php";
					include "valida_login.php";
				
				?>
			</div>
		</body>
</html>