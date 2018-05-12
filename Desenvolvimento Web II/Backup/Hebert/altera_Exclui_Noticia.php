<?php
	session_start();
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
				<p>Alteração ou exclusão de noticias</p>
				<form method="get" action="a/e_usuario.php">
					
				<p>
					<a href="siteExemplo.php">site exemplo</a>
					<a href="alterar.php">alterar/ </a>
					<a href="excluir.php">excluir</a>
				</p>	
				   
				<p>
					<a href="projetoSite.php">projeto de sites</a>
					<a href="alterar.php">alterar/ </a>
					<a href="excluir.php">excluir</a>
				</p>	
					
				</form>
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