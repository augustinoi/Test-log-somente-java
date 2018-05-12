<?php

	
	$conectar = mysql_connect ('localhost','root','');
 if (!$conectar) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($conectar);
?>



