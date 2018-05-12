

<?php
 /*---------------------------------------------------------  coneção com o banco de dados -------------------------------------------------------*/
 session_start();
 ?>
 <Html>
<head>
<!-------------------------------------------------------------formatação de CSS e UFT-8 --------------------------------------------------------->
<link rel="stylesheet" type="text/css" href="layoutindex.css">
<link rel="stylesheet" type="text/css" href="fonts.css">

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>

        <body>
		
<!--------------------------------------------------------------- BANNER ------------------------------------------------------------------------->		
	
		
	
	<img src= "imagens/7-2-globe-png-clipart.png"  >
		
				<div  ID = "BANNER" >
				
			
			<h1 ID = "Logo1">Portal de noticias</h1>
			<p ID = "linelogo">______________________________</p>
			<h4>O seu portal de noticias</h4>
			
			
		</div>

		<div   ID = "MENU_DE_LINKS"  >
		
		<h3>Seja Bem Vindo</h3>
		<?php
		echo '$loginSeguro'
?>
		<form>
					
					<p>
						<a href="Administracao.php"> 
							Administracao
						</a>
					</p>
						<p>
					
						<a href="CADASTRA_USER.php">
							Cadastro de Usuario
						</a>
					 
						</p>
					<p>
						<a href="CADASTRA_NOTICIA.php">
							Cadastro de Noticias
						</a>
				
			</p>
			<p>
						<a href="ALTERA_EXCLUI_USER.php">
						Alteração/Exclusão de Usuário
						</a>
				</p>
				<p>
						
						<a href="ALTERA_EXCLUI_NOTICIA.php">
							Alteração/Exclusão de Noticias
						</a>
					
</p>
<p>
					<input name="Sair" type="button" onClick="window.open('logout.php')" value="Sair">
					
			</p>
			
		</form>
    	
		</div>
		
		
		<div   ID = "POSTAGENS">

			<h1>Lista de noticias</h1>
			<h4>3 noticias postadas</h4>
			<h2>Site Exemplo</h2>
			<h4>Site para acesso a BD</h4>
			<h5>O presente exemplo se propõe a montar um site dinâmicoâmico</h5>
			<hr>
		
	
			<h2>Projeto de Sites</h2>
			<h4>Para o A2</h4>
			<h5>Faremos prova no A2 sobre acesso a DB</h5>
			<hr>
			
			
			<h2>O A2 vai ser foda</h2>
			<h4>Se não estudar</h4>
			<h5>Tá tudo fudido</h5>
			<hr>
    	
		</div>
		
		<div id="area_restrita">
				
				<?php
					include "menu_navegacao.php";
					include "valida_login.php";
				
				?>
			</div>
</body>
</HTML>