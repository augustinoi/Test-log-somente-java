<?php 
	include "conexao.php";
	
	$cod=$_GET['codigo'];
	
		$consulta=mysql_query("SELECT manchete_not FROM
									noticia
								WHERE cod_not = $cod");
								
		$nome=mysql_result($consulta,0,"manchete_not");

			if ($cod <> 1){
			
?>			
		<Script language="javaScript">
			var msgchamando=window.confirm("Tem certeza que deseja excluir a notícia: <?php echo $manchete; ?>?");
			
			if (msgchamando){
				window.location.href=("processa_exclui2_noticia.php?codigo=<?php echo $cod; ?>")
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
				alert("A notícia nao pode ser excluido")
			</script>
			
			<script>
				location.href=('ALTERA_EXCLUI_NOTICIA.php')
			</script>
			
<?php
			}
			
?>			