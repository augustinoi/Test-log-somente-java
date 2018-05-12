<?php
	include "conexao.php";
	
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$cod = $_POST["codigo"];
	
		$pesquisa = mysql_query("SELECT login_user FROM usuario
		
							 WHERE login_user ='$login'
							 
							 AND cod_user = '$cod'");
							 
							 
		$registro =mysql_num_rows ($pesquisa);

			if ($registro >= 1){
				echo "<script> 
					alert ('login ja existente')
				</script>";
				echo "<script> 
					location.href= ('ALTERA_EXCLUI_USER.php')
				</script>";
			}
			else{  
			
			$altera = mysql_query("UPDATE `usuario` SET `nome_user` = '$nome', `login_user` = '$login', `senha_user` = '$senha' WHERE `usuario`.`cod_user` = $cod;");
							   
		
			
			if ($altera == true)	{
				echo"<script>
					alert ('$nome alterado com sucesso')
				
				</script>";
				echo "<script> 
					location.href= ('ALTERA_EXCLUI_USER.php')
				</script>";
				
				exit();
			
			}else{
				echo"<script>
					alert ('ocorreu um erro')
				
				</script>";
				echo "<script> 
					location.href= ('ALTERA_EXCLUI_USER.php')
				</script>";
			}				  
			}

?>