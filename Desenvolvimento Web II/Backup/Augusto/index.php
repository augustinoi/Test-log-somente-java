
<?php
include "conexao.php";
?>
<Html>
<head>
<!-------------------------------------------------------------formatação de CSS --------------------------------------------------------->
<link rel="stylesheet" type="text/css" href="layoutindex.css">
<link rel="stylesheet" type="text/css" href="fonts.css">

<!-------------------------------------------------------------formatação de UFT-8 --------------------------------------------------------->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<!------------------------------------------------------------ caixa de informacao --------------------------------------------------------->
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
        <body>
<!------------------------------------------------------------------ BUSCA -------------------------------------------------------------->
        <div  ID = "BUSCA" >

			<form id="bucador">
					<input type="text"> 
					<input type="submit" value ="Buscar">
					</form>
		</div>
<!-------------------------------------------------------------------BANNER------------------------------------------------------------------->
		
	

			<img src= "imagens/7-2-globe-png-clipart.png"  >
		
				<div  ID = "BANNER" >
				
			
			<h1 ID = "Logo1">Portal de notícias</h1>
			<p ID = "linelogo">______________________________________________________________</p>
			<h4>O seu Jornal de notícias</h4>
			
			
		
			
		</div>
		
<!----------------------------------------------- Area de login ------------------------------------------->
		<div   ID = "AREA_RESTRITA"  >

			<p> Área Restrita <p>
		<form method="post" action="processa_login.php" name="form_login"  >
					<p>
						Login:</br>
							<input type="text" name="login"  ></br>
						Senha:</br>
							<input type="password" name="senha" >
					
					</p>
				
					<p><input type="submit" value="Entrar" onclick="return validar()"></p>
				
			
		</form>
		</div>
<!----------------------------------------------- caixa de informacao ------------------------------------------->
		
		<div id="postagens">
		
		<p> Listagem de Noticias </p>
<?php
	$consulta = mysqli_query ($conectar,"SELECT manchete_not,resumo_not,texto_not
													 FROM noticia");
													 
							$linhas = mysqli_num_rows ($consulta);

			echo "<h3> $linhas noticias postadas !!! </hr3>";
			for ($cont = 0; $cont < $linhas; $cont++){
			
			$manchete = mysqli_f("manchete_not");
			$resumo = fetch_object ($consulta, $cont, "resumo_not");
			$texto = mysql_result ($consulta, $cont, "texto_not");
			
			echo "<h2> $manchete </h2>";
			echo "<h3> $resumo </h3>";
			echo "<p> $texto </p>";
			echo "<hr>";
}			
?>
								
</body>
</HTML>