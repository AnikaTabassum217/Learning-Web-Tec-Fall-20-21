<?php
	
	session_destroy();

	setcookie('flag', 'false', time()-100, '/');
	header('location: ../view/login.php');

?>