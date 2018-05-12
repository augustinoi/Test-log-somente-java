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
		<div   class = "menu"  >
		
	
		<?php
		include "valida_login.php";
		include "menu_navegacao.php"
?>
		</div>
		
<!-------------------------------------------------------------ALTERAÇÃO DE NOTÍCIA ------------------------------------------------------------------------------------------ -->			
		<div   class = "cadastro">
		
		<?php 
					
					
//* ----------------------------------------pesquisr no banco de dados a manchete o resumo e o texto---------------------------------------------*//
	
					$cod= $_GET["codigo"];
					

	
	$consulta = mysql_query ("SELECT manchete_not,resumo_not,texto_not,cod_not
													 FROM noticia WHERE cod_not = '$cod'");
							
						
							
							
//* ----------------------------------------extrair da pesquisa acima a manchete o resumo e a tabela---------------------------------------------*//
		
			$manchete = mysql_result ($consulta, $linha,"manchete_not");
			$resumo = mysql_result  ($consulta, $linha, "resumo_not");
			$texto = mysql_result ($consulta, $linha, "texto_not");
			
			
				
				?>
<!--------------------------------------------------------------carregar o codigo do usuario----------------------------------------------------------------->			
				<form method="post" action="processa_altera_noticia.php" name="form_altera_noticia">
<input type="hidden" name="codigo" value="<?php echo $cod;?>">
				<p> Formulário de cadastro de Notícias<p>
		<form>
					<p>Título:</br>   <input type="text" name="manchete" value="<?php  echo $manchete; ?>"></p>
				   <p>Resumo:</br>   <input type="text" name="resumo" value="<?php  echo $resumo; ?>"></p>
				   <p>Texto:</br>    <textarea name="texto" rows="12" cols="104"  > <?php  echo $texto; ?> </textarea></p>
					
					<p><input type="submit" value="Modificar" onclick="return validar()"></p>

		</form>
    	
		</div>
</body>
</HTML>