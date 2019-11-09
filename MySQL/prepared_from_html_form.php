<?php
require_once("config.php");

$link = mysqli_connect($hostname, $username, $password, $database);

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
	//Bind variable to the prepared statement as parameters
	mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
		
	$first_name = $_REQUEST['first_name'];
	$last_name = $_REQUEST['last_name'];
	$email = $_REQUEST['email'];
	
	mysqli_stmt_execute($stmt);
	
    echo "Records inserted successfully.";
} else{
	echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}

mysqli_stmt_close($stmt);

mysqli_close($link);


?>