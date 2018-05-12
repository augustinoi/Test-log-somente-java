<?php
	session_start();
	include "conexao.php";
/* conecta ao banco de dados ----------------------------------------------------------------------------*/

	
?>
<Html>
<head>
<!-------------------------------------------------------------formatação de CSS --------------------------------------------------------->
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="fonts.css">

<!-------------------------------------------------------------formatação de UFT-8 --------------------------------------------------------->
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

	
	$consulta = mysql_query ("SELECT nome_user,login_user
													 FROM usuario WHERE cod_user = '$cod'");
							
						
							
							
//* ----------------------------------------extrair da pesquisa acima a manchete o resumo e a tabela---------------------------------------------*//
		
			$nome = mysql_result ($consulta,$linha,"nome_user");
			$login = mysql_result  ($consulta,$linha, "login_user");
		
		
		
//* --------------------------------------------------exibir a manchete o resumo e o texto--------------------------------------------------------*//			
			echo "<div class='noticias'>";
			echo "<hr>";
			echo "<h2> Nome do usuario: $nome</h2>";
			echo "<hr>";
			echo "<h3> Login do Usuário: $login </h3>";
			echo "<br>";
			echo "</div>";
			echo "<br>";


?>
   
</body>
</HTML>