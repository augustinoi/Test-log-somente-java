<html>
	<head>
	
	</head>
	<body>
		<h1> CONSUMO </h1>
		<?php
			$consumo = $_GET["consumo"];
			
			if ($consumo <= 150) {
				$valor_pago = 10 * $consumo;
			}
			else if (($consumo > 150) and ($consumo <= 200)) {
				$valor_pago = 120 * $consumo;
			} else {
				$valor_pago = 150 * $consumo;
			}
			
			echo "O valor a ser pago será de $valor_pago."
		?>
	</body>
</html>