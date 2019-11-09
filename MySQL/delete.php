<?php
require_once("config.php");

$link = mysqli_connect($hostname, $username, $password, $database);

echo "<h2>Deleting Database Table Data</h2>";
echo "<pre>
Deleting Database Table Data
Just as you insert records into tables, you can delete records from a table using the SQL DELETE statement. 
It is typically used in conjugation with the WHERE clause to delete only those records that matches specific criteria or condition.

The basic syntax of the DELETE statement can be given with:
DELETE FROM table_name WHERE column_name=some_value
</pre>";

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM persons WHERE first_name='Xu'";

if(mysqli_query($link, $sql)){
	echo "Records were deleted successfully.";
} else{
	echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

mysqli_close($link);


?>