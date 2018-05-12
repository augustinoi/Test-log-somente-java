<?php
//-------------------------------------------------------------------Conectar No Banco de Dados --------------------------------------------------------------------------------
	include "conexao.php";

//-------------------------------------------------------------------Recebendo nome,login e senha ------------------------------------------------------------------------------	
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
		
			$nomeSeguro = addslashes($nome);
		$loginSeguro = addslashes($login);
		$senhaSegura = addslashes($senha);
		

//--------------------------------------------------Pesquisando no Banco de Dados se o Login Recebido já existe  -------------------------------------------------	
	$consulta = mysql_query("SELECT 
	                      login_user
						  FROM usuario
						  WHERE
						  BINARY
						  login_user = '$loginSeguro' ");
						  
						  

//---------------------------------------------Consultando as linhas da tabela para saber se há usuarios cadastrados ---------------------------------------							
	$linha = mysql_num_rows($consulta);

//-------------------------------------------------------------------------Se tiver Usuarios --------------------------------------------------------------------------------------------	
	
		if($linha >= 1){
	
		echo"<script>
				alert('Esse Usuario ja existe. Utilize outro nome')
			</script>";
		echo"<script>location.href=('CADASTRA_USER.php')</script>";
	}	
	else{
//---------------------------------------------------------------------Caso o Usuario for Cadastrado----------------------------------------------------------------------------------
			$cadastrar = mysql_query("INSERT INTO usuario 
								(nome_user,login_user,senha_user)
								VALUES
								('$nomeSeguro','$loginSeguro','$senhaSegura')");
		if($cadastrar == true){
		
			echo"<script>alert('Usuario Cadastrado)</script>";
			echo"<script>location.href=('CADASTRA_USER.php')</script>";
		exit;	
		}
		else{
//--------------------------------------------------------------------Se o usuário não for cadastrado-----------------------------------------------------------------------
			echo"<script>alert('Discrapancia detectada,Cadastre novamente')</script>";
			echo"location.href=('CADASTRA_USER.php')";
		
		}
	}
	
	

?>




