<?php 

 /*---------------------------------------------------------  coneção com o banco de dados -------------------------------------------------------*/
 session_start();
 include "conexao.php";

	
	$cod=$_GET['codigo'];
	
	
	
	$apaga = mysql_query  ("DELETE FROM `noticia` WHERE `noticia`.`cod_not` = $cod");
							
	if ($apaga == true){
		
		echo "<script>
				alert('Notícia deletetada  ')
			</script>";
			
		echo "<script>
				location.href=('ALTERA_EXCLUI_NOTICIA.php')
			</script>";	
	
	}
	else{
			 echo "<script>
				alert('Problemas no banco de dados tente de novo')
			</script>";
			
		echo "<script>
				location.href= ('ALTERA_EXCLUI_NOTICIA.php')
			</script>";	
			
	}

?>