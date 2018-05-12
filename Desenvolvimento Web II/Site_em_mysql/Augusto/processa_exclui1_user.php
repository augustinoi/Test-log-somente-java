<?php 
	include "conexao.php";
	
	$cod=$_GET['codigo'];
	
		$consulta=mysql_query("SELECT nome_user FROM
									usuario
								WHERE cod_user = $cod");
								
		$nome=mysql_result($consulta,0,"nome_user");

			if ($cod <> 1){
			
?>			
		<Script language="javaScript">
			var msgchamando=window.confirm("tem certeza que deseja excluir o usuario: <?php echo $nome; ?>?");
			
			if (msgchamando){
				window.location.href=("processa_exclui2_user.php?codigo=<?php echo $cod; ?>")
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
				alert("O usuario nao pode ser excluido")
			</script>
			
			<script>
				location.href=('ALTERA_EXCLUI_USER.php')
			</script>
			
<?php
			}
			
?>			