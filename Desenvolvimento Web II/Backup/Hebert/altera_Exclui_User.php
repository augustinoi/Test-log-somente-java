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
				<p>Alteração ou exclusão de usuarios</p>
					
						<?php
							$consulta = mysql_query ("SELECT cod_user,nome_user
													 FROM usuarios");
													 
							$linhas = mysql_num_rows ($consulta);

					    echo "<h3>$linhas usuarios cadastrados !!!</h3>";
						?>
							<table  align="center" border=1>
								<?php
									for ($cont=0; $cont < $linhas; $cont++){
									$cod=mysql_result($consulta,$cont, "cod_user");
											$nome= mysql_result ($consulta,$cont,"nome_user");

								?>
									
									<tr>
											<td>
												<a href="exibe_User.php?codigo=<?php echo $cod; ?>">
												<?php echo $nome;?>
												</a>
											</td>
											
											<td>
											<a href="altera_user.php?codigo=<?php echo $cod;?>">
												Alterar
											</a>
											/
											<a href="processa_exclui1_user.php?codigo=<?php echo $cod;?>">
												 Excluir
											</td>
									</tr>
									
								<?php
								}
								?>
							</table>
			</div>

			
			<div id="area_restrita">
				
				<?php
					include "menu_navegacao.php";
					include "valida_login.php";
				
				?>
			</div>
		</body>
</html>