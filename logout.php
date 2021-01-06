<?php
	require_once('connect.php'); 
	unset($_SESSION['usertype']);
	unset($_SESSION['userpan']);
	header("location:index.php");
?>