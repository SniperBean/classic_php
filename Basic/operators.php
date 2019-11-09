<?php
//
echo "<h2>PHP Arithmetic Operators</h2>";
$x = 10;
$y = 4;
echo "x = " . $x . " " . "y = " . $y . "<br>";
echo "x + y = " . ($x + $y) . "<br>";
echo "x - y = " . ($x - $y) . "<br>";
echo "x * y = " . ($x * $y) . "<br>";
echo "x / y = " . ($x / $y) . "<br>";
echo "x % y = " . ($x % $y) . "<br>";

echo "<h2>PHP Assignment Operators</h2>";
$x = 50;
echo "make x = 50 : " . $x . "<br>";
$x /= 10;
echo "x /= 10 -> " . $x . "<br>";
$x = 100;
$x %= 15;
echo "x %= 15 -> " . $x . "<br>";

echo "<h2>PHP Comparison Operators</h2>";
$x = 25;
$y = 35;
$z = "25";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
var_dump($z);
echo "<br>" . "<br>";

echo "x == z -> ";
var_dump($x == $z);
echo "<br>" . "x === z -> ";
var_dump($x === $z);
echo "<br>" . "x != z -> ";
var_dump($x != $z);
echo "<br>" . "x !== z -> ";
var_dump($x !== $z);
echo "<br>" . "x < y -> ";
var_dump($x < $y);
echo "<br>" . "x > y -> ";
var_dump($x > $y);
echo "<br>" . "x <= y -> ";
var_dump($x <= $y);
echo "<br>" . "x >= y -> ";
var_dump($x >= $y);


echo "<h2>PHP Incrementing and Decrementing Operators</h2>";
$x = 10;
echo "x = $x <br><br>";

echo "++x" . "<br>";
echo ++$x . "<br>";
echo $x . "<br>" . "<br>";

$x = 10;
echo "x++" . "<br>";
echo $x++ . "<br>";
echo $x . "<br>" . "<br>";

$x = 10;
echo "--x" . "<br>";
echo --$x . "<br>";
echo $x . "<br>" . "<br>";

$x = 10;
echo "x--" . "<br>";
echo $x-- . "<br>";
echo $x . "<br>" . "<br>";

echo "<h2>PHP Logical Operators</h2>";
$year = 2014;
if(($year % 400 == 0) || (($year % 100 != 0) && ($yaer % 4 == 0))){
	echo "$year is a leap for year.";
	} else{
	echo "year is not a leap for year.";
	}
	
echo "<h2>PHP String Operators</h2>";
$x = "Hello";
$y = "World";
echo $x . $y . "<br>";
$x .= $y;
echo $x;

echo "<h2>PHP Array Operators</h2>";
$x = array("a" => "Red", "b" => "Green", "c" => "Blue");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
$z = $x + $y;
var_dump($z);
echo "<br>x == y -> ";
var_dump($x == $y);
echo "<br>x === y -> ";
var_dump($x === $y);
echo "<br>x != y -> ";
var_dump($x != $y);
echo "<br>x <> y -> ";
var_dump($x <> $y);
echo "<br>x !== y -> ";
var_dump($x !== $y);

echo "<h2>PHP Spaceship Operator</h2>";

echo "1 <=> 1 -> ";
echo 1 <=> 1;
echo "<br>1 <=> 2 -> ";
echo 1 <=> 2;
echo "<br>2 <=> 1 -> ";
echo 2 <=> 1;

echo "<br>";

echo "<br>1.5 <=> 1.5 -> ";
echo 1.5 <=> 1.5;
echo "<br>1.5 <=> 2.5 -> ";
echo 1.5 <=> 2.5;
echo "<br>2.5 <=> 1.5 -> ";
echo 2.5 <=> 1.5;


echo "<br>";

echo "<br> \"x\" <=> \"x\" -> ";
echo "x" <=> "x";
echo "<br> \"x\" <=> \"y\" -> ";
echo "x" <=> "y";
echo "<br> \"y\" <=> \"x\" -> ";
echo "y" <=> "x";
echo "<br>";


	

?>