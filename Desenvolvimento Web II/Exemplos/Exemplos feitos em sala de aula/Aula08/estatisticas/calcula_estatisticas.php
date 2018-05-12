<html>
	<head>
	
	</head>
	<body>
		<h1> Estatísticas </h1>
		<?php
			$altura = array();
			$sexo = array();
			
			for ($cont = 1; $cont <= 10; $cont++) {
			
				$altura[$cont] = $_GET["altura".$cont];
				$sexo[$cont] = $_GET["sexo".$cont];
				
			}
			$total_homens = 0;
			$total_mulheres = 0;
			$maior_altura = 0;
			
			/* Somando o total de homens e mulheres */
			for ($cont = 1; $cont <= 10; $cont++) {
				if ($sexo[$cont] == "m"){
					$total_homens = $total_homens + 1;
				}
				else {
					$total_mulheres = $total_mulheres + 1;
				}
				if ($altura[$cont] > $maior_altura) {
					$maior_altura = $altura[$cont];
					$sexo_maior_altura = $sexo[$cont];					
				}
			}
			
			echo "<p> O total de homens é: $total_homens</p>";
			echo "<p> O total de mulheres é: $total_mulheres</p>";
			echo "<p> A a maior altura é de $maior_altura de uma 
								pessoa do sexo $sexo_maior_altura </p>";
				
		?>
		
	</body>
</html>