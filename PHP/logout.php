<?php
	session_start();

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	
	echo $_SESSION['username'] . 'logged out successfully';
	session_destroy();
?>