<?php
if  ($_SESSION ["login"] == "admin") {
?>
<ul id="menu">
				<li> <a href="administracao.php"> ADMINISTRA��O </a> </li>
				<br>
				<li> <a href="exibe_user.php"> USU�RIOS </a> </li>
				<br>
				<li> <a href="cadastar_user.php"> CADASTRO DE USU�RIO </a> </li>
				<br>
				<li> <a href="cadastar_noticia.php"> CADASTRO DE NOT�CIA </a> </li>
				<br>
				<li> <a href="altera_exclui_user.php"> ALTERAR/EXCLUS�O USU�RIO </a> </li>
				<br>
				<li> <a href="altera_exclui_noticia.php"> ALTERAR/EXCLUS�O DE NOT�CIA </a> </li>
					</ul>
						<a href="logout.php"> <input value= "Sair" type="submit"> </a>

<?php

}
	else {


?>
<ul id="menu">
				<li> <a href="administracao.php"> ADMINISTRA��O </a> </li>
				<br>
				<li> <a href="cadastar_noticia.php"> CADASTRO DE NOT�CIA </a> </li>
				<br>
				<li> <a href="altera_exclui_noticia.php"> ALTERAR/EXCLUS�O DE NOT�CIA </a> </li>
					</ul>
						<a href="logout.php"> <input value= "Sair" type="submit"> </a>

<?php

}

?>