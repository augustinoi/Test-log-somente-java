<?php
	session_start();
	include "conexao.php";
?>
<html>
	<head>
<!-- essa tag conecta ao css que formata a pagina --------------------------------------------------------->	
		<link rel="stylesheet" type="text/css" href="formatacao.css">
		<!--terminar de fazer o java script-->
		<script language="javascript" type="text/javascript">
			function validar(){
				var nome=form_altera.nome.value;
				var login=form_altera.login.value;
				var senha=form_altera.senha.value;
				
				alert("dados alterado com sucesso!!!!");
			}
		
		</script>
	</head>

		<body>
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
				
				<?php 
					$cod= $_GET["codigo"];
					
						$pesquisa=mysql_query("SELECT nome_user,
													  login_user,
													  senha_user
											  FROM usuarios
											  WHERE cod_user = '$cod'");
											  
						$nome=mysql_result($pesquisa,0,"nome_user");
						$login=mysql_result($pesquisa,0,"login_user");
						$senha=mysql_result($pesquisa,0,"senha_user");
				
				?>
				
				<form method="post" action="processa_altera_user.php" name="form_altera_user">
//carregar o codigo do usuario				
				<input type="hidden" name="codigo" value="<?php echo $cod;?>">
						
						<p>
						nome:
						<input type="text" name="nome" value="<?php  echo $nome; ?>">
						</p>
						
						<p>
						login:
						<input type="text" name="login" value="<?php  echo $login; ?>">
						</p>
						
						<p>
						senha:
						<input type="text" name="senha" value="<?php  echo $senha; ?>">
						</p>
						
						<p><input type="submit" value="alterar"></p>
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