<?php
	session_start();
	 include "conexao.php";
/* conecta ao banco de dados ----------------------------------------------------------------------------*/

	
?>
<Html>
<head>
<!-------------------------------------------------------------formataÃ§Ã£o de CSS --------------------------------------------------------->
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="fonts.css">

<!-------------------------------------------------------------formataÃ§Ã£o de UFT-8 --------------------------------------------------------->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<!------------------------------------------------------------ caixa de informacao --------------------------------------------------------->
		
	</head>


        <body>
  	
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
		
		
<!-------------------------------------------------------------MENU DE LINKS --------------------------------------------------------->
		<div   class = "menu"  >
		
	
		<?php
		include "valida_login.php";
		include "menu_navegacao.php"
?>
		</div>
    	
<!-------------------------------------------------------------FORMULARIO DE CADASTRO --------------------------------------------------------->	
		
		<?php

//* ----------------------------------------pesquisr no banco de dados a manchete o resumo e o texto---------------------------------------------*//
	
$cod = $_GET['codigo'];

	
	$consulta = mysql_query ("SELECT manchete_not,resumo_not,texto_not,cod_not
													 FROM noticia WHERE cod_not = '$cod'");
							
						
							
							
//* ----------------------------------------extrair da pesquisa acima a manchete o resumo e a tabela---------------------------------------------*//
		
			$manchete = mysql_result ($consulta, $linha,"manchete_not");
			$resumo = mysql_result  ($consulta, $linha, "resumo_not");
			$texto = mysql_result ($consulta, $linha, "texto_not");
		
		
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


?>
   
</body>
</HTML>