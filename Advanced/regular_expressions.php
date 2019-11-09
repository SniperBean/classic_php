<?php
echo "<h2>What is Regular Expression</h2>";
echo "<pre>
 Regular Expressions, commonly known as \regex\" or \"RegExp\", are a specially formatted text strings used to find patterns in text.
 Regular expressions are one of the most powerful tools available today for effective and efficient text processing and manipulations. 
 For example, it can be used to verify whether the format of data i.e. name, email, phone number, etc. 
 PHP supports Perl style regular expressions via its preg_ family of functions. 
 
<table>
						<thead>
							<tr>
								<th>Function</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>preg_match()</code></td>
								<td>Perform a regular expression match.</td>
							</tr>
							<tr>
								<td><code>preg_match_all</code></td>
								<td>Perform a global regular expression match.</td>
							</tr>							
							<tr>
								<td><code>preg_replace()</code></td>
								<td>Perform a regular expression search and replace.</td>
							</tr>
							<tr>
								<td><code>preg_grep()</code></td>
								<td>Returns the elements of the input array that matched the pattern.</td>
							</tr>
							<tr>
								<td><code>preg_split()</code></td>
								<td>Splits up a string into substrings using a regular expression.</td>
							</tr>
							<tr>
								<td><code>preg_quote()</code></td>
								<td>Quote regular expression characters found within a string.</td>
							</tr>
						</tbody>
					</table>
</pre>";

echo "<h2>Regular Expression Syntax</h2>";
echo "<pre>
Regular expression syntax includes the use of special characters.
The characters that are given special meaning within a regular expression, are: <strong> . * ? + [ ] ( ) { } ^ $ | \\</strong>.
ou will need to backslash these characters whenever you want to use them literally. 
For example, if you want to match \".\", you'd have to write \\.
</pre>";

echo "<h2>Character Classes</h2>";
echo "<pre>
 Square brackets surrounding a pattern of characters are called a character class e.g. [abc].
 A character class always matches a single character out of a list of specified characters that means the expression [abc] matches only a, b or c character.
 You can also define a range of characters by using the hyphen (-) character inside a character class, like [0-9]. Let's look at some examples of character classes:
 
 <table>
						<thead>
							<tr>
								<th>RegExp</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>[abc]</code></td>
								<td>Matches any one of the characters a, b, or c.</td>
							</tr>
							<tr>
								<td><code>[^abc]</code></td>
								<td>Matches any one character other than a, b, or c.</td>
							</tr>
							<tr>
								<td><code>[a-z]</code></td>
								<td>Matches any one character from lowercase a to lowercase z.</td>
							</tr>
							<tr>
								<td><code>[A-Z]</code></td>
								<td>Matches any one character from uppercase a to uppercase z.</td>
							</tr>
							<tr>
								<td><code>[a-Z]</code></td>
								<td>Matches any one character from lowercase a to uppercase Z.</td>
							</tr>
							<tr>
								<td><code>[0-9]</code></td>
								<td>Matches a single digit between 0 and 9.</td>
							</tr>
							<tr>
								<td><code>[a-z0-9]</code></td>
								<td>Matches a single character between a and z or between 0 and 9.</td>
							</tr>
						</tbody>
					</table>
					
The following example will show you how to find whether a pattern exists in a string or not using the regular expression and PHP preg_match() function:


\$pattern = \"/ca[k]e/\";
\$text = \"He was eating cake in the cafe.\";

if(preg_match(\$pattern, \$text)){
	echo \"Match found!\";
} else{
	echo \"Match not found.\";
}

\$pattern = \"/ca[kf]e/\";
\$text = \"He was eating cake in the cafe.\";
\$matches = preg_match_all(\$pattern, \$text, \$array);
echo \$matches . \" matches were found. < br>\";
print_r (\$array);

</pre>";

$pattern = "/ca[k]e/";
$text = "He was eating cake in the cafe.";

if(preg_match($pattern, $text)){
	echo "Match found!";
} else{
	echo "Match not found.";
}

echo "<br><br>";

$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found. <br>";
print_r ($array);

echo "<h2>Predefined Character Classes</h2>";
echo "<pre>
Some character classes such as digits, letters, and whitespaces are use so frequently that there are shortcut names for them.
The following table lists those predefined character classes:

<table>
						<thead>
							<tr>
								<th>Shortcut</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>.</code></td>
								<td>Matches any single character except newline <code>\n</code>.</td>
							</tr>
							<tr>
								<td><code>\d</code></td>
								<td>matches any digit character. Same as <code>[0-9]</code></td>
							</tr>
							<tr>
								<td><code>\D</code></td>
								<td>Matches any non-digit character. Same as <code>[^0-9]</code></td>
							</tr>
							<tr>
								<td><code>\s</code></td>
								<td>Matches any whitespace character (space, tab, newline or carriage return character). Same as <code>[ \t\n\r]</code></td>
							</tr>
							<tr>
								<td><code>\S</code></td>
								<td>Matches any non-whitespace character. Same as <code>[^ \t\n\r]</code></td>
							</tr>
							<tr>
								<td><code>\w</code></td>
								<td>Matches any word character (definned as a to z, A to Z,0 to 9, and the underscore). Same as <code>[a-zA-Z_0-9]</code></td>
							</tr>
							<tr>
								<td><code>\W</code></td>
								<td>Matches any non-word character. Same as <code>[^a-zA-Z_0-9]</code></td>
							</tr>
						</tbody>
					</table>
The following example will show you how to find and replace space with a hyphen character in a string using regular expression and PHP preg_replace() function:

\$pattern = \"/\\s/\";
\$replacement = \"-\";
\$text = \"Earth revolves around\\nthe\\tSun\";

echo preg_replace(\$pattern, \$replacement, \$text);
echo str_replace(\" \", \"-\", \$text);

</pre>";

$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around\nthe\tSun";

echo preg_replace($pattern, $replacement, $text);
echo "<br>";
echo str_replace(" ", "-", $text);

echo "<h2>Repetition Quantifiers</h2>";
echo "<pre>
<table>
						<thead>
							<tr>
								<th>RegExp</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>p+</code></td>
								<td>Matches one or more occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p*</code></td>
								<td>Matches zero or more occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p?</code></td>
								<td>Matches zero or one occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p{2}</code></td>
								<td>Matches exactly two occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p{2,3}</code></td>
								<td>Matches at least two occurrences of the letter p, but not more than three occurrences of the letter p.</td></tr>
							<tr>
								<td><code>p{2,}</code></td>
								<td>Matches two or more occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p{,3}</code></td>
								<td>Matches at most three occurrences of the letter p</td>
							</tr>
						</tbody>
					</table>
					
The regular expression in the following example will splits the string at comma, sequence of commas, whitespace, or combination thereof using the PHP preg_split() function:

\$pattern = \"/[\s,]+/\";
\$text = \"My favorite colors are red, green and blue\";
\$parts = preg_split(\$pattern, \$text);

foreach(\$parts as \$part){
	echo \$part . \"< br>\";
}
</pre>";

$pattern = "/[\s,]+/";
$text = "My favorite colors are red, green and blue";
$parts = preg_split($pattern, $text);

foreach($parts as $part){
	echo $part . "<br>";
}

echo "<h2>Position Anchors</h2>";
echo "<pre>
There are certain situations where you want to match the beginning or end of a line, word, or string.
To do this you can use anchors.
Two common anchors are caret (^) which represent the start of the string, and the dollar ($) sign which represent the end of the string.

<table>
						<thead>
							<tr>
								<th>RegExp</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>^p</code></td>
								<td>Matches the letter p at the beginning of a line.</td>
							</tr>
							<tr>
								<td><code>p$</code></td>
								<td>Matches the letter p at the end of a line.</td>
							</tr>
						</tbody>
					</table>

The regular expression in the following example will display only those names from the names array which start with the letter \"J\" using the PHP preg_grep() function:


\$pattern = \"/^J/\";
\$names = array(\"John Carter\", \"Clark Kent\", \"John Rambo\");
\$matches = preg_grep(\$pattern, \$names);

foreach(\$matches as \$match){
	echo \$match . \"< br>\";
}
</pre>";

$pattern = "/^J/";
$names = array("John Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);

foreach($matches as $match){
	echo $match . "<br>";
}

echo "<h2>Pattern Modifiers</h2>";
echo "<pre>
A pattern modifier allows you to control the way a pattern match is handled. 
modifiers are placed directly after the regular expression, for example, if you want to search for a pattern in a case-insensitive manner, you can use the i modifier, like this: 
/pattern/i. The following table lists some of the most commonly used pattern modifiers.

<table>
						<thead>
							<tr>
								<th>Modifier</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>i</code></td>
								<td>Makes the match case-insensitive manner.</td>
							</tr>
							<tr>
								<td><code>m</code></td>
								<td>Changes the behavior of <code>^</code> and <code>$</code> to match against a newline boundary (i.e. start or end of each line within a multiline string), instead of a string boundary.</td>
							</tr>
							<tr>
								<td><code>g</code></td>
								<td>Perform a global match i.e. finds all occurrences.</td>
							</tr>
							<tr>
								<td><code>o</code></td>
								<td>Evaluates the expression only once.</td>
							</tr>
							<tr>
								<td><code>s</code></td>
								<td>Changes the behavior of <code>.</code> (dot) to match all characters, including newlines.</td>
							</tr>
							<tr>
								<td><code>x</code></td>
								<td>Allows you to use whitespace and comments within a regular expression for clarity.</td>
							</tr>
						</tbody>
					</table>

\$pattern = \"/color/i\";
\$text = \"Color red is more visible than color blue in daylight.\";
\$matches = preg_match_all(\$pattern, \$text, $array);
echo \$matches . \" matches were found.\";

Similarly, the following example shows how to match at the beginning of every line in a multi-line string using ^ anchor and m modifier with PHP preg_match_all() function.

\$pattern = \"/^color/im\";
\$text = \"Color red is more visible than color blue in daylight.\";
\$matches = preg_match_all(\$pattern, \$text, $array);
echo \$matches . \" matches were found.\";

</pre>";

$pattern = "/color/i";
$text = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";

echo "<br>";

$pattern = "/^color/im";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";

echo "<h2>Word Boundaries</h2>";
echo "<pre>
A word boundary character ( \\b) helps you search for the words that begins and/or ends with a pattern.
For example, the regexp /\\bcar/ matches the words beginning with the pattern car, and would match cart, carrot, or cartoon, but would not match oscar.
Similarly, the regexp /car\\b/ matches the words ending with the pattern car, and would match scar, oscar, or supercar, but would not match cart.

</pre>";

$pattern = '/\bcar\w*/';
//if you want search the word ending with the pattern car, use /\w*car\b/
$replacement = '<b>$0</b>';
$text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.'; 
echo preg_replace($pattern, $replacement, $text);
?>







