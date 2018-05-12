<?php
/* conexao com o banco de dados, no arquivo conexao.php*/
	session_start();
include "conexao.php";

/*receber o login e a senha*/
$login = $_POST ["login"];
$senha = $_POST["senha"];

$loginSeguro = addslashes($login);
$senhaSegura = addslashes($senha);

/*verifica se o login e a semha baten no bd */
$validar = mysqli_query($conectar,"SELECT login_user FROM usuario WHERE login_user = '$loginSeguro 'AND senha_user = '$senhaSegura'");
							
								$linhas = mysqli_num_rows ($validar);
							
								
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