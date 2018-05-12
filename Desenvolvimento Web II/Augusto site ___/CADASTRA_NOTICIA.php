<?php
	session_start();
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
					include "menu_navegacao.php";
					
				
				?>
    	
		</div>
    	
<!-------------------------------------------------------------FORMULARIO DE POSTAGENS --------------------------------------------------------->	
		
			<div   class = "cadastro">
				<h3>formulario de Postagem de noticias</h3>
				<form method="post" action="processa_cadastra_noticia.php" name="form_noticia">
					
					
				   <p>Título:</br>   <input type="text" name="titulo"></p>
				   <p>Resumo:</br>   <input type="text" name="resumo"></p>
				   <p>Texto:</br>    <textarea name="texto"name="texto" rows="12" cols="104" >  </textarea></p>
					
					<p><input type="submit" value="Publicar" onclick="return validar()"></p>
				</form>
			</div>
</body>
</HTML>
   
</body>
</HTML>
		
	