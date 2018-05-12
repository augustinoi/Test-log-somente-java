<html>
	<head>
		
	</head>
			
	<body>
			<h1>  Contador </h1>
			<?php
				$num = $_GET["num"];
				$cont = 1;
				while ($cont <= $num) {
					echo "<p> Estou contando $cont </p>";
					$cont++;
				}
			
			?>
	</body>

</html>