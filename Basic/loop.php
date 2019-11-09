<?php
//while — loops through a block of code until the condition is evaluate to true.
//do…while — the block of code executed once and then condition is evaluated. If the condition is true the statement is repeated as long as the specified condition is true.
//for — loops through a block of code until the counter reaches a specified number.
//foreach — loops through a block of code for each element in an array.
echo "<h1>Different Types of Loops in PHP</h2>";
echo "<pre>while — loops through a block of code until the condition is evaluate to true.
do…while — the block of code executed once and then condition is evaluated. If the condition is true the statement is repeated as long as the specified condition is true.
for — loops through a block of code until the counter reaches a specified number.
foreach — loops through a block of code for each element in an array.
</pre>";

echo "<h2>PHP while Loop</h2>";
echo "<pre>while(condition){
    // Code to be executed
}</pre>";
$i = 1;
while($i <= 3){
	$i++;
	echo "The number is " . $i . "<br>";
	}

echo "<h2>PHP do...while Loop</h2>";
echo "<pre>do{
    // Code to be executed
}
while(condition);
</pre>";
$i = 1;
do{
	$i++;
	echo "The number is " . $i . "<br>";
	}while($i <= 3);

echo "<h2>PHP for Loop</h2>";
echo "<pre>for(initialization; condition; increment){
    // Code to be executed
}</pre>";

for($i = 1; $i<=3; $i++){
	echo "The number is " . $i . "<br>";
	}

echo "<h2>PHP foreach Loop</h2>";
echo "<pre>foreach($array as $value){
    // Code to be executed
}
</pre>";

$colors = array("Red", "Green", "Blue");
foreach($colors as $value){
	echo $value . "<br>";
	}

echo "<br>There is more syntax of foreach loop, which is extension of the first.<br><br>";
$superhero = array(
	"name" => "Peter Parker",
	"email" => "peterparker@mail.com",
	"age" => 18
	);
	
foreach($superhero as $key => $value){
	echo $key . " : " . $value . "<br>";
	}
	

?>