<?php
//
echo "<h1>Types of Arrays in PHP</h1>";
echo "<h2>Indexed Arrays</h2>";
$colors = array("Red", "Green", "Blue");

$colors[0] = "Red";
$colors[1] = "Green";
$colors[2] = "Red";

echo "<pre>\$colors = array(\"Red\", \"Green\", \"Blue\");

or

\$colors[0] = \"Red\";
\$colors[1] = \"Green\";
\$colors[2] = \"Red\";
</pre>";
var_dump($colors);
echo "<br>";

echo "<br><h2>Associative Arrays</h2>";
$ages = array("Peter" => 22, "Clark" => 32, "John" => 28);
$ages["Peter"] = 22;
$ages["Clark"] = 32;
$ages["John"] = 28;
echo "<pre>\$ages = array(\"Peter\" => 22, \"Clark\" => 32, \"John\" => 28)

or

\$ages[\"Peter\"] = 22;
\$ages[\"Clark\"] = 32;
\$ages[\"John\"] = 28;
</pre>";
var_dump($ages);
echo "<br>";

echo "<h2>Multidimensional Arrays</h2>";
$contacts = array(
	array(
		"name" => "Peter Parker",
		"email" => "peterparker@mail.com",
		),
	array(
		"name" => "Clark Kent",
		"email" => "clarkkent@mail.com",
		),
	array(
		"name" => "Harry Potter",
		"email" => "harrypotter@mail.com"
		)
	);

echo "<pre>$contacts = array(
		array(
			\"name\" => \"Peter Parker\",
			\"email\" => \"peterparker@mail.com\",
			),
		array(
			\"name\" => \"Clark Kent\",
			\"email\" => \"clarkkent@mail.com\",
			),
		array(
			\"name\" => \"Harry Potter\",
			\"email\" => \"harrypotter@mail.com\"
			)
	);</pre>";
var_dump($contacts);
echo "<br><br>Peter Parker's Email-id is: " . $contacts[0]["email"];

echo "<h2>Viewing Array Structure and Values</h2>";
$cities = array("London", "Paris", "New York");
echo "<pre>
\$cities = array(\"London\", \"Paris\", \"New York\");
print_r($cities);
</pre>";
//The print_r() statement outputs the key an d the value for each element in the array.
print_r($cities);

?>