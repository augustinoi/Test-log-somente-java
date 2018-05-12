<html>
	<head>
	
	</head>
	<body>
		<h1> Equação do 2º Grau </h1>
		
		<?php
		$a = $_POST ["a"];
		$b = $_POST ["b"];
		$c = $_POST ["c"];

		if ($a == 0) {
			echo "<p> Não é uma equação do 2º grau!!! </p>";
		} else {
			$delta = (pow($b, 2) - (4 * $a * $c));
			if ($delta > 0) {
				$x1 = (-($b) + sqrt ($delta)) / (2 * $a);
				$x2 = (-($b) - sqrt ($delta)) / (2 * $a);
				echo "<p> Existem duas raízes distintas: </p>";
				echo "<p> X1: $x1 <br>";
				echo " X2: $x2 </p>";
			} else if ($delta == 0) {
				$x = (-($b)) / (2 * $a);
				echo "<p> Existe uma raíz distinta: </p>";
				echo "<p> X: $x </p>>";
			} else {
				echo "<p> Não existem raízes reais possíveis </p>";
			}
		}
	?>
	</body>
</html>