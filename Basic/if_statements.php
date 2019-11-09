<?php
//
echo "<h2>if..elseif...else Statement</h2>";
echo "if Statement<br>";
$d = date("D");
echo "d = $d, if(d == Tue) do something<br>";
if($d == "Tue"){
	echo "Have a nice day =)<br>";
	}

echo "<br>if...else Satatement<br>";
$d = date("D");
echo "d = $d, if(d == Fri) do something. if not, do anything else<br>"; 
if($d == "Fri"){
	echo "have a nice day =)";
	} else{
	echo "Today is not Friday!";
	}

echo "<br>if...elseif...else Statement<br>";
$d = date("D");
echo "d = $d, if(d == Fri) do something. elseif($d == Sun) do other thing. if not all above them, do anything else<br>";
if($d == "Fri"){
	echo "Have a nice weekend!";
	}elseif($d == "Sun"){
	echo "Have a nice Sunday!";
	}else{
	echo "You are slaver!!!";
	}
	
echo "<h2>The Ternary Operator</h2>";

echo "<pre>if(\$age < 18){
	echo 'Child';
	} else{
	echo 'Adult';
	}
	
	Using the ternary operator the same code could be written in a more compact way:
	echo (\$age < 18) ? 'Child' : 'Adult';
	</pre>";

$age = 32;
echo "age = $age <br> So he/she is a";
echo ($age < 18) ? ' Child' : 'n Adult';

echo "<h2>The Null Coalescing Operator</h2>";
$name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
echo "<pre>\$name = isset(\$_GET['name']) ? \$_GET['name'] : 'anonymous';</pre>";
echo "name = $name";
echo "<pre>You can also use the null coalescing operator the same code could be written as:
\$name = \$_GET['name'] ?? 'anonymous';
</pre>";
$name = $_GET['name'] ?? 'anonymous';
echo "name = $name";

?>