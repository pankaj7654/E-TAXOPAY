<?php
	require_once("connect.php");
	if($_SESSION['userpan']=="")
	{
		header("location:login.php");
	}
	
?>