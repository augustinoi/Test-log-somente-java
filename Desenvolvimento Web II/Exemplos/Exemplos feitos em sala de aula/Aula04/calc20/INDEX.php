<HTML>
	<HEAD>
	
	</HEAD>
	<BODY>
		<H1> CALCULADORA 3.0 </H1>
		<form action="resultado2.php" method="get">
			<p>
				Digite um n�mero: <input type="text" name="num1">
			</p>
			<p>
				Digite outro n�mero: <input type="text" name="num2">
			</p>
			<p>
				Selecione o operador: 
				<br>
				<input type="radio" name="operador" value="+" checked>  Soma
				<br>
				<input type="radio" name="operador" value="-"> Subtra��o
				<br>
				<input type="radio" name="operador" value="*"> Multiplica��o
				<br>
				<input type="radio" name="operador" value="/"> Divis�o
			</p>
			<p>
				<input type="submit" value="Calcular">
			</p>
		</form>
	
	</BODY>
</HTML>