<?php
	include "conexao.php";
	
	$manchete = $_POST["manchete"];
	$resumo = $_POST["resumo"];
	$texto = $_POST["texto"];
	$cod = $_POST["codigo"];
	
		$pesquisa = mysql_query("SELECT manchete_not,resumo_not,texto_not FROM noticia
		
							 WHERE texto_not = '$texto'
							 AND cod_not = $cod");
							 
							 
		$registro =mysql_num_rows ($pesquisa);

			if ($registro >= 1){
				echo "<script> 
					alert ('notícia já pulicada')
				</script>";
				echo "<script> 
					location.href= ('ALTERA_EXCLUI_USER.php')
				</script>";
			}
			else{  
			
			$altera = mysql_query("UPDATE `noticia` SET `manchete_not` = '$manchete', `resumo_not` = '$resumo', `texto_not` = '$texto' WHERE `noticia`.`cod_not` = $cod;");
							   
		
			
			if ($altera == true)	{
				echo"<script>
					alert ('alterado com sucesso')
				
				</script>";
				echo "<script> 
					location.href= ('ALTERA_EXCLUI_NOTICIA.php')
				</script>";
				
				exit();
			
			}else{
				echo"<script>
					alert ('ocorreu um erro')
				
				</script>";
				echo "<script> 
					location.href= ('ALTERA_EXCLUI_NOTICIA.php')
				</script>";
			}				  
			}

?>