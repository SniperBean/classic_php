<!DOCTYPE html>
<html lang="en">
<head>
	<title>Example of PHP GET method</title>
</head>

<body>

<?php
if(isset($_REQUEST["name"])){
	echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
	}
//You could change method from form to decide get or post, and you don't need to change $_REQUEST Variable
?>

<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
	<label for="inputNmae">Name:</label>
	<input type="text" name="name" id="inputName">
	<input type="submit" value="Submit">
</form>
</body>
