<?php
/* conexao com o banco de dados, no arquivo conexao.php*/
	session_start();
include "conexao.php";

/*receber o login e a senha*/
$login = $_POST ["login"];
$senha = $_POST["senha"];

/*verifica se o login e a semha baten no bd */
$pesquisa = mysql_query("SELECT login_user, senha_user FROM usuario WHERE BINARY
											
								login_user = '$login' AND senha_user = '$senha'");
								
								$linhas = mysql_num_rows ($pesquisa);
								
								/* se bater entra se nao retorne!!! */
					if ($linhas == true) {
						$_SESSION["login"] = $login;
						echo "<script>
						location.href = ('administracao.php')
						</script>
						";
					} 
					else {
						echo "<script>
						 alert ('LOGIN OU SENHA INCORRETO ! INFORME NOVAMENTE LOGIN E SENHA') 
						 </script>
						 <script>
						 location.href = ('index.php')
						</script>
						";
					}





?>