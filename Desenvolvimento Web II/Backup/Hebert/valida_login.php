<?php

	if (isset ($_SESSION ["login"])) {
		echo $_SESSION ["login"];
 
	}
	else{
		echo "<script>
			alert ('voce nao esta logado')
	         </script>";
	
		echo "<script>
		    location.href= ('index.php')
             </script>";
    }
?>