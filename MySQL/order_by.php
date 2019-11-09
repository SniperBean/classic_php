<?php
require_once("config.php");

$link = mysqli_connect($hostname, $username, $password, $database);

echo "<h2>Ordering the Result Set</h2>";
echo "<pre>
The ORDER BY clause can be used in conjugation with the SELECT statement to see the data from a table ordered by a specific field. 
The ORDER BY clause lets you define the field name to sort against and the sort direction either ascending or descending.

The basic syntax of this clause can be given with:
SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC

</pre>";

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM persons ORDER BY first_name";

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