<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = " banks";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if($conn){
		//Connection successfully established
	  }
	  
	  else
		  die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
		  
	  ?>
	  
