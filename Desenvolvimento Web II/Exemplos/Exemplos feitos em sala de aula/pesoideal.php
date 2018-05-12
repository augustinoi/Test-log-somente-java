<html>
	<head>
	
	</head>
	<body>
		<h1> Peso Ideal </h1>
		
	
		<hr>
		
		<?php
		$sexo = $_POST["sexo"];
		$altura = $_POST ["altura"];
	switch ($sexo) {
			case  "m"  : $peso = (72.7 * $altura) - 58.0;
			echo "<p>Seu peso ideal e $peso</p>";
				        break;

			case  "f"   : $peso = (62.1 * $altura) - 44.7;
			echo "<p>Seu peso ideal e $peso</p>";
				        break;
		}
		

	?>
	</body>
</html>