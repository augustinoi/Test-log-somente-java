<html>
	<head>
	
	</head>
	<body>
		<form method="post" action="array.php">
			<p> Valores para o array: <br>
			
			<?php
				for ($cont = 1; $cont <= 4; $cont++) {
			?>
			
			<input type="text" name="vetpos<?php echo $cont; ?>" size="2"> <br>
			
			<?php
				}
			?>
			
			</p>
			<p> <input type="submit" value="enviar"> </p>		
		</form>
		
	</body>
</html>