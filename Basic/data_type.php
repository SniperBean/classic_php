<?php
//The values assigned to a PHP variable may be of different data types including simple string and numeric types to more complex data types like arrays and objects.
//PHP supports total eight primitive data types: 
//					Integer, Floating point number or Float, String, Booleans, Array, Object, resource and NULL.

echo "<h2>PHP Interger</h2>";
$a = 123; // decimal number;
var_dump($a);
echo "<br>";

$b = -123; // a negative number
var_dump($b);
echo "<br>";

$c = 0x1A; // hexadecimal number
var_dump($c);
echo "<br>";

$d = 0123;
var_dump($d);
echo "<br>";

echo "<h2>PHP Strings</h2>";
$a = 'Hello World!';
echo $a;
echo "<br>";

$b = "Hello World!";
echo $b;
echo "<br>";

$c = "Stay here, I'll be back.";
echo $c;
echo "<br>";

echo "<h2>PHP Floating and Doubles</h2>";
$a = 1.234;
var_dump($a);
echo "<br>";

$b = 10.2e3;
var_dump($b);
echo "<br>";

$c = 4E-10;
var_dump($c);
echo "<br>";

echo "<h2>PHP Booleans</h2>";
$show_error = true;
var_dump($show_error);
echo "<br>";
$show_error = false;
var_dump($show_error);
echo "<br>";

echo "<h2>PHP Arrays</h2>";
$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo "<br>";

$colors_codes = array(
	"Red" => "#ff0000",
	"Green" => "#00ff00",
	"Blue" => "#0000ff"
	);
var_dump($colors_codes);
echo "<br>";

echo "<h2>PHP Objects</h2>";
class greeting{
	public $str = "Hello World!";
	
	function show_greeting(){
	echo $this->str;
	}
}

$message = new greeting;
var_dump($message);
echo "<br>";
echo $message->str;
echo "<br>";

echo "<h2>PHP NULL</h2>";
$a = NULL;
var_dump($a);
echo "<br>";

$b = "Hello World!";
$b = NULL;
var_dump($b);
echo "<br>";

echo "<h2>PHP Resources</h2>";
$handle = fopen("note.txt", "r");
var_dump($handle);
echo "<br>";
echo $handle;
echo "<br>";

$link = mysql_connect("localhots", "root", "");
var_dump($link);
?>