<?php
//
echo "<h1>PHP Sorting Arrays</h1>";
echo "<h2>PHP Function For Soring Arrays</h2>";
//sort() and rsort() — For sorting indexed arrays
//asort() and arsort() — For sorting associative arrays by value
//ksort() and krsort() — For sorting associative arrays by key
echo "<pre>sort() and rsort() — For sorting indexed arrays
asort() and arsort() — For sorting associative arrays by value
ksort() and krsort() — For sorting associative arrays by key
</pre>";

echo "<h2>Sorting Indexed Arrays in Ascending Order</h2>";
$colors = array("Red", "Green", "Blue", "Yellow");

print_r($colors);
sort($colors);
echo "<br>Sorted by sort() function<br>";
print_r($colors);

echo "<br><br>In other example<br>";
$numbers = array(10, 2.5, 7, 4, 1, 2);
print_r($numbers);
sort($numbers);
echo "<br>Sorted by sort() function<br>";
print_r($numbers);

echo "<h2>Sorting Indexed Arrays in Descending Order</h2>";
$colors = array("Red", "Green", "Blue", "Yellow");
print_r($colors);
echo "<br>Sorted by rsort() function<br>";
rsort($colors);
print_r($colors);

echo "<br><br>In other example<br>";
$numbers = array(10, 2.5, 7, 4, 1, 2);
print_r($numbers);
rsort($numbers);
echo "<br>Sorted by rsort() function<br>";
print_r($numbers);


echo "<h2>Sorting Associative Arrays in Ascending/Decending Order By Value</h2>";
//明明是依照value,變數他媽命名成asort幹嘛
$age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);
print_r($age);
echo "<br>Sorted by asort() function<br>";
asort($age);
print_r($age);
echo "<br>Sorted by asort() function<br>";
arsort($age);
print_r($age);

echo "<h2>Sorting Associative Arrays in Ascending/Decending Order By Key</h2>";
$age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);
print_r($age);
echo "<br>Sorted by ksort() function<br>";
ksort($age);
print_r($age);
echo "<br>Sorted by krsort() function<br>";
krsort($age);
print_r($age);

?>