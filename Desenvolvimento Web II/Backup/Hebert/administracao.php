<?php
 
 session_start();
/* essa tag conecta ao banco de dados ---------------------------------------------------------------------*/
 
 include "conexao.php";
 ?>
<html>
	<head>
<!-- essa tag conecta ao css qur formata a pagina --------------------------------------------------------->
	
		<link rel="stylesheet" type="text/css" href="formatacao.css">
	</head>

		<body>
<!-- PORTAL --------------------------------------------------------------------------------------------- -->		
			<div id="banner">
		 
		
			<h1>PORTAL</h1> 
			
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
					
					<?php
///////////////////////////////pesquisr no banco de dados a manchete o resumo e o texto///////////////////////////
								$consulta = mysql_query("SELECT MANCHETE_NOT, RESUMO_NOT, TEXTO_NOT
								                       	FROM
								                     	noticias");
								$linhas = mysql_num_rows($consulta);
								echo"<h3>($linhas) noticias postadas!!!</h3>";
									
///////////////////////////////extrair da pesquisa acima a manchete o resumo e a tabela//////////////////////////
		
										for($cont=0; $cont<$linhas; $cont++){
											$manchete = mysql_result($consulta,$cont,"MANCHETE_NOT");
											$resumo=mysql_result($consulta,$cont,"RESUMO_NOT");
											$texto=mysql_result($consulta,$cont,"TEXTO_NOT");
											
///////////////////////////////exibir a manchete o resumo e o texto //////////////////////////////////////////////
	
												echo"<h2>$manchete</h2>";
												echo"<h3>$resumo</h3>";
												echo"<p>$texto</p>";
												echo"<hr>";
			                            }
		                                ?>
				
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