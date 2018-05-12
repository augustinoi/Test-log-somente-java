<?php
if  ($_SESSION ["login"] == "admin") {
?>
<ul id="menu">
				<li> <a href="administracao.php"> ADMINISTRAÇÃO </a> </li>
				<br>
				<li> <a href="exibe_user.php"> USUÁRIOS </a> </li>
				<br>
				<li> <a href="cadastar_user.php"> CADASTRO DE USUÁRIO </a> </li>
				<br>
				<li> <a href="cadastar_noticia.php"> CADASTRO DE NOTÍCIA </a> </li>
				<br>
				<li> <a href="altera_exclui_user.php"> ALTERAR/EXCLUSÃO USUÁRIO </a> </li>
				<br>
				<li> <a href="altera_exclui_noticia.php"> ALTERAR/EXCLUSÃO DE NOTÍCIA </a> </li>
					</ul>
						<a href="logout.php"> <input value= "Sair" type="submit"> </a>

<?php

}
	else {


?>
<ul id="menu">
				<li> <a href="administracao.php"> ADMINISTRAÇÃO </a> </li>
				<br>
				<li> <a href="cadastar_noticia.php"> CADASTRO DE NOTÍCIA </a> </li>
				<br>
				<li> <a href="altera_exclui_noticia.php"> ALTERAR/EXCLUSÃO DE NOTÍCIA </a> </li>
					</ul>
						<a href="logout.php"> <input value= "Sair" type="submit"> </a>

<?php

}

?>