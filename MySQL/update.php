<?php
require_once("config.php");

$link = mysqli_connect($hostname, $username, $password, $database);

echo "<h2>Updating Database Table Data</h2>";
echo "<pre>
The UPDATE statement is used to change or modify the existing records in a database table. 
This statement is typically used in conjugation with the WHERE clause to apply the changes to only those records that matches specific criteria.

The basic syntax of the UPDATE statement can be given with:
UPDATE table_name SET column1=value, column2=value2,... WHERE column_name=some_value
</pre>";

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE persons SET email='peterparker_new@mail.com' WHERE id=1";

if(mysqli_query($link, $sql)){
	echo "Records were updated successfully.";
} else{
	echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

mysqli_close($link);


?>