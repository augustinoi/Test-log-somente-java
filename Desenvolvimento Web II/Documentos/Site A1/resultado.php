<html>
	<head>
	
	</head>
	<body>
		<h2> Aqui esta o resultado da sua tabuada </h2>
		<hr>
		<table border = 0>
			<tr>
				<td>
					Expressao
				</td>
				<td>
					Resultado
				</td>
			</tr>
		<?php
			$valor = $_POST["valor"];
			$cont = 1;
			while ($cont <= 10) {
				$produto = $cont * $valor;
		?>		
			<tr>
				<td>
					<?php 
						echo "<p> $valor x $cont = </p>";
					?>
				</td>
				<td>
					<?php echo $produto; ?>
				</td>
			</tr>	
				
		<?php			
				$cont++;
			}
		?>
		</table>
	</body>
</html>




