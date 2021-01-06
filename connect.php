<?php
	session_start();
	$con=mysqli_connect("localhost","root","","tax");
	if(!$con)
	{
		echo "Not Connected";
	}	
?>