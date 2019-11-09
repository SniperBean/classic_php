<?php
require_once("config.php");

$link = mysqli_connect($hostname, $username, $password, $database);

echo "<h2>Select</h2>";
echo "<pre>
The SQL SELECT statement is used to select the records from database tables. 
Its basic syntax is as follows:
SELECT column1_name, column2_name, columnN_name FROM table_name;

<strong>Explanation of Code (Procedural style)</strong>
In the example above, the data returned by the mysqli_query() function is stored in the $result variable. 
Each time mysqli_fetch_array() is invoked, it returns the next row from the result set as an array. 
The while loop is used to loops through all the rows in the result set. Finally the value of individual field can be accessed from the row either by passing the field index or field name to the $row variable like \$row['id'] or \$row[0], \$row['first_name'] or \$row[1], \$row['last_name'] or \$row[2], and \$row['email'] or \$row[3].

If you want to use the for loop you can obtain the loop counter value or the number of rows returned by the query by passing the $result variable to the mysqli_num_rows() function. 
This loop counter value determines how many times the loop should run.
</pre>";

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM persons";

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