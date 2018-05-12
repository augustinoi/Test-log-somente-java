<html>
	<head>
	
	</head>
	<body>
		<h1> ESCOLHER PROGRAMA </h1>
		<?php
			$opcao = $_GET["opcao"];
			if ($opcao == "pi") {
		?>
		<h1> Peso Ideal </h1>
		<form method="get" action="resultado_peso_ideal.php">
			<p>
				Informe o sexo: <br>
				<input type="radio" name="sexo" value="m" checked> Masculino  <br>
				<input type="radio" name="sexo" value="f"> Feminino  
			</p>
			<p>
				Informe altura 
				<input type="text" name="altura">
			</p>
			
			<p>
				<input type="submit" value="calcular">
			</p>
		</form>	
		<?php
			} else {
		?>
		<h1> Equação do 2º Grau </h1>
		
		<form method="post" action="resultado_equacao.php">
			<p>
				 Valor de A: 
				 <input type="text" name="a"> <br>
				 Valor de B: 
				 <input type="text" name="b"> <br>
				 Valor de C: 
				 <input type="text" name="c"> <br>
			</p>
					
			<p>
				<input type="submit" value="calcular">
			</p>
		</form>	
		<?php
			}
		?>
	</body>
</html>