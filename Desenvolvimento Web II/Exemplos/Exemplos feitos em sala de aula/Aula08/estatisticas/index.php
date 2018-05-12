<html>
	<head>
	
	</head>
	<body>
		<h1> Estatísticas </h1>
		<form method="get" action="calcula_estatisticas.php">
			<p>
				<?php
					for ($cont = 1; $cont <= 10; $cont++) {
				?>
						<p> Digite a <?php echo $cont; ?>º altura:
				
						<input type="text" name="altura<?php echo $cont; ?>" size="2"> <br>
				<?php	
						echo "Digite o $cont º sexo: ";
				?>
						<input type="radio" name="sexo<?php echo $cont; ?>" value="m" checked> M
						<input type="radio" name="sexo<?php echo $cont; ?>" value="f"> F <br>
				<?php		
					}
				?>
			</p>
			<p> <input type="submit" value="enviar"> </p>		
		</form>
		
	</body>
</html>