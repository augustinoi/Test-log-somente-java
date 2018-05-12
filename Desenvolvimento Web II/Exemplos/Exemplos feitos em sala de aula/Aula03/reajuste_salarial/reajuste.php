<html>
	<head>
	
	</head>
	<body>
		<h1> Reajuste Salarial </h1>
		<?php
			$salario = $_GET["salario"];

			$resultado = $salario + ($salario * 0.1);
			
			echo "<p> O salario reajustado é $resultado</p>";	
			
		?>
	</body>
</html>