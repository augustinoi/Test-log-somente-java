<?php

include "conexao.php";{

$nome = $_POST["nome"];
$login = $_POST ["login"];
$senha = $_POST ["senha"];

// consulta para ver se o usuario ja esta cadastrado

$consula = mysql_query ("SELECTE login_user 
								FROM usuarios 
								WHERE login_user = 'login'");

//colocar na variavel um valor com a qtd de linhas
//encontradas na consulta feita anteriormente

$linhas = mysql_num_rows ($consulta);

if($linhas == 1)
{

echo "<script>
alert ("Usuario ja cadastrado. tente de novo')
					</script>";

echo "<script>
location.href = ('Cadastra_User.php')
					</script>";

exit (); //se for verdadeiro para o fluxo aqui !!!

}

{
else{ //Para o usuario que nao existe

$cadastrar = mysql_query ("INSERT INTO usuarios (nome_user, login_user, senha_user)
VALUES
('$nome' , '$login' , '$senha')");
if ($cadastrar = true){

echo "<script>
alert ('$nome cadastro com sucesso')
</script>";

echo "<script>
location.href = ('Cadastra_	User.php')
</script>

exit;
}

	else{
	
	echo "<script>
 
 alert ('ocorreu um erro no servidor. 
								Tende de novo')
	'						</script>";
 
 echo "<script>
 location.href = ('Cadastra_User.php')
							</script>";
 
}

}

?>