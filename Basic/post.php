<!DOCTYPE html>
<html lang="en">
<head>
	<title>Example of PHP GET method</title>
</head>

<body>

<?php
if(isset($_POST["name"])){
	echo "<p>Hi, " . $_POST["name"] . "</p>";
	}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	<label for="inputNmae">Name:</label>
	<input type="text" name="name" id="inputName">
	<input type="submit" value="Submit">
</form>
</body>
