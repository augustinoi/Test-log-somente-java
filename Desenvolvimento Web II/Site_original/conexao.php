<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	
	mysql_connect ("localhost","root","") or
	die ("N�o foi poss�vel conectar no servidor de Banco de Dados");
	
	mysql_select_db ("bancophp") or
	die ("N�o foi poss�vel encontar o Banco de Dados");




?>