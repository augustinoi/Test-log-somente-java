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
				var login = form_login.login.value;
				var senha = form_login.senha.value;
				var nome = form_login.nome.value;
				
				if (nome == "") {
					alert("Preenchao campo com o nome do Usuário");
					form_login.nome.focus();
					return false;
				}
				if (login == "") {
					alert ("Preencha o campo com o login do Usuário");
					form_login.login.focus();
					return false;
				}
				if (senha == "") {
					alert ("Preencha o campo a senha do Usuário");
					form_login.senha.focus();
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
		<p> FORMULÁRIO DE CADASTRO DE USUÁRIO </p>
			<form method="post" action="processa_cadastro_user.php" name="form_login">
				<p> NOME:  <input type="text" name="nome"> </p>
				<p> LOGIN: <input type="text" name="login"> </p>
				<p> SENHA: <input type="password" name="senha"> </p>
				<br>
				<input type="submit" value="CADASTAR USUÁRIO" onclick="return validar()">
			</form>
		</div>
		</div>
		</body>
</html>