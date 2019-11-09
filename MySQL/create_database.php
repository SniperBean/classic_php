<?php
require_once("config.php");
echo"<h2>Create Database</h2>";

echo"<pre>
<strong>Procedural</strong>
\$link = mysqli_connect(\"localhost\", \"root\", \"\");
\$sql = \"CREATE DATABASE demo\";
mysqli_query(\$link, \$sql)

<strong>Object Oriented</strong>
\$mysqli = new mysqli(\"localhost\", \"root\", \"\");
\$sql = \"CREATE DATABASE demo\";
\$mysqli->query(\$sql);

<strong></strong>
try{
    \$pdo = new PDO(\"mysql:host=localhost;\", \"root\", \"\");
    // Set the PDO error mode to exception
    \$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException \$e){
    die(\"ERROR: Could not connect. \" . \$e->getMessage());
}
try{
    \$sql = \"CREATE DATABASE demo\";
    \$pdo->exec(\$sql);
    echo \"Database created successfully\";
} catch(PDOException \$e){
    die(\"ERROR: Could not able to execute \$sql. \" . \$e->getMessage());
}
</pre>";

$link = mysqli_connect($hostname, $username, $password);

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE DATABASE demo";

if(mysqli_query($link, $sql)){
	echo "Database created successfully";
} else{
	echo "ERROR: Could not able to execute $sql". mysqli_error($link);
}

mysqli_close($link);


?>