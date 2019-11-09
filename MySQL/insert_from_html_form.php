<?php
require_once("config.php");
echo"<h2>Insert From HTML Form</h2>";

echo"<pre>
// Escape user inputs for security
\$first_name = mysqli_real_escape_string(\$link, \$_REQUEST['first_name']);
\$last_name = mysqli_real_escape_string(\$link, \$_REQUEST['last_name']);
\$email = mysqli_real_escape_string($link, \$_REQUEST['email']);

// Attempt insert query execution
\$sql = \"INSERT INTO persons (first_name, last_name, email) VALUES ('\$first_name', '\$last_name', '\$email')\";
</pre>";

$link = mysqli_connect($hostname, $username, $password, $database);

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

if(mysqli_query($link, $sql)){
	echo "Table created successfully";
} else{
	echo "ERROR: Could not able to execute $sql" . "<br>" . mysqli_error($link);
}

mysqli_close($link);


?>