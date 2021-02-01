<?php
session_start();

	$_SESSION = [];
	session_destroy();

	$message = '<strong>Logout successful.</strong>';
	header('Location: ../index.php?message='.$message);
	exit();

?>