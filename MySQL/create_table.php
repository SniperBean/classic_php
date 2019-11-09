<?php
require_once("config.php");
echo"<h2>Create Table</h2>";

echo"<pre>
\$sql = \"CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)\";

<strong>Produral</strong>
mysqli_query(\$link, \$sql);
<strong>Object Oriented</strong>
\$mysqli->query(\$sql);
<strong>PDO</strong>
\$pdo->exec(\$sql);
</pre>";

$link = mysqli_connect($hostname, $username, $password, $database);

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";

if(mysqli_query($link, $sql)){
	echo "Table created successfully";
} else{
	echo "ERROR: Could not able to execute $sql" . "<br>" . mysqli_error($link);
}

mysqli_close($link);


?>