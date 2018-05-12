<?php
session_start();
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta charset="utf-8">
	</head>
		<body>
			<div id="principal">
		<div id="banner">
		<img src ="imagem/banner.jpg" id="banner1">

		</div>
		
		<div id="busca">
		<?php
		include "valida_login.php";
		include "menu_navegacao.php";
		
		?>
					ii
		</div>
		
		<div id="postagens">
					<form id="bucador">
					<input type="text"> 
					<input type="submit" value ="PESQUISAR">
					</form>
		<p> CONTEUDO PRINCIPAL DA PAGINA </p>
		</div>
		</div>
		</body>
</html>
