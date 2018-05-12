<html>
	<head>
	
	</head>
	<body>
		<h1> TABELA </h1>
		<table border=1>
		<?php
			$linhas = $_POST["linhas"];
			$cont = 1;
			while ($cont <= $linhas) {
		?>	
				<tr>
					<td>
						<?php echo "<p> Linha $cont </p>";?>
					</td>
				</tr>
		<?php	
				$cont++;
			}
		?>
		</table>
	</body>
</html>




