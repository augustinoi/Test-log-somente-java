<html>
	<head>
	
	</head>
	<body>
		<h1> Discancia percorrida pelo carro</h1>
		
		<?php
		    $carro = $_POST["carro"];
			$tempo = $_POST["tempo"];
			
			
			
$Distancia = $carro * $tempo ;
			
			echo "<p> A distancia percorrida pelo carro e de $Distancia K/h </p>";
	?>
	</body>
</html>