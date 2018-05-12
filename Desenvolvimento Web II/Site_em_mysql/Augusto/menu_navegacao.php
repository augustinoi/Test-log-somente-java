
<?php
	if(($_SESSION["login"]) == "admin"){
 ?>
 <table style="width:100%">
 <form>
 <tr>
    <td><a href="Administracao.php"> 
							Administracao
						</a></td>
   
  </tr>
  
   <tr>
    <td><a href="CADASTRA_USER.php">
							Cadastro de Usuario
						</a></td>
   
  </tr>
  <tr>
    <td><a href="CADASTRA_NOTICIA.php">
							Cadastro de Noticias
						</a></td>
   
  </tr>
   <tr>
    <td><a href="ALTERA_EXCLUI_USER.php">
						Alteração/Exclusão de Usuário
						</a></td>
   
  </tr>
   <tr>
    <td>	<a href="ALTERA_EXCLUI_NOTICIA.php">
							Alteração/Exclusão de Noticias
						</a></td>
   
  </tr>
  
 
  
   <tr>
    <td>	<input name="Sair" type="button" onClick="window.open('logout.php')" value="Sair"></td>
   
  </tr>
  
  </form>
</table>

 
 <?php
	}else{
 ?>
              <table style="width:100%">
 <form>
 <tr>
    <td><a href="Administracao.php"> 
							Administracao
						</a></td>
   
  </tr>
  
   <tr>
    <td><a href="CADASTRA_NOTICIA.php">
							Cadastro de Noticias
						</a></td>
   
  </tr>
  
   <tr>
    <td>	<a href="ALTERA_EXCLUI_NOTICIA.php">
							Alteração/Exclusão de Noticias
						</a></td>
   
  </tr>
  
   <tr>
    <td>	<input name="Sair" type="button" onClick="window.open('logout.php')" value="Sair"></td>
   
  </tr>
  
  </form>
</table>

<?php
	}
 ?>