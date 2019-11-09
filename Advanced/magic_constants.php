<?php
namespace MyNamespace;
echo "<h2>What is Magic Constants</h2>";
echo "<pre>PHP moreover also provide a set of special predefined constants that change depending on where they are used.
These constants are called magic constants.
Magic constants begin with two underscores and end with two underscores.
For example, the value of __LINE__ depends on the line that it's used on in your script.
</pre>";
echo "<h2>__LINE__</h2>";
echo "Line number " . __LINE__ . "<br>";
echo "Line number " . __LINE__ . "<br>";
echo "Line number " . __LINE__ . "<br>";

echo "<h2>__FILE__</h2>";
echo "The full path of this file is: " . __FILE__;

echo "<h2>__DIR__</h2>";
echo "The directory of this file is: " . __DIR__;

echo "<h2>__FUNCTION__</h2>";
function myFunction(){
	echo "The function name is - " . __FUNCTION__;
}
myfunction();

echo "<h2>__CLASS__</h2>";
class MyClass
{
	public function getClassName(){
		return __CLASS__;	
	}
}
$obj = new MyClass();
echo $obj->getClassName();

echo "<h2>__METHOD__</h2>";
class Sample
{
	public function myMethod(){
		echo __METHOD__;	
	}
}

$obj = new Sample();
$obj->myMethod();

echo "<h2>__NAMESPACE__</h2>";

class otherClass
{
	public function getNamespace(){
		return __NAMESPACE__;	
	}
}


$obj = new otherClass();
echo $obj->getNamespace();

?>




