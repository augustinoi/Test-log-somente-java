<?php
include "conexao.php";

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];

$consulta = mysql_query ("SELECT login_user FROM usuario WHERE login_user = '$login'");

$linhas = mysql_num_rows ($consulta);

	if ($linhas == true) {
	echo "<script> 
			alert ('USUARIO JÁ CADASTRADO TENTE NOVAMENTE')
			</script>";
			echo  "<script> 
						location.href = ('cadastar_user.php')
						</script>";
					exit;
	
	}
	else {
		$cadastrar = mysql_query ("INSERT INTO usuario (nome_user, login_user, senha_user) VALUES ('$nome', '$login', '$senha')");
		if ($cadastrar == true) {
			echo "<script> 
				alert ('$nome cadastrado com sucesso')
					</script>";
			echo "<script>
			location.href = ('cadastar_user.php')
				</script>";
				exit;
		}
		else {
			echo "<script>
			alert ('Ocorreu um erro no Servidor. Tente Novamente!')
					</script>";
			echo "<script>
			location.href = ('cadastar_user.php')
				</script>";
		}
		
	}

?>