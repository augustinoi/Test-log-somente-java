<?php
 /*---------------------------------------------------------  coneção com o banco de dados -------------------------------------------------------*/
 session_start();
 include "conexao.php";
 ?>
 
<Html>
<head>
<!-------------------------------------------------------------formatação de CSS --------------------------------------------------------->
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="fonts.css">

<!-------------------------------------------------------------formatação de UFT-8 --------------------------------------------------------->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>

        <body>
		
<!-------------------------------------------------------------------BANNER------------------------------------------------------------------->
		
	

				 <div  class="banner" >
			
			
			
			<table>
  
  <tr>
   <th><img src= "imagens/7-2-globe-png-clipart.png"  ></th>
    <th><h1 ID = "Logo1">Portal de notícias</h1>
	<p ID = "linelogo">______________________________________________________________</p>
  <h4>O seu Jornal de notícias</h4>
  </th> 
   
 
</table>
			
		
			
		</div>
<!-------------------------------------------------------------MENU DE LINKS --------------------------------------------------------->
		<div class="menu"  >
		
	
		<?php
		include "valida_login.php";
		include "menu_navegacao.php"
?>
		</div>
<!-------------------------------------------------------------LISTAGEM DE USUARIOS CADASTRADOS ------------------------------------------------------------------------------------------ -->			
			
		
		
			
					
						<?php
							$consulta = mysql_query ("SELECT cod_user,nome_user
													 FROM usuario");
													 
							$linhas = mysql_num_rows ($consulta);

					 		echo "<div class='info'>";
		echo  "<table  class='info'>";
		echo  "<tr>";
		echo  "<th> Alteração ou exclusão de Usuario </th>";
		echo  "</tr>";
		echo  "<tr>";
		echo  "<td > Usuários cadastrados !!!  </td>";
		echo  "<td class='blue'> $linhas</td>";
		echo  "</tr>";
		echo  "</table>";	
			
			echo "</div>";
						
						
						?>
							<div class = "mostrar" >		
<table  >			
								<?php
									for ($cont=0; $cont < $linhas; $cont++){
									$cod=mysql_result($consulta,$cont, "cod_user");
											$nome= mysql_result ($consulta,$cont,"nome_user");

								?>
								
									<tr>
											<td>
											
												<a  href="EXIBE_USER.php?codigo=<?php echo $cod; ?>" >
												<?php echo $nome;?>
												</a>
											</td>
											
											<td>
											<a href="ALTERA_USER.php?codigo=<?php echo $cod;?>">
												Alterar
											</a>
											
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