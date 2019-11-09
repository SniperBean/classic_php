<?php
/*
\n is replaced by the newline character
\r is replaced by the carriage-return character
\t is replaced by the tab character
\$ is replaced by the dollar sign itself ($)
\" is replaced by a single double-quote (")
\\ is replaced by a single backslash (\)
*/

echo "<h2>Echo different type of string</h2>";
$my_str = 'World';
echo "Hello, $my_str!<br>";			// Displays: Hello World!
echo 'Hello, $my_str!<br>';			// Displays: Hello, $my_str!

echo '<pre>Hello\tWorld!</pre>';	// Displays: Hello\tWorld!
echo "<pre>Hello\tWorld!</pre>";	// Displays: Hello   World!
echo 'I\'ll be back';				// Displays: I'll be back

echo "<h2>Calulating the Length of a String</h2>";
$my_str = 'Welcome to Tutorial Republic';
echo $my_str . "<br>";
echo strlen($my_str);

echo "<h2>Counting Number of Words in a String</h2>";
$my_str = 'The quick brown fox jumps over the lazy dog.';
echo $my_str . "<br>";
echo str_word_count($my_str);

echo "<h2>Replacing Text wihin Strings</h2>";
$my_str = 'If the facts do not fir the theory, change the facts.';
echo $my_str . "<br>";
echo str_replace("facts", "truth", $my_str) . "<br>";

//You can optionally pass the fourth argument to the str_replace() function to know how many time the string repacements was performed, like this.
$my_str = 'If the facts do not fir the theory, change the facts.';
str_replace("facts", "truth", $my_str, $count);
echo "The text was replaced $count times";

echo "<h2>Reversing a String</h2>";
$my_str = 'You can do anything, but not everthing.';
echo $my_str . "<br>";
echo strrev($my_str);
?>