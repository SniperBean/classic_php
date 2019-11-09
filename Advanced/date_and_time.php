<?php
//The PHP date() function convert a timestamp to more readable date and time.
//date(format, timestamp)
//The PHP date() function return the current date and time according to the built-in clock of the web server on which the script has been excuted.

echo "<h2>The PHP Date() Funciton</h2>";
echo "<pre>date(formate, timestamp)
	like \$today = date(\"d/m/Y\");
</pre>";
$today = date("d/m/Y");
echo "Today is " . $today;

echo "<h2>formatting the Dates and Times with PHP</h2>";
//The format parameter of the date() function is in fact a string that can contain multiple charaters
echo "<pre>
d - Represent day of the month; two digits with leading zeros (01 or 31)
D - Represent day of the week in text as an abbreviation (Mon to Sun)
m - Represent month in numbers with leading zeros (01 or 12)
M - Represent month in text, abbreviated (Jan to Dec)
F - Represent month in text, unabbreviated (January to December)
y - Represent year in two digits (08 or 14)
Y - Represent year in four digits (2008 or 2014)

The part of the date can be separated by inserting other chrarcters, like hyphens ( - ), dots ( . ), slashes ( / ),or spaces to add additonal visual formatring.
</pre>";

echo "date(\"d/m/Y\") is " . date("d/m/Y") . "<br>";
echo "date(\"d-m-Y\") is " . date("d-m-Y") . "<br>";
echo "date(\"d.m.Y\") is " . date("d.n.Y") . "<br>";
echo "<br>";

echo "<pre>
h - Represent hour in 12-hour format with leading zeros (01 to 12)
H - Represent hour in in 24-hour format with leading zeros (00 to 23)
i - Represent minutes with leading zeros (00 to 59)
s - Represent seconds with leading zeros (00 to 59)
a - Represent lowercase ante meridiem and post meridiem (am or pm)
A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)

The PHP code in the following example displays the date in different formats.
</pre>";

echo "date(\"h:i:s\") is " . date("h:i:s") . "<br>";
echo "date(\"F d, Y h:i:s A\") is " . date("F d, Y h:o:s A") . "<br>";
echo "date(\"h:i a\") is " . date("h:i a") . "<br>";

echo "<h2>The PHP time() Function</h2>";
echo "<pre>The time() function is used to get the current time as a Unix timestamp(the number of seconds since the beginning of the Uniux epoch: January 1 1970 00:00:00 GMT).</pre>";
$timestamp = time();
echo($timestamp);

echo "<pre>We can convert this timestamp to a human readable date through passing it to the previously introduce are() function.</pre>";
$timestamp = 1394003958;
echo "timestammp = $timestamp   =>   " . date("F d, Y h:i:s", $timestamp);

echo "<h2>The PHP mktime() Function</h2>";
echo "<pre>The mktime() function is used to create the timestamp based on a specific date and time. 
If no date time is provided, the timestamp for the current date and time is returned.

mktime(hour, minute, second, month, daty, year)
</pre>";

echo "mktime(15, 20, 12, 5, 10, 2014) is " . mktime(15, 20, 12, 5, 10, 2014) . "<br>";

echo "<pre>The mktime() function can be used to find the weekday name correspindding to a particular date.
To do this, simply use the 'I' (lowercase 'L')</pre>";
echo "date('l', mktime(0, 0, 0, 1, 4, 2014)) is " . date('l', mktime(0, 0, 0, 1, 4, 2014)) . "<br>";

echo "<pre>The mktime() function can also be used to find a particular date in future</pre>";
$futureDate = mktime(0,0,0,date("m")+30,date("d"),date("Y"));
echo "date(\"d/m/Y\" , $futureDate) is " .  date("d/m/Y" , $futureDate);

echo "<h2>Complete PHP Date Reference</h2>";
echo "Please check out the <a href=\"https://www.tutorialrepublic.com/php-reference/php-date-and-time-functions.php\"PHP Date/Time Functions</a> reference section.";
?>