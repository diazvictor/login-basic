<?php
	require("../conf.php");

	if ( user_is_valid() === false ){
		header('Location: ../index.php');
	}
 
	echo "Hola " . $_SESSION['username'];
?>
