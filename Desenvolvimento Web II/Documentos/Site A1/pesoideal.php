<html>
	<head>
	
	</head>
	<body>
		<h1> Peso Ideal </h1>
		
		<hr>
		
		<?php
		$altura = $_POST ["altura"];
		$sexo   = $_POST ["sexo"];

		switch ($sexo) {
			case  "m"  : $peso_ideal = 72.7 * $altura – 58.0;
				        break;

			case  "f"   : $peso_ideal = 62.1 * $altura – 44.7;
				        break;
		}
		echo  "<p> Seu peso ideal é $peso_ideal </p>";
	?>
	</body>
</html>