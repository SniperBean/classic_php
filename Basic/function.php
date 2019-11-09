<?php
//
echo "<h2>Creating and Invoking Functions</h2>";
echo "<pre>function functionName(){
    // Code to be executed
}
</pre>";
function whatIsToday(){
	echo "Today is " . date('l', mktime());
	}

whatIsToday();

echo "<h2>Functions with Parameters</h2>";
echo "<pre>function myFunc($oneParameter, $anotherParameter){
	//Code to be executed
	}
</pre>";

function getSum($num1, $num2){
	$sum = $num1 + $num2;
	echo "Sum of the two numbers $num1 and $num2 is : $sum";
	}

getSum(10, 20);

echo "<h2>Functions with Optional Parameters and Default Values</h2>";
echo "<pre>function myFunc($Parameter = default){
	//Code to be executed
	}
</pre>";
function customFont($font, $size=1.5){
	echo "<p style=\"font-family: $font; font-size:
	{$size}em;\">Hello, World</p>";
	}
	
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier");

echo "<h2>Returning Values from a Function</h2>";
echo "<pre>function myFunc($oneParameter, $anotherParameter){
	//Code to be executed
	return $value;
	}
</pre>";
function getSumReturn($num1, $num2){
	$total = $num1 + $num2;
	return $total;
	}

echo getSumReturn(5, 10);

echo "<br><br>A function can not return multiple values. Hoever, you can return an array instead.<br><br>";

function divideNumbers($dividend, $divisor){
	$quotient = $dividend / $divisor;
	$array = array($dividend, $divisor, $quotient);
	return $array;
	}
	
list($dividend, $divisor, $quotient) = divideNumbers(10, 2);
$array = divideNumbers(10,2);
var_dump($array);
echo "<br>";
echo "dividend in list is " . $dividend . "<br>";
echo "divisor in list is " . $divisor . "<br>";
echo "quotient in list is " . $quotient . "<br>";
echo "<br><br>";
echo "dividend in array is " . $array[0] . "<br>";
echo "divisor in array is " . $array[1] . "<br>";
echo "quotient in array is " . $array[2] . "<br>";

echo "<h2>Passing Arguments to a Function by Reference</h2>";

function selfMultiply(&$number){
	$number *= $number;
	return $number;
	}
	
$mynum = 5;
echo $mynum;
echo "<br>Through the function by Reference<br>";
selfMultiply($mynum);
echo $mynum;

echo "<h2>The global Keyword</h2>";
echo "<pre>\$greet = \"Hello World!\";

function test(){
	global \$greet;
	echo \$greet;
	}
test();
echo \$greet;

$greet = \"Goodbye\";
test();
echo \$greet;
</pre>";
$greet = "Hello World!";

function test(){
	global $greet;
	echo $greet;
	}
test();
echo $greet;

$greet = "Goodbye";
test();
echo $greet;

echo "<h2>Creating Recursive Functions</h2>";
function printValues($arr){
	global $count;
	global $items;
	
	if(!is_array($arr)){
		die("ERROR: Input is not an array");
		}
	foreach($arr as $a){
		if(is_array($a)){
			printValues($a);
			} else{
			$items[] = $a;
			$count++;
			}
		}
		
		return array('total' => $count, 'values' => $items);
	}

$species = array(
	"birds" => array(
		"Eagle",
		"Parrot",
		"Swan"
	),
	"mammals" => array(
		"Human",
		"cant" =>array(
			"Lion",
			"Tiger",
			"Jaguar"
		),
		"Elephant",
		"Monley"
	),
	"reptiles" => array(
		"snake" => array(
			"Cobra" => array(
				"King Cobra",
				"Egyptian Cobra"
			),
			"Viper",
			"Anaconda"
		),
		"Crocodile",
		"Dinosaur" => array(
			"T-rex",
			"Alamosaurus"
		)
	)
);

$result = printValues($species);
echo $result['total'] . ' value(s) found: ';
echo implode(', ', $result['values']);
