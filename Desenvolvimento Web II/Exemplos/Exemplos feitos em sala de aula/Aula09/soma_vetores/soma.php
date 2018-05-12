<html>
	<head>
	
	</head>
	<body>
		<?php
			$vet1 = array();
			$vet2 = array();
			$soma = array();
			
			for ($cont = 1; $cont <= 2; $cont++) {
				$vet1[$cont] = $_POST["vet1pos".$cont];
				$vet2[$cont] = $_POST["vet2pos".$cont];
				
			}
			
			for ($cont = 1; $cont <= 2; $cont++){
				$soma[$cont] = $vet1[$cont] + $vet2[$cont];
				echo "<p> COM O FOR - $soma[$cont] </p>";
				
			}
			<>
			foreach ($soma as $resultado) {
				echo "<p> COM O FOREACH - $resultado </p>";
			}
			
		?>
		
	</body>
</html>