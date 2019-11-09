<?php
//Variable names in PHP are case-sensitive. 
//As a result the variables $color, $Color and $COLOR are treated as three different variables.
	$color = "blue";
	echo "<h2>Variable name is case-sensitive</h2>";
	echo "The color of the sky is " . $color . "<br>";
	echo "The color of the sky is " . $Color . "<br>";
	echo "The color of the sky is " . $COLOR . "<br>";
	
//However the key world, function and classes name are  "case-insensitive".
	echo "<h2>The key world, function and classes name are  case-insensitive is case-sensitive</h2>";
	echo gettype($color) . "<br>";
	echo GETTYPE($color) . "<br>";
	echo GeTtyPe($color) . "<br>";
?>