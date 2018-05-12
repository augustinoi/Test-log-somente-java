<?php
	if (isset($_SESSION["login"])) {
		echo "<p> SEJA BEM VINDO </p>";
		echo $_SESSION["login"];
		
	}
	else {
		echo "<script>
			alert ('Você não está Logado !!!')
			</script>";
			echo "<script>
			location.href = ('index.php')
			</script>";
		
	}
?>