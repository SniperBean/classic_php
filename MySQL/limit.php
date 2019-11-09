<?php
require_once("config.php");

$link = mysqli_connect($hostname, $username, $password, $database);

echo "<h2>Limiting Result Sets</h2>";
echo "<pre>
The LIMIT clause is used to constrain the number of rows returned by the SELECT statement. 
This feature is very helpful for optimizing the page loading time as well as to enhance the readability of a website. 

The basic syntax of the LIMIT clause can be given with:
SELECT column_name(s) FROM table_name LIMIT row_offset, row_count;

The LIMIT clause accepts one or two parameters which must be a nonnegative integer:
<li>
When two parameters are specified, the first parameter specifies the offset of the first row to return.
i.e. the starting point, whereas the second parameter specifies the number of rows to return. 
The offset of the first row is 0 (not 1).
</li>
<li>
Whereas, when only one parameter is given, it specifies the maximum number of rows to return from the beginning of the result set.
</li>
</pre>";

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM persons LIMIT 5";

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