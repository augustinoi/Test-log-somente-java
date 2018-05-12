

<?php
 /*---------------------------------------------------------  coneção com o banco de dados -------------------------------------------------------*/
 session_start();
 include "conexao.php";
 ?>
 
<Html>
<head>
<!-------------------------------------------------------------formatação de CSS --------------------------------------------------------->
<link rel="stylesheet" type="text/css" href="layoutindex.css">
<link rel="stylesheet" type="text/css" href="fonts.css">

<!-------------------------------------------------------------formatação de UFT-8 --------------------------------------------------------->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>

        <body>
		
<!--------------------------------------------------------------- BANNER ------------------------------------------------------------------------->		
	
		
	
	<img src= "imagens/7-2-globe-png-clipart.png"  >
		
				<div  ID = "BANNER" >
				
			
			<h1 ID = "Logo1">Portal de noticias</h1>
			<p ID = "linelogo">______________________________</p>
			<h4>O seu portal de noticias</h4>
			
			
		</div>

		<div   ID = "MENU_DE_LINKS"  >
		
	
		<?php
		include "valida_login.php";
		include "menu_navegacao.php"
?>
		</div>
		
		<div id="postagens">
				<p>Alteração ou exclusão de usuarios</p>
				
						<?php
					
							$consulta = mysqli_query ($conectar,"SELECT cod_user,nome_user
													 FROM usuario");
													 
							$linhas = mysqli_num_rows ($consulta);

					    echo "<h3>$linhas usuarios cadastrados !!!</h3>";
						?>
							<table  align="center" border=1>
								<?php
								
							
									function mysqli_result($consulta, $linhas, $cont=0) { 
										$consulta->data_seek($linhas); 
										$datarow = $consulta->fetch_array(); 
										return $datarow[$linhas]; 
							} 

									for ($cont=0; $cont < $linhas; $cont++){
								     $cod=mysqli_real_escape_string ($consulta,'cod_user');
									$nome=mysqli_real_escape_string ($consulta,'nome_user');

								?>
									
									<tr>
											<td>
												<a href="exibe_User.php?codigo=<?php echo "$cod;" ?>">
												<?php echo "$nome;"?>
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

			
		
</body>
</HTML>