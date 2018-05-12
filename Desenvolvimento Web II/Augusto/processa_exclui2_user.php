<?php 

 /*---------------------------------------------------------  coneção com o banco de dados -------------------------------------------------------*/
 session_start();
 include "conexao.php";

	
	$cod=$_GET['codigo'];
	
	
	
	$apaga = mysql_query  ("DELETE FROM `usuario` WHERE `usuario`.`cod_user` = $cod");
							
	if ($apaga == true){
		
		echo "<script>
				alert('Usuário excluido')
			</script>";
			
		echo "<script>
				location.href=('ALTERA_EXCLUI_USER.php')
			</script>";	
	
	}
	else{
			 echo "<script>
				alert('problemas no banco de dados tente de novo $cod $apaga')
			</script>";
			
		echo "<script>
				location.href= ('ALTERA_EXCLUI_USER.php')
			</script>";	
			
	}

?>