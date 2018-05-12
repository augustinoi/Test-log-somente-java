<HTML>
	<HEAD>
			
	</HEAD>
	
	<BODY>
		<h1>  CALCULO DE MÉDIA FINAL 2.0 </h1>
		<?php
			$n1 = $_GET["n1"];
			$n2 = $_GET["n2"];
			
			$media = ($n1 + $n2) / 2;
			
			if ($media >= 6) {
				echo "APROVADO"	;		
			}
			else {
				echo "REPROVADO";
			}
			
		?>
	</BODY>
</HTML>




