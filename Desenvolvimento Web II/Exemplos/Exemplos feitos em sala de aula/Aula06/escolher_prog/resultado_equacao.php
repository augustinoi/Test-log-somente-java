<html>
	<head>
	
	</head>
	<body>
		<h1> Equa��o do 2� Grau </h1>
		
		<?php
		$a = $_POST ["a"];
		$b = $_POST ["b"];
		$c = $_POST ["c"];

		if ($a == 0) {
			echo "<p> N�o � uma equa��o do 2� grau!!! </p>";
		} else {
			$delta = (pow($b, 2) - (4 * $a * $c));
			if ($delta > 0) {
				$x1 = (-($b) + sqrt ($delta)) / (2 * $a);
				$x2 = (-($b) - sqrt ($delta)) / (2 * $a);
				echo "<p> Existem duas ra�zes distintas: </p>";
				echo "<p> X1: $x1 <br>";
				echo " X2: $x2 </p>";
			} else if ($delta == 0) {
				$x = (-($b)) / (2 * $a);
				echo "<p> Existe uma ra�z distinta: </p>";
				echo "<p> X: $x </p>>";
			} else {
				echo "<p> N�o existem ra�zes reais poss�veis </p>";
			}
		}
	?>
	</body>
</html>