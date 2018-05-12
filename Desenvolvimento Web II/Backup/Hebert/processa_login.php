<?php
	session_start();
	
/* conecta ao banco de dados -------------------------------------------------------------------------------*/

	include "conexao.php";
	
	/*  receber login e senha ------------------------------------------------------------------------------*/
	
	$login =$_POST["login"];
	$senha =$_POST["senha"];
	
	
/*  pesquisar no banco de dados login e senha ---------------------------------------------------------------*/

	$pesquisa = mysqli_query($conectar,"SELECT 
	                      login_user,senha_user 
						  FROM usuarios
						  WHERE
						  BINARY
						  login_user = '$login' AND
						  senha_user = '$senha'
						 
						  ");
						  
	/* retorna tabela----------------------------------------------------------------------------------------*/
	
	$linha = mysqli_num_rows ($pesquisa);
	
 /* se for igual logar se nao retornar ---------------------------------------------------------------------*/
 
		if ($linha == true){
		$_SESSION ["login"] = $login;
			echo "<script>
					location.href = ('administracao.php')
			     </script>";
		}
		else {
			echo"<script>
					alert ('login ou senha incorreta!! digite novamente')
			     </script>";
				 
			echo "<script>
					location.href= ('index.php')
			     </script>";	 
			
		}

?>