<?php

	
	$conectar = mysql_connect ('localhost','root','');
 if (!$conectar) {
    die('N�o foi poss�vel conectar: ' . mysql_error());
}
echo 'Conex�o bem sucedida';
mysql_close($conectar);
?>



