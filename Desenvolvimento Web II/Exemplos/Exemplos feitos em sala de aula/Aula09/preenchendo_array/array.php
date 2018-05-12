<html>
	<head>
	
	</head>
	<body>
		<?php
			$vetor = array();
			for ($cont = 1; $cont <= 4; $cont++) {
				$vetor[$cont] = $_POST["vetpos".$cont];
				
			}
			foreach ($vetor as $numero) {
				echo "$numero -";
			}
			
		?>
		
	</body>
</html>