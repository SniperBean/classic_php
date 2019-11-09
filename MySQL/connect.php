<?php
require_once("config.php");
echo"<h2>Connect</h2>";

echo"<pre>
Syntax: MySQLi, Procedural way
\$link = mysqli_connect(\"hostname\", \"username\", \"password\", \"database\");

Syntax: MySQLi, Object Oriented way
\$mysqli = new mysqli(\"hostname\", \"username\", \"password\", \"database\");

Syntax: PHP Data Objects (PDO) way
\$pdo = new PDO(\"mysql:host=hostname;dbname=database\", \"username\", \"password\");
</pre>";

$link = mysqli_connect($hostname, $username, $password);

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

echo"Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>