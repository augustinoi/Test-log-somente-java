<html>
	<head>
	
	</head>
	<body>
		<?php
			$opcao = $_GET["opcao"];
			if ($opcao == "pi") {
		?>
		<h1> Peso ideal </h1>
		<hr>
		<form method="get" action="pesoideal.php">
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
			} else if ($opcao == "e2") {
		?>
		<h1> Discancia percorrida pelo carro </h1>
		
		<form method="post" action="DCarro.php">
			<p>
		Velocidade do carro - KM: <input type="text" name="carro"> <br>
		Tempo decorrido - Horas: <input type="text" name="tempo"> <br>
			
				 </p>
					
			<p>
				<input type="submit" value="calcular">
			</p>
		</form>	
	<?php
			} else if ($opcao == "t1") {
		?>
		<h1> TABUADA </h1>
		
		<hr>
		
		<form method="post" action="resultado.php">
			<p>
				Tabuada do <input type="text" name="valor">
			</p>
			<p>
				<input type="submit" value="calcular">
			</p>
		</form>	
		<?php
			} else if ($opcao == "mn"){
		?>
		
			<p> Insira os valores numerico: <br>
		<form method="get" action="maiornumero.php">
			<p>
		Primeiro numero: <input type="text" name="N1"> <br>
		Primeiro segundo: <input type="text" name="N2"> <br>
			Primeiro terceiro: <input type="text" name="N3"> <br>
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