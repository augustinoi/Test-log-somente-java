<?php

//essa tag conecta No Banco de Dados ----------------------------------------------------------------------
	include "conexao.php";
	
/*recebe login e senha ------------------------------------------------------------------------------*/	
	$manchete = $_POST["titulo"];
	$resumo = $_POST["resumo"];
	$texto = $_POST["texto"];
	
	    $mancheteSeguro = addslashes($manchete);
		$resumoSeguro = addslashes($resumo);
		$textoSegura = addslashes($texto);
	
//Pesquisar no Banco de Dados se o Login Recebido já existe --------------------------------------------	
      $cadastrar = mysql_query("INSERT INTO noticia (manchete_not,resumo_not,texto_not)
									VALUES('$mancheteSeguro','$resumoSeguro','$textoSegura')");
									
// Consultar as linhas da tabela para saber se há usuarios cadastrados-------------------------------------									
			if($cadastrar == true){
				echo"<script>alert('Noticia Cadastrada')</script>";
				echo"<script>location.href=('CADASTRA_NOTICIA.php')</script>";
				exit;
			}
			else{
				echo"<script>alert('Erro no Cadastro da Noticia. Tente Novamente')</script>";
				echo"<script>location.href=('CADASTRA_NOTICIA.php')</script>";
			}
		
	
?>