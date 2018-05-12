
<?php
	if(($_SESSION["login"]) == "admin"){
 ?>
 
 
                <p><a href="administracao.php"> administracao</a></p>
				<p><a href="cadastra_User.php"> Cadrastro de Usuario</a></p>
				<p><a href="cadastra_Noticia.php"> Cadrastro de Noticias</a></p>
				<p><a href="altera_Exclui_User.php"> Alteracao/Exclusao de Usuario</a></p>
				<p><a href="altera_Exclui_Noticia.php"> Alteracao/Exclusao de Noticias</a></p>
 <?php
	}else{
 ?>
 
			 <p><a href="administracao.php"> administracao</a></p>
			 <p><a href="cadastra_Noticia.php"> Cadrastro de Noticias</a></p>
			 <p><a href="altera_Exclui_Noticia.php"> Alteracao/Exclusao de Noticias</a></p>
 
<?php
	}
 ?>