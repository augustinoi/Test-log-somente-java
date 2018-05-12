
<?php
include "conexao.php";
?>
<Html>
<head>
<!-------------------------------------------------------------formatação de CSS --------------------------------------------------------->
<link rel="stylesheet" type="text/css" href="layout.css">
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
        <div  class="busca" >

			<form id="bucador">
					<input type="text"> 
					<input type="submit" value ="Buscar">
					</form>
		</div>
<!-------------------------------------------------------------------BANNER------------------------------------------------------------------->
		
	

				 <div  class="banner" >
			
			
			
			<table>
  
  <tr>
   <th><img src= "imagens/7-2-globe-png-clipart.png"  ></th>
    <th><h1 ID = "Logo1">Portal de notícias</h1>
	<p ID = "linelogo">______________________________________________________________</p>
  <h4>O seu Jornal de notícias</h4>
  </th> 
   
 
</table>
			
		
			
		</div>
		
<!----------------------------------------------- Area de login ------------------------------------------->
		<div   class="menu"  >

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
		
		
		
		
<?php

//* ----------------------------------------pesquisr no banco de dados a manchete o resumo e o texto---------------------------------------------*//
	$consulta = mysql_query ("SELECT manchete_not,resumo_not,texto_not
													 FROM noticia");
													 
							$linhas = mysql_num_rows ($consulta);
							
//* ----------------------------------------extrair da pesquisa acima a manchete o resumo e a tabela---------------------------------------------*//
		echo "<div class='info'>";
		
		
		echo  "<table  class='info'>";
		echo  "<tr>";
		echo  "<th> Listagem de Noticias </th>";
		echo  "</tr>";
		echo  "<tr>";
		echo  "<td > noticias postadas !!!  </td>";
		echo  "<td class='blue'> $linhas</td>";
		echo  "</tr>";
		echo  "</table>";	
			
			echo "</div>";
			
			for ($cont = 0; $cont < $linhas; $cont++){
			
			$manchete = mysql_result ($consulta, $cont,"manchete_not");
			$resumo = mysql_result  ($consulta, $cont, "resumo_not");
			$texto = mysql_result ($consulta, $cont, "texto_not");
//* --------------------------------------------------exibir a manchete o resumo e o texto--------------------------------------------------------*//			
			echo "<div class='noticias'>";
			echo "<hr>";
			echo "<h2> $manchete </h2>";
			echo "<hr>";
			echo "<h3> $resumo </h3>";
			echo "<hr>";
			echo "<p> $texto </p>";
			echo "<br>";
			echo "</div>";
			echo "<br>";
}

?>
								
</body>
</HTML>