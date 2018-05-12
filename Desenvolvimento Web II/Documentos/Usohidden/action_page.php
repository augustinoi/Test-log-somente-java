<html>
	<head>
	
	</head>
	<?php
	
           $nome = $_GET["nome"];
	echo " Digite o calculo $nome";	
		?>	
		<br>
		<form action = "resultado.php" method = get>
		<br>
		1 numero: <input type="text" name="num1"><br>
		2 numero: <input type="text" name="num2"><br>
		    <input type="hidden" name="nome" value="<?php echo $nome; ?>" /> 
		<input type="submit" value="calculo">
</form>		
	</body>
</html>


