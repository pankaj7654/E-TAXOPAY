<?php
	require_once("../connect.php");
	if($_SESSION['userpan']=="")
	{
		header("location:../login.php");
	}
	if($_SESSION['usertype']!="0")
	{

        unset($_SESSION['usertype']);
        unset($_SESSION['userpan']);
		header("location:../login.php");
	}
?>