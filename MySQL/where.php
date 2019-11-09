<?php
require_once("config.php");

$link = mysqli_connect($hostname, $username, $password, $database);

echo "<h2>Filtering the Records</h2>";
echo "<pre>
The WHERE clause is used to extract only those records that fulfill a specified condition.
The basic syntax of the WHERE clause can be given with:

SELECT column_name(s) FROM table_name WHERE column_name operator value
</pre>";

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM persons WHERE first_name = 'john'";

if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		echo "<table>";
			echo "<tr>";
				echo "<th>id</th>";
				echo "<th>first_name</th>";
				echo "<th>last_name</th>";
				echo "<th>email</th>";
			echo "</tr>";
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['id'] ."</td>";
			echo "<td>" . $row['first_name'] ."</td>";
			echo "<td>" . $row['last_name'] ."</td>";
			echo "<td>" . $row['email'] ."</td>";
		}
		echo "</table>";
	}
} else{
	echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

mysqli_close($link);


?>