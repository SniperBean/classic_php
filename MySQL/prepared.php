<?php
require_once("config.php");
echo"<pre>
A prepared statement (also known as parameterized statement) is simply a SQL query template containing placeholder instead of the actual parameter values. 
These placeholders will be replaced by the actual values at the time of execution of the statement.

MySQLi supports the use of anonymous positional placeholder (?), as shown below:
<strong>INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?);</strong>

<li><strong>Prepare</strong>
At the prepare stage a SQL statement template is created and sent to the database server. 
The server parses the statement template, performs a syntax check and query optimization, and stores it for later use.</li>
<li><strong>Execute</strong> 
During execute the parameter values are sent to the server. 
The server creates a statement from the statement template and these values to execute it.
</li>

\$sql = \"INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)\";

if(\$stmt = mysqli_prepare(\$link, \$sql)){
	//Bind variable to the prepared statement as parameters
	mysqli_stmt_bind_param(\$stmt, \"sss\", \$first_name, \$last_name, \$email);
		
	\$first_name = \"Hermione\";
	\$last_name = \"Granger\";
	\$email = \"hermionegranger@mail.com\";
	mysqli_stmt_execute(\$stmt);
}

</pre>";

echo "<h2>Explanation of Code (Procedural style)</h2>";
echo "<pre>
Inside the SQL INSERT statement (line no-12) of the example above, the question marks is used as the placeholders for the first_name, last_name, email fields values.

The mysqli_stmt_bind_param() function (line no-16) bind variables to the placeholders (?) in the SQL statement template. 
The placeholders (?) will be replaced by the actual values held in the variables at the time of execution. 
The type definition string provided as second argument i.e. the "sss" string specifies that the data type of each bind variable is string.

The type definition string specify the data types of the corresponding bind variables and contains one or more of the following four characters:
<li><strong>b</strong> — binary (such as image, PDF file, etc.)</li>
<li><strong>d</strong> — double (floating point number</li>
<li><strong>i</strong> — integer (whole number)</li>
<li><strong>s</strong> — string (text)</li>
</pre>";

$link = mysqli_connect($hostname, $username, $password, $database);

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
	//Bind variable to the prepared statement as parameters
	mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
		
	$first_name = "Hermione";
	$last_name = "Granger";
	$email = "hermionegranger@mail.com";
	mysqli_stmt_execute($stmt);

	$first_name = "Ron";
	$last_name = "Weasley";
	$email = "ronweasley@mail.com";
	mysqli_stmt_execute($stmt);
	
    echo "Records inserted successfully.";
} else{
	echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}

mysqli_stmt_close($stmt);

mysqli_close($link);


?>