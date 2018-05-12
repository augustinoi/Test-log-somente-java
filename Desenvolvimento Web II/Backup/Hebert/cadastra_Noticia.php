<?php
	session_start();
?>

<html>
	<head>
<!-- essa tag conecta ao css que formata a pagina --------------------------------------------------------->
	
		<link rel="stylesheet" type="text/css" href="formatacao.css">

<!-- script usado para aparecer caixa de informacao na pagina web --------------------------------------------- -->		
		<script language="javascript" type="text/javascript" >
			function validar(){
				var titulo=form_noticia.titulo.value;
				var resumo=form_noticia.resumo.value;
				var texto=form_noticia.texto.value;
				
				if (titulo == ""){
					alert("preencha o campo titulo");
					form_noticia.titulo.focus();
					
					return false;
				}
				if (resumo == ""){
					alert ("preencha o campo resumo");
					form_noticia.resumo.focus();
					
					return false;
				}
				if (texto == ""){
					alert ("preencha o campo texto");
					form_noticia.texto.focus();
					
					return false;
				}
			}
			
		</script>
	</head>

		<body>
<!-- PORTAL --------------------------------------------------------------------------------------------- -->		
			<div id="banner">
				<h1>portal</h1>
<!-- BUSCA --------------------------------------------------------------------------------------------- -->
					<form align="right">
						<p>
							Buscar: <input type="text" name="buscar"></br>
						</p>
						
							<p>
								<input type="submit" value="Buscar"></br>
							</p>
							
							<p>
								seja bem vindo
								<?php 
									include "valida_login.php";
								?>
							</p>
						
							<p>
								<a href= "logout.php">
								sair
								</a>
							</p>				
									 
					</form>				
			
			</div>
			
			
<!-- POSTAGENS ------------------------------------------------------------------------------------------ -->			
			<div id="postagens">
				<p>formulario de cadastro de noticias</p>
				<form method="post" action="processa_cadastra_noticia.php" name="form_noticia">
					
					
				   <p>titulo:   <input type="text" name="titulo"></p>
				   <p>resumo:   <input type="text" name="resumo"></p>
				   <p>texto:    <textarea name="texto"name="texto">  </textarea></p>
					
					<p><input type="submit" value="cadastrar" onclick="return validar()"></p>
				</form>
			</div>

<!-- AREA RESTRITA ------------------------------------------------------------------------------------------ -->			
			<div id="area_restrita">
				
				
				<?php
					include "menu_navegacao.php";
					include "valida_login.php";
				
				?>
				
				
			</div>
		</body>
</html>