<?php
include "conexao.php";

$titulo = $_POST["titulo"];
$resumo = $_POST["resumo"];
$texto = $_POST["texto"];

	$cadastrar = mysql_query ("INSERT INTO noticia (manchete_not, resumo_not, texto_not) VALUES ('$titulo', '$resumo', '$texto')");
	if ($cadastrar == true) {
			echo "<script> 
				alert ('$titulo cadastrado com sucesso')
					</script>";
			echo "<script>
			location.href = ('cadastar_noticia.php')
				</script>";
				exit;
		}
		else {
			echo "<script>
			alert ('Ocorreu um erro no Servidor. Tente Novamente!')
					</script>";
			echo "<script>
			location.href = ('cadastar_noticia.php')
				</script>";
		}

?>