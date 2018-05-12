<?php
session_start();
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta charset="utf-8">
		<script language="javascript" type="text/javascript">
			function validar() {
				var titulo = form_login.titulo.value;
				var resumo = form_login.resumo.value;
				var texto = form_login.texto.value;
				
				if (titulo == "") {
					alert("Preenchao campo com o Titulo da Noticia");
					form_login.titulo.focus();
					return false;
				}
				if (resumo == "") {
					alert ("Preencha o campo com o Resumo da Noticia");
					form_login.resumo.focus();
					return false;
				}
				if (texto == "") {
					alert ("Preencha o campo a Texto da Noticia");
					form_login.texto.focus();
					return false;
				}
				
			}
			</script>
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
		<p> FORMULÁRIO DE CADASTRO DE NOTÍCIAS </p>
			<form method="post" action="processa_cadastra_noticia.php" name="form_login">
				<p> Título <input type="text" name="titulo"> </p>
				<p> Resumo <input type="text" name="resumo"> </p>
				<p> Texto <input type="text" name="texto"> </p>
				<br>
				<input type="submit" value="CADASTAR NOTICIA" onclick="return validar()">
				<p> ALTERAR O TYPE DA TAG DE TEXTO </p>
			</form>
		</div>
		</div>
		</body>
</html>