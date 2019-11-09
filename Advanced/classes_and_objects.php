<?php
echo "<h2>Understanding Classes and Objects</h2>";
echo "<pre>
A class acts as a template or blueprint from which lots of individual objects can be created.
When individual object are created, they inherit the same generic properties and behaviors, although each object may have different values for certain properties. 
</pre>";

require "class/Rectangle.php";

$obj = new Rectangle;

echo "initial object length: " . $obj -> length . "<br>";
echo "initial object width: " . $obj -> width . "<br>";

$obj->length = 30;
$obj->width = 20;

echo "initial object length: " . $obj->length . "<br>";
echo "initial object width: " . $obj->width . "<br>";

echo "object perimeter: " . $obj->getPerimeter() . "<br>";
echo "object area: " . $obj->getArea() . "<br>";

echo "<h2>Using Constructors and Destructors</h2>";
echo "<pre>
To make the object-oriented programming easier, PHP provides some magic method that are executed automatically when certain actions occur within an object.
For example:
__construct() is executed automatically whenever a new object is created.
__destruct() is  executed automatically when the object is destroyed. 
</pre>";

class MyClass
{
	public function __construct(){
		echo 'The class "' . __CLASS__ . '" was initiated!<br>';	
	}
	
	public function __destruct(){
			echo 'The class "' . __CLASS__ . '" was destroyed!<br>';	
	}
}

$obj = new MyClass;
unset($obj);
echo "The end of the file is reached.<br>";

echo "<pre>You don't need to use unset() function, PHP will destroy your object automatically.

\$obj = new MyClass;
echo \"The end of the file is reached.<br>\";

The result will be:

The class \"MyClass\" was initiated!
The end of the file is reached.
The class \"MyClass\" was destroyed!
</pre>";

echo "<h2>Extending Classes through Inheritance</h2>";
echo "<pre>
Classes can inherit the properties and method of another class using the <strong>extends</strong> keyword.
ex 1:
class Square extends Rectangle{
	do something...
}
</pre>";

class Square extends Rectangle
{
	public function isSquare(){
		if($this->length == $this->width)
		{
			return true;		
		}	else{
			return false;		
		}
	}
}

$obj = new Square;

$obj->length = 20;
$obj->width = 20;
if($obj->isSquare()){
	echo "The area of the square is ";
} else{
	echo "The area of the rectangle is ";
}
echo $obj ->getArea();

echo "<h2>Controlling the Visibility of Properties and Methods</h2>";
echo "<pre>
When working with classes, you can even restrict access to its properties and methods using the visibility keywords for greater control. 
There are three visibility keywords: public, protected, private, which determines how and from where properties and methods can be accessed and modified.

<li><strong>public</strong> — A public property or method can be accessed anywhere, from within the class and outside. This is the default visibility for all class members in PHP.</li>
<li><strong>protected</strong> — A protected property or method can only be accessed from within the class itself or in child or inherited classes i.e. classes that extends that class.</li>
<li><strong>private</strong> — A private property or method is accessible only from within the class that defines it. Even child or inherited classes cannot access private properties or methods.</li>

ex 2:

class Automobile
{
	public \$fuel;
	protected \$engine;
	private \$transmission;
}

class Car extends Automobile
{
	public function __construct(){
		echo 'The class \"' . __CLASS__ . '\" was initiated!< br>';	
	}
}

\$automobile = new Automobile;

\$automobile->fuel = 'Petrol';
\$automobile->engine = '1500 cc';
\$automobile->transmission = 'Manual';

\$car = new car;

\$car->fuel = 'Diesel';
\$car->engine = '2200 cc';
\$car->transmission = 'Automatic';

</pre>";

echo "<h2>Static Properties and Method</h2>";
echo "<pre>
In addition to the visibility, properties and methods can also be declared as static, which makes them accessible without needing an instantiation of the class.
Static properties and methods can be accessed using the scope resolution operator (::), like this: 
ClassName::\$property and ClassName::method().
</pre>";

class HelloClass
{
	public static $greeting = "Hello world!<br>";
	
	public static function sayHello(){
		echo self::$greeting;	
	}
}

echo HelloClass::$greeting;
HelloClass::sayHello();

$hello = new HelloClass;
echo $hello->greeting;
$hello->sayHello();

?>








