<?php

	session_start();
	$_SESSION = array();
	session_unset();
	echo "<script>
			location.href= ('index.php')
	</script>";
	
?>