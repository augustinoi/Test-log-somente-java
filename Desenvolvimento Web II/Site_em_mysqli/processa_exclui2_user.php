<?php 
	include "conexao.php";
	
	$cod=$_GET['codigo'];
	
	$apaga = mysql_query  ("DELETE FROM usuarios 
							WHERE cod_user ='$cod'");
							
	if ($apaga == true){
		
		echo "<script>
				alert('usuario excluido')
			</script>";
			
		echo "<script>
				location.href=('altera_exclui_user.php')
			</script>";	
	
	}
	else{
			 echo "<script>
				alert('problemas no bd tente de novo')
			</script>";
			
		echo "<script>
				location.href=('altera_exclui_user.php')
			</script>";	
			
	}

?>