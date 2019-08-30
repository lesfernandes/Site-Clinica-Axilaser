<?php	
	require 'validarLoginAdmin.php';

	session_unset();
	session_destroy();

	header('location:../index.php');
?>