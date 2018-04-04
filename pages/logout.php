<?php ob_start(); 
	require('../includes/bd.php');

	unset($_SESSION['logged_user']);
	header("Location: /");
ob_end_flush(); ?>