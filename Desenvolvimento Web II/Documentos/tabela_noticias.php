<?php
	$consulta = mysql_query ("SELECT 
									cod_not,
									manchete_not, 
									resumo_not, 
									texto_not 
							 FROM 
									noticias");				
	$registros = mysql_num_rows ($consulta);
	echo "<h3> $registros noticias postadas!!! </h3>"; 
	
	$cont_registro = 0;
	
	$resto = $registros % 2;
	if ($resto == 1) {
		$linhas_da_tabela = $registros / 2;
		$linhas_da_tabela = $linhas_da_tabela + 0.5;		
	}
	else {
		$linhas_da_tabela = $registros / 2;
	}
?>
<table border=1>
	<?php						
		for ($linha = 1; $linha <= $linhas_da_tabela; $linha++)
		{						
	?>
		<tr>
	<?php			
			for ($coluna = 1; $coluna <= 2; $coluna++) 
			{
	?>		
			<td>
				<?php
					if ($cont_registro < $registros) {	
						$cod = mysql_result ($consulta, $cont_registro, "cod_not");			
						$manchete = mysql_result ($consulta, $cont_registro, "manchete_not");					
						$resumo= mysql_result ($consulta, $cont_registro, "resumo_not");					
						$texto = mysql_result ($consulta, $cont_registro, "texto_not");	
						$parte_texto = substr($texto, 0, 45);
				?>
					<h2> <?php echo $manchete; ?> </h2>
					<h3> <?php echo $resumo; ?> </h3>
					<p>  <?php echo $parte_texto; ?>
						<a href="exibe_noticia_fora.php?codigo=<?php echo "$cod"; ?>">
						... leia mais
						</a>
						</p>
			<?php
					}
				else {
						echo "";
					}						
			?>					
			</td>
				
	<?php
			$cont_registro++;
			}
	?>					
		</tr>
	<?php
		}
	?>	
</table>