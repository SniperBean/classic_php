<?php
$txt = "Hello World!";
$num = 123456789;
$colors = array("Red", "Green", "Blue");

//The echo statement can output one or more strings. 
//The echo statement can display anything that can be displayed to the browser, such as string, numbers, variables values, the results of expressions etc.
echo "<h2>Echo statment</h2>";
echo "<h4>This is a simple heading.</h4>";
echo "<h4 style = 'color:red;'>This is heading with style.</h4>";

echo $txt;
echo "<br>";
echo $num;
echo "<br>";
echo $colors[0];

//The print statment only output one string
print "<h2>Print statment</h2>";
print "<h4>This is a simple heading</h4>";
print "<h4 style = 'color:red'>This is heading with style.</h4>";

print $txt;
print "<br>";
print $num;
print "<br>";
print $colors[0];
?>