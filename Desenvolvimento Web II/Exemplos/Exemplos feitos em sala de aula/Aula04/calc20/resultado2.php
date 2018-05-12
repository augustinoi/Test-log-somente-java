<HTML>
	<HEAD>
	
	</HEAD>
	<BODY>
		<H1> CALCULADORA 3.0 </H1>
		<?php
			$num1 = $_GET ["num1"];
			$num2 = $_GET ["num2"];
			$operador = $_GET ["operador"];
			
			switch ($operador) {
				case "+": $resultado = $num1 + $num2;
						  break;
				case "-": $resultado = $num1 - $num2;
						  break;
				case "*": $resultado = $num1 * $num2;
						  break;
				case "/": $resultado = $num1 / $num2;
						  break;
			}
			echo "O resultado é: $resultado";
		?>
	</BODY>
</HTML>