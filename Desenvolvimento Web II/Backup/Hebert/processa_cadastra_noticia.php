<?php

//essa tag conecta No Banco de Dados ----------------------------------------------------------------------
	include "conexao.php";
	
/*recebe login e senha ------------------------------------------------------------------------------*/	
	$manchete = $_POST["titulo"];
	$resumo = $_POST["resumo"];
	$texto = $_POST["texto"];
	
//Pesquisar no Banco de Dados se o Login Recebido já existe --------------------------------------------	
	$cadastrar = mysql_query("INSERT INTO noticias (manchete_not,resumo_not,texto_not)
									VALUES('$manchete','$resumo','$texto')");
									
// Consultar as linhas da tabela para saber se há usuarios cadastrados-------------------------------------									
			if($cadastrar == true){
				echo"<script>alert('Noticia Cadastrada')</script>";
				echo"<script>location.href=('cadastra_Noticia.php')</script>";
				exit;
			}
			else{
				echo"<script>alert('Erro no Cadastro da Noticia. Tente Novamente')</script>";
				echo"<script>location.href=('cadastra_Noticia.php')</script>";
			}
		
	
?>