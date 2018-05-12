<html>
	<head>
		
	</head>
			
	<body>
			<h1>  Mostrar intermediarios  </h1>
			<p>
			<?php
				$inicio = $_GET["inicio"];
				$fim = $_GET["fim"];
				
				$fim = $fim - 1;
				while ($inicio < $fim) {
					$inicio++;
					echo "$inicio ";
				}
			
			?>
			</p>
	</body>

</html>