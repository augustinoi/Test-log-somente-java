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
			
			echo "<p> A soma � $soma</p>";
			echo "<p> A subtra��o � $subt</p>";
			echo "<p> A multiplica��o � $mult</p>";
			echo "<p> A divis�o � $divi</p>";
		?>
	</body>
</html>