<?php
//Conectar No Banco de Dados --------------------------------------------------------------------------------
	include "conexao.php";

//Recebendo nome,login e senha ------------------------------------------------------------------------------	
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
		
		
		$nomeSeguro = addslashes($nome);
		$loginSeguro = addslashes($login);
		$senhaSegura = addslashes($senha);

//Pesquisando no Banco de Dados se o Login Recebido já existe  -------------------------------------------------	
	$consulta = mysqli_query($conectar,"SELECT login_user
							FROM usuario 
							WHERE
							login_user = '$loginSeguro'");

// Consultando as linhas da tabela para saber se há usuarios cadastrados ---------------------------------------							
	$linhas = mysqli_num_rows($consulta);

//Se tiver Usuarios --------------------------------------------------------------------------------------------	
	if($linhas == 1){
	
		echo"<script>
				alert('Esse Usuario ja existe.Tente Novamente')
			</script>";
		echo"<script>location.href=('CADASTRA_USER.php')</script>";
	}	
	else{
		
//Caso o Usuario for Cadastrado	-----------------------------------------------------------------------------
		$cadastrar = mysqli_query($conectar,"INSERT INTO usuario 
								(nome_user,login_user,senha_user)
								VALUES
								('$nomeSeguro','$loginSeguro','$senhaSegura')");
		if($cadastrar == true){
		
			echo"<script>alert('Usuario Cadastrado')</script>";
			echo"<script>location.href=('CADASTRA_USER.php')</script>";
		exit;	
		}
		else{
//Se o usuário não for cadastrado-----------------------------------------------------------------------
			echo"<script>alert('Discrapancia detectada,Cadastre novamente')</script>";
			echo"location.href=('CADASTRA_USER.php')";
		
		}
	}
?>




