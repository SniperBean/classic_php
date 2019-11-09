<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
}

require_once "config.php";


$link = mysqli_connect($hostname, $username, $password, $database);

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>