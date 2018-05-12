<?php
//Conectar No Banco de Dados --------------------------------------------------------------------------------
	include "conexao.php";

//Recebendo nome,login e senha ------------------------------------------------------------------------------	
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

//Pesquisando no Banco de Dados se o Login Recebido já existe  -------------------------------------------------	
	$consulta = mysql_query("SELECT login_user
							FROM usuarios 
							WHERE
							login_user = '$login'");

// Consultando as linhas da tabela para saber se há usuarios cadastrados ---------------------------------------							
	$linhas = mysql_num_rows($consulta);

//Se tiver Usuarios --------------------------------------------------------------------------------------------	
	if($linhas == 1){
	
		echo"<script>
				alert('Esse Usuario ja existe.Tente Novamente')
			</script>";
		echo"<script>location.href=('cadastra_User.php')</script>";
	}	
	else{
		
//Caso o Usuario for Cadastrado	-----------------------------------------------------------------------------
		$cadastrar = mysql_query("INSERT INTO usuarios 
								(nome_user,login_user,senha_user)
								VALUES
								('$nome','$login','$senha')");
		if($cadastrar == true){
		
			echo"<script>alert('Usuario Cadastrado')</script>";
			echo"<script>location.href=('cadastra_User.php')</script>";
		exit;	
		}
		else{
//Se o usuário não for cadastrado-----------------------------------------------------------------------
			echo"<script>alert('Deu Erro, Cadastre novamente')</script>";
			echo"location.href=('cadastra_User.php')";
		
		}
	}
?>




