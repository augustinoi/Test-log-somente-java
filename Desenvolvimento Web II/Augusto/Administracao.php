

<?php
 /*---------------------------------------------------------  coneção com o banco de dados -------------------------------------------------------*/
 session_start();
 include "conexao.php";
 ?>
 <Html>
<head>
<!-------------------------------------------------------------formatação de CSS --------------------------------------------------------->
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="fonts.css">
<!-------------------------------------------------------------formatação de UFT-8 --------------------------------------------------------->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>

        <body>
		
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
		
<!-------------------------------------------------------------MENU DE LINKS --------------------------------------------------------->
		
		<div class ="menu" >
		
	<?php
					include "valida_login.php";
					include "menu_navegacao.php";
					
				
				?>
    	
		</div>
<?php

//* ----------------------------------------pesquisr no banco de dados a manchete o resumo e o texto---------------------------------------------*//
	$consulta = mysql_query ("SELECT manchete_not,resumo_not,texto_not
													 FROM noticia");
													 
							$linhas = mysql_num_rows ($consulta);
							
//* ----------------------------------------extrair da pesquisa acima a manchete o resumo e a tabela---------------------------------------------*//
		echo "<div class='info'>";
		
		
		echo  "<table  class='info'>";
		echo  "<tr>";
		echo  "<td> Listagem de Noticias </td>";
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