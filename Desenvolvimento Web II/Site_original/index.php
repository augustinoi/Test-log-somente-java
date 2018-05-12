
<?php
include "conexao.php";
?>
<Html>
<head>
<!----------------------------------------------- pagina de formatacao ----------------------------------------->
<link rel="stylesheet" type="text/css" href="layoutindex.css">
<link rel="stylesheet" type="text/css" href="fonts.css">

<!----------------------------------------------- Corretor ortográfico ------------------------------------------>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<!----------------------------------------------- caixa de informacao ------------------------------------------->
<script language="javascript" type="text/javascript">
			function validar(){
				var login=form_login.login.value;
				var senha=form_login.senha.value;
				
				if (login == ""){
				  alert ("preencha o campo com seu login");
				  form_login.login.focus();
				  
				  return false;
				}
				
				if (senha == ""){
				  alert ("preencha o campo com sua senha");
				  form_login.senha.focus();
				  
				  return false;
				}
			}
		</script>
			
	

	</head>
        <BODY>
<!----------------------------------------------- caixa de busca ------------------------------------------->
        <DIV  ID = "BUSCA" >

			<form id="bucador">
					<input type="text"> 
					<input type="submit" value ="Buscar">
					</form>
		</DIV>
<!----------------------------------------------- Banner ------------------------------------------->
		
		<DIV  ID = "BANNER" >

			<img src= "imagens/banner.jpg" >
			
		</DIV>
		
<!----------------------------------------------- Area de login ------------------------------------------->
		<DIV   ID = "AREA_RESTRITA"  >

			<p> Área Restrita <p>
		<form method="post" action="processa_login.php" name="form_login">
			<p>
				Login: <input type="text">
			</p>
			<p> 
				Senha: <input type="password"> 
			</p>
			<p>
				<input type="submit" value="Entrar">
			</p>
			<p>
			
			</p>
			
		</form>
		</DIV>
<!----------------------------------------------- caixa de informacao ------------------------------------------->
		
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
					
<!----------------------------------------------- link provisorio (apagar) ------------------------------------------->
		<p> CONTEUDO PRINCIPAL DA PAGINA </p>
		
		
		
		</div>
<!----------------------------------------------- link provisorio (apagar) ------------------------------------------->
			
</BODY>
</HTML>