<?php
	session_start();
/* conecta ao banco de dados ----------------------------------------------------------------------------*/

	
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
				var nome=form_login.nome.value;
				var login=form_login.login.value;
				var senha=form_login.senha.value;
				
				if (nome == ""){
				  alert ("preencha o campo com o nome");
				  form_login.nome.focus();
				  
				  return false;
				}
				
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
  	
		</div>
		
<!-------------------------------------------------------------BANNER --------------------------------------------------------->		
		<img src= "imagens/7-2-globe-png-clipart.png"  >
		
				<div  ID = "BANNER" >
				
			
			<h1 ID = "Logo1">Portal de notícias</h1>
			<p ID = "linelogo">______________________________________________________________</p>
			<h4>O seu Jornal de notícias</h4>
			
			
		
			
		</div>
		
<!-------------------------------------------------------------MENU DE LINKS --------------------------------------------------------->
		<div   ID = "MENU_DE_LINKS"  >
		
		<h5>Seja Bem Vindo</h5>

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
					 <a href="index.htm">
						<input type="submit" value="Sair">
						</a>
					
			</p>
			
		</form>
    	
		</div>
    	
<!-------------------------------------------------------------FORMULARIO DE CADASTRO --------------------------------------------------------->	
		
		<div   ID = "postagens">

				<h3> Formulário de cadastro de Usuário</h3>
				<form method="post" action="processa_cadastra_user.php" name="form_login" >
	
				   <p>Nome:     <input type="text" name="nome"></p>
				   <p>Login:    <input type="text" name="login"></p>
					<p>Senha:   <input type="password" name="senha"></p>
					
					<p><input type="submit" value="cadastrar usuario " onclick="return validar()"></p>
				</form>
			</div>
   
</body>
</HTML>