<?php



	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	
	$conectar = mysqli_connect ("localhost","root","","bancophp") or die ("nao foi possivel conectar no servidor db");
   
   if (mysqli_connect_errno())
  {
  echo "Falha em conectar com o Banco de dados: " . mysqli_connect_error();
  }
?>