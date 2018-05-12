<html>
	<head>
	
	</head>
	<body>
		<h1> CALC 1.0 </h1>
		<?php
			$num1 = $_GET["num1"];
			$num2 = $_GET["num2"];
			
			$soma = $num1 + $num2;
			$subt = $num1 - $num2;
			$mult = $num1 * $num2;
			$divi = $num1 / $num2;
			
			echo "<p> A soma é $soma</p>";
			echo "<p> A subtração é $subt</p>";
			echo "<p> A multiplicação é $mult</p>";
			echo "<p> A divisão é $divi</p>";
		?>
	</body>
</html>