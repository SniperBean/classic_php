<?php
require_once("config.php");

$link = mysqli_connect($hostname, $username, $password, $database);

echo "<h2>Get the ID of Last Inserted Row</h2>";
echo "<pre>
In the PHP MySQL insert chapter you've learnt MySQL automatically generate an unique ID for the AUTO_INCREMENT column each time you insert a new record or row into the table. 
However, there are certain situations when you need that automatically generated ID to insert it into a second table. 
In these situations you can use the PHP mysqli_insert_id() function to retrieve the most recently generated ID.

<strong>Procedural</strong>
if(mysqli_query(\$link, \$sql))
	\$last_id = mysqli_insert_id(\$link);

<strong>Object Oriented</strong>
if(\$mysqli->query(\$sql) === true)
	\$last_id = \$mysqli->insert_id;

<strong>PDO</strong>
try{
    \$sql = \"INSERT INTO persons (first_name, last_name, email) VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')\";    
    \$pdo->exec(\$sql);
    \$last_id = \$pdo->lastInsertId();
}

</pre>";

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Demo', 'Demo', 'demodemo@mail.com')";

if(mysqli_query($link, $sql)){
	$last_id = mysqli_insert_id($link);
	echo "Records inserted successfully. Last inserted ID is: " . $last_id;
} else{
	echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

mysqli_close($link);


?>