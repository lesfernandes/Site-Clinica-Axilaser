<?php
	session_start();

 	if(!isset($_SESSION["logadoAdmin"])){
    header('location:index.php');
    session_destroy();
  }
?>