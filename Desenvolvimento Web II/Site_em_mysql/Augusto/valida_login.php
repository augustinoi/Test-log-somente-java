<?php
	if (isset($_SESSION["login"])) {
		echo "<p> SEJA BEM VINDO </p>";
		echo $_SESSION["login"];
		
	}
	else {
		echo "<script>
			alert ('Voc� n�o est� Logado !!!')
			</script>";
			echo "<script>
			location.href = ('index.php')
			</script>";
		
	}
?>