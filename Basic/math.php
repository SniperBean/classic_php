<?php
//
echo "<h1>PHP MAth Operations</h2>";
echo "<h2>Find the Absolute Value of a Number</h2>";

echo "abs(5) is " . abs(5) . "<br>";
echo "abs(-5) is " . abs(-5) . "<br>";
echo "abs(4.2) is " . abs(4.2) . "<br>";
echo "abs(-4.2) is " . abs(-4.2) . "<br>";

echo "<h2>Round a Fractional Value Up or Down</h2>";
echo "Round fractions up<br>";
echo "ceil(4.2) is " . ceil(4.2) . "<br>";
echo "ceil(9.99) is " . ceil(9.99) . "<br>";
echo "ceil(-5.18) is " . ceil(-5.18) . "<br>";
echo "Round fractions down<br>";
echo "floor(4.2) is " . floor(4.2) . "<br>";
echo "floor(9.99) is " . floor(9.99) . "<br>";
echo "floor(-5.18) is " . floor(-5.18) . "<br>";

echo "<h2>Find the Square Root of a Number</h2>";
echo "sqrt(9) is " . sqrt(9) . "<br>";
echo "sqrt(25) is " . sqrt(25) . "<br>";
echo "sqrt(10) is " . sqrt(10) . "<br>";
echo "sqrt(-16) is " .sqrt(-16) . "<br>";

echo "<h2>Generate a Random Number</h2>";
echo "rand() without parameters " . rand() . "<br>";
echo "rand() without parameters " . rand() . "<br>";

echo "rand(1, 10) " . rand(1, 10) . "<br>";
echo "rand(1, 10) " . rand(1, 10) . "<br>";
echo "<pre>If rand() function is called without the optional min, max arguments, it returns a pseudo-random number between 0 and getrandmax(). 
The getrandmax() function show the largest possible random value, which is only 32767 on Windows platform.
</pre>";

echo "<h2>Convert Decimal Numbers to Binary and Vice Versa</h2>";
echo "Convert Decimal to Binary<br>";
echo "decbin(2) is " . decbin(2) . "<br>";
echo "decbin(12) is " . decbin(12) . "<br>";
echo "decbin(100) is " . decbin(100) . "<br>";
echo "Convert Binary to Decimal<br>";
echo "bindec(10) is " . bindec(10) . "<br>";
echo "bindec(1100) is " . bindec(1100) . "<br>";
echo "bindec(1100100) is " . bindec(1100100) . "<br>";

echo "<h2>Convert Decimal Numbers to Hexadecimal and Vice Versa</h2>";
echo "Convert decimal to hecadecimal<br>";
echo "dechex(255) is " . dechex(255) . "<br>";
echo "dechex(196) is " . dechex(196) . "<br>";
echo "dechex(0) is " . dechex(0) . "<br>";
echo "Convert hexadecimal to decimal<br>";
echo "hexdec('ff') is " . hexdec('ff') . "<br>";
echo "hexdec('c4') is " . hexdec('c4') . "<br>";
echo "hexdec(0) is " . hexdec(0) . "<br>";

echo "<h2>Convert Decimal Numbers to Octal and Vice Versa</h2>";
echo "Convert decimal to octal<br>";
echo "decoct(12) is " . decoct(12) . "<br>";
echo "decoct(256) is " . decoct(256) . "<br>";
echo "decoct(77) is " . decoct(77) . "<br>";
echo "Convert octal to decimal<br>";
echo "octdec('14') is " . octdec('14') . "<br>";
echo "octdec('400') is " . octdec('400') . "<br>";
echo "octdec('115') is " . octdec('115') . "<br>";

echo "<h2>Convert a Number from One Base System to Another</h2>";
echo "The base_convert() function accepts three parameters: the number to convert, the base it's currently in, and the base it's to be converted to.<br>";
echo "base_convert('12', 10, 2) is " . base_convert('12', 10, 2) . "<br>";
echo "base_convert('1100', 2, 10) is " . base_convert('1100', 2, 10) . "<br>";
echo "base_convert('10889592', 10, 16) is " . base_convert('10889592', 10, 16) . "<br>";
echo "base_convert('a62978', 16, 10) is " . base_convert('a62978', 16, 10) . "<br>";

?>