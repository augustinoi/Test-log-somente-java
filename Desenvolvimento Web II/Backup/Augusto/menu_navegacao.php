
<?php
	if(($_SESSION["login"]) == "admin"){
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
 <?php
	}else{
 ?>
               <form>
					
					<p>
						<a href="Administracao.php"> 
							Administracao
						</a>
					</p>
						
					<p>
						<a href="CADASTRA_NOTICIA.php">
							Cadastro de Noticias
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
<?php
	}
 ?>