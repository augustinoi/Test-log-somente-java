<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	
	mysql_connect ("localhost","root","") or
	die ("Não foi possível conectar no servidor de Banco de Dados");
	
	mysql_select_db ("bancophp") or
	die ("Não foi possível encontar o Banco de Dados");




?>