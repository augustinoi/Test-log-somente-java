<html>
	<head>
		
	</head>
			
	<body>
			<h1>  Multiplicação </h1>
			
			<?php
				$num1 = $_GET["num1"];
				$num2 = $_GET["num2"];
				
				$cont = 1;
				$resultado = 0;
				while ($cont <= $num1) {
					$resultado = $resultado + $num2;
					$cont++;
				}
				echo "<p> $resultado </p>";
			?>
	</body>

</html>