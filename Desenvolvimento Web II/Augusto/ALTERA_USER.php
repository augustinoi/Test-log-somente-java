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
		
<!-------------------------------------------------------------ALTERAÇÃO DE USUARIO ------------------------------------------------------------------------------------------ -->			
		
	<div   class = "cadastro">

				<?php 
					$cod= $_GET["codigo"];
					
					
						$pesquisa=mysql_query("SELECT nome_user,
													  login_user,
													  senha_user
											  FROM usuario
											  WHERE cod_user = '$cod'");
											  
						$nome=mysql_result($pesquisa,0,"nome_user");
						$login=mysql_result($pesquisa,0,"login_user");
						$senha=mysql_result($pesquisa,0,"senha_user");
				
				?>
<!--------------------------------------------------------------carregar o codigo do usuario----------------------------------------------------------------->			
				<form method="post" action="processa_altera_user.php" name="form_altera_user">
			
				<input type="hidden" name="codigo" value="<?php echo $cod;?>">
						
						<p>
						nome:
						<input type="text" name="nome" value="<?php  echo $nome; ?>">
						</p>
						
						<p>
						login:
						<input type="text" name="login" value="<?php  echo $login; ?>">
						</p>
						
						<p>
						senha:
						<input type="text" name="senha" value="<?php  echo $senha; ?>">
						</p>
						
						<p><input type="submit" value="Alterar"></p>
				</form>
			</div>
</body>
</HTML>