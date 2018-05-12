<html>
	<head>
	
	</head>
	<body>
		<h1> TABUADA </h1>
		<table border = 1>
			<tr>
				<td>
					Expressão
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




