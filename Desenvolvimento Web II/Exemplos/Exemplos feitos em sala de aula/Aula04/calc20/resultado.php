<HTML>
	<HEAD>
	
	</HEAD>
	<BODY>
		<H1> CALCULADORA 3.0 </H1>
		<?php
			$num1 = $_GET ["num1"];
			$num2 = $_GET ["num2"];
			$operador = $_GET ["operador"];
			
			if ($operador == "+") {			
				$resultado = $num1 + $num2;				
			}
			else if ($operador == "-") {				
						$resultado = $num1 - $num2;
					}
					else if ($operador = "*") {
							$resultado = $num1 * $num2;
						}
						else {
							$resultado = $num1 / $num2;
						}
			echo "O resultado e: $resultado";
		?>
	</BODY>
</HTML>