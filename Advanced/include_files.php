<?php
echo "<h2>Include a PHP File into Another PHP File</h2>";
echo "<pre> The basic syntax of the include() and require() statement can be given with:
	include(\"path/to/filename\"); -or- include include \"path/to/filename\";
	require(\"path/to/filename\"); -or- include require \"path/to/filename\";
</pre>";

include "dir/header.php";
include "dir/menu.php";
echo "<H4>Welcome to Our Website!</h4>";
echo "<p>Here you will find lots of useful information.</p>";
include "dir/footer.php";

echo "<h2>Difference Between include and require Statements</h2>";
echo "<pre>he only difference is — the include() statement will only generate a PHP warning but allow script execution to continue if the file to be included can't be found, whereas the require() statement will generate a fatal error and stops the script execution.
Tip: It is recommended to use the require() statement if you're including the library files or files containing the functions and configuration variables that are essential for running your application, such as database configuration file.
</pre>";

echo "<h2>The include_once and require_once Statements</h2>";
require "dir/my_functions.php";
multiplySelf(2); // Output: 4
echo "<br>";
//require "dir/my_functions.php";
//multiplySelf(5); // Does not excute
echo "<br>";
require_once "dir/my_functions.php";
multiplySelf(2); // Output: 4
echo "<br>";

multiplySelf(5); // Output: 4
echo "<br>";



?>