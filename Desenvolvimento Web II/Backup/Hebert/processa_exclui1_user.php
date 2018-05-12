<?php 
	include "conexao.php";
	$cod=$_GET['codigo'];
	
		$consulta=mysql_query("SELECT nome_user FROM
									usuarios
								WHERE cod_user = '$cod'	");
								
		$nome=mysql_result($consulta,0,"nome_user");

			if ($cod <> 5){
			
?>			
		<Script language="javaScript">
			var msgchamando=window.confirm("tem certeza que deseja excluir o usuario <?php echo $nome; ?>?");
			
			if (msgchamando){
				window.location.href=("processa_exclui2_user.php?codigo=<?php "$cod"; ?>")
			}
			else{
				window.history.go(-1);
			}
		</script>
<?php	
			}
			else{

?>
			<script>
				alert("o usuario administrador nao pode ser excluido")
			</script>
			
			<script>
				location.href=("altera_exclui_user.php")
			</script>
			
<?php
			}
			
?>			