<?php
	echo "<h2>What is JSON</h2>";
	echo "<pre>
	JSON stands for <strong>J</strong>ava<strong>S</strong>cript <strong>O</strong>bject <strong>N</strong>otation.
	JSON is a standard lightweight data interchange format which is quick and easy to parse and generate.
	JSON is based on two basic structures:
	<li><strong>Object:</strong> This is defined as a collection of key/value pairs (i.e. key:value). 
	Each object begins with a left curly bracket { and ends with a right curly bracket }. 
	Multiple key/value pairs are separated by a comma ,.
	</li><li><strong>Array: </strong> This is defined as an ordered list of values. 
	An array begins with a left bracket [ and ends with a right bracket ]. 
	Values are separated by a comma ,.
	</li>
	
	In JSON, key are always strings, while the value can be a string, number, true or false, null or even an object or an array.
	String must be enclosed in double quotes \" and can contain escape charaters such as \\n, \\t and \\.
	A Jason may look like this:
	
	{
		\"book\":{
				\"name\": \"Harry Potter and the Goblet of Fire\",
				\"author\": \"J. K. Rowling\",
				\"year\": 2000,
				\"genre\": \"Fantasy Fiction\",
				\"bestseller\": true		
		}	
	}
	
	Whereas an example of JSON array would look something like this:
	
	{
		\"fruits\": [
			\"Apple\",
			\"Banana\",
			\"Strawberry\",
			\"Mango\"		
		]	
	}
	</pre>";
	
	echo "<h2>Parsing JSON with PHP</h2>";
	echo "<pre>
	JSON data structures are very similar to PHP arrays.
	PHP has built-in functions to encode and decode JSON data.
	These function are <strong>json_encode()</strong> and <strong>json_decode()</strong>.
	Both functions only works with UTF-8 encode string data.
	</pre>";
	
	echo "<h2>Encoding JSON Data in PHP</h2>";
	echo "<pre>In PHP the json_encode() function is used to encode a value to JSON format.
	The value being encoded can be any PHP data type except a resource, like a database or file handle.
	The below example demonstrates how to encode a PHP associative array into a JSON object:
	
	\$marks = array(\"Peter\"=>65, \"Harry\"=>80, \"John\"=>78, \"Clark\"=>90);
	echo json_encode(\$marks);
	
	or
		
	\$colors = array(\"Red\", \"Green\", \"Blue\", \"Orange\", \"Yellow\");
	echo json_encode(\$colors);
	
	You can also force json_encode() function to return an PHP indexed array as JSON object by using the JSON_FORCE_OBJECT option.
	
	\$colors = array(\"Red\", \"Green\", \"Blue\", \"Orange\", \"Yellow\");
	echo json_encode(\$colors, JSON_FORCE_OBJECT);
	</pre>"; 
	
	$marks = array("Peter"=>65, "Harry"=>80, "John"=>78, "Clark"=>90);
	echo json_encode($marks);
	echo "<br>";
	
	$colors = array("Red", "Green", "Blue", "Orange", "Yellow");
	echo json_encode($colors);
	echo "<br>";
	echo json_encode($colors, JSON_FORCE_OBJECT);
	echo "<br>";
	
	echo "<h2>Decoding JSON Data in PHP</h2>";
	echo "<pre>
	\$json = '{\"Peter\":65, \"Harr\":80, \"John\":78, \"Clark\":90}';
	var_dump(json_decode(\$json));
	
	By default the json_decode() function returns an object. 
	However, you can optionally specify a second parameter \$assoc which accepts a boolean value that when set as true JSON objects are decoded into associative arrays. 
	It is false by default. 
	Here's an example:
	
	\$json = '{\"Peter\":65, \"Harr\":80, \"John\":78, \"Clark\":90}';
	var_dump(json_decode(\$json, true));
	</pre>";
	$json = '{"Peter":65, "Harry":80, "John":78, "Clark":90}';
	var_dump(json_decode($json));
	echo "<br><br>";
	var_dump(json_decode($json, true));
	
	echo "<pre>
	Let's check out an example that will show you how to decode the JSON data and access individual elements of the JSON object or array in PHP.
	\$json = '{\"Peter\":65, \"Harr\":80, \"John\":78, \"Clark\":90}';
	\$arr = json_decode(\$json, true);
	
	foreach(\$arr as \$key=>\$value){
		echo \$key . \"=>\" . \$value . \"<br>\";	
	}
	
	\$obj = json_decode(\$json,);
	
	foreach(\$arr as \$key=>\$value){
		echo \$key . \"=>\" . \$value . \"<br>\";	
	}
	</pre>";
	
	$arr = json_decode($json, true);
	foreach($arr as $key=>$value){
		echo $key . "=>" . $value . "<br>";	
	}
	echo "<hr>";
	$obj = json_decode($json);
	foreach($obj as $key=>$value){
		echo $key . "=>" . $value . "<br>";	
	}
	
	echo "<h2>Extracting Values from Nested JSON Data in PHP</h2>";
	echo "<pre>
	JSON objects and arrays can also be nested. A JSON object can arbitrarily contains other JSON objects, arrays, nested arrays, arrays of JSON objects, and so on. 
	</pre>";
	
	function printValues($arr){
		global $count;
		global $values;
		
		if(!is_array($arr))
		{
			die("ERROR: Input is not an array");		
		}
		
		foreach($arr as $key=>$value)	{
			if(is_array($value)){
				printValues($value);			
			} else {
				$values[] = $value;
				$count++;			
			}
		}
		
		return array('total' => $count, 'values' => $values);
	}
	
	$json = '{
    "book": {
        "name": "Harry Potter and the Goblet of Fire",
        "author": "J. K. Rowling",
        "year": 2000,
        "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
        "genre": "Fantasy Fiction",
        "price": {
            "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
        }
    }
}';

$arr = json_decode($json, true);

$result = printValues($arr);
echo "<h3>" . $result["total"] . " value(s) found: </h3>";
echo implode("<br>", $result["values"]);
 
echo "<hr>";
 
echo $arr["book"]["author"] . "<br>";  
echo $arr["book"]["characters"][0] . "<br>";  
echo $arr["book"]["price"]["hardcover"] . "<br>";
?>








