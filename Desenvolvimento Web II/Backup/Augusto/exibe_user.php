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
		<div id="principal2">
		<div id="banner">
		<img src ="imagem/banner.jpg" id="banner1">
		</div>
		
		<div id="busca">
		<?php
		include "valida_login.php";
		?>
			<ul id="menu">
				<li> <a href="administracao.php"> ADMINISTRAÇÃO </a> </li>
				<br>
				<li> <a href="exibe_user.php"> USUÁRIOS </a> </li>
				<br>
				<li> <a href="cadastar_user.php"> CADASTRO DE USUÁRIO </a> </li>
				<br>
				<li> <a href="cadastar_noticia.php"> CADASTRO DE NOTÍCIA </a> </li>
				<br>
				<li> <a href="altera_exclui_user.php"> ALTERAR/EXCLUSÃO USUÁRIO </a> </li>
				<br>
				<li> <a href="altera_exclui_noticia.php"> ALTERAR/EXCLUSÃO DE NOTÍCIA </a> </li>
					</ul>
						<a href="logout.php"> <input value= "Sair" type="submit"> </a>
		</div>
		
		<div id="cadastro">
		<p>EXIBIR DE USUARIO </p>
		</div>
		</div>
		</body>
</html>