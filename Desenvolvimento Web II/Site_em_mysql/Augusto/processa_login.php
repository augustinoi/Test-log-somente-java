<?php
	session_start();
	
/*--------------------------------------------------------------- conecta ao banco de dados ------------------------------------------------------*/

	include "conexao.php";
	
	/*-------------------------------------------------------------receber login e senha ------------------------------------------------------------------------------*/
	
	$login =$_POST["login"];
	$senha =$_POST["senha"];
	
	
/*-------------------------------------------------------pesquisar no banco de dados login e senha ---------------------------------------------------------------*/

	$pesquisa = mysql_query("SELECT 
	                      login_user,senha_user 
						  FROM usuario
						  WHERE
						  BINARY
						  login_user = '$login' AND
						  senha_user = '$senha'
						 
						  ");
						  
	/*------------------------------------------------------------------Retorna tabela----------------------------------------------------------------------------------------*/
	
	$linha = mysql_num_rows ($pesquisa);
	
								
								/* se bater entra se nao retorne!!! */
					

						if ($linha == true){
		$_SESSION ["login"] = $login;
			echo "<script>
					location.href = ('administracao.php')
			     </script>";
		}
		else {
			echo"<script>
					alert ('LOGIN OU SENHA INCORRETO ! INFORME NOVAMENTE LOGIN E SENHA')
			     </script>";
				 
			echo "<script>
					location.href= ('index.php')
			     </script>";	 
			
		}





?>