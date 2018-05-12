<?php
include "conexao.php";
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
				
				if (login == "") {
					alert ("Preencha o campo com o seu login");
					form_login.login.focus();
					return false;
				}
				if (senha == "") {
					alert ("Preencha o campo com sua senha");
					form_login.senha.focus();
					return false;
				}
			}
			</script>
		
	</head>
		<body>
		<div id="principal">
		<div id="banner">
		<img src ="imagem/banner.jpg" id="banner1">
			
		</div>
		
		<div id="area_restrita">
			<p> Acesso Restrito </p>
				<form method="post" action="processa_login.php" name="form_login">
				<p> LOGIN <input type="text" name="login"> </p>
				<p> SENHA <input type="password" name="senha"> </p>
				<input type="submit" value="ENTRAR" onclick="return validar()">
				</form>
		</div>
		
		
		
		<div id="postagens">
		
		<p> Listagem de Noticias </p>
<?php
	$consulta = mysql_query ("SELECT		
									manchete_not,
									resumo_not,
									texto_not,
								FROM
									noticias");
		$linhas = mysql_num_rows ($consulta);
			echo "<h3> $linhas noticias postadas !!! </hr3>";
			for ($cont = 0; $cont < $linhas; $cont++){
			
			$manchete = mysql_result ($consulta, $cont, "manchete_not");
			$resumo = mysql_result ($consulta, $cont, "resumo_not");
			$texto = mysql_result ($consulta, $cont, "texto_not");
			
			echo "<h2> $manchete </h2>";
			echo "<h3> $resumo </h3>";
			echo "<p> $texto </p>";
			echo "<hr>";
}			
?>
					<form id="bucador">
					<input type="text"> 
					<input type="submit" value ="PESQUISAR">
					</form>
		<p> CONTEUDO PRINCIPAL DA PAGINA </p>
		<div>
		</div>
		</body>
</html>