<?php
echo "<h2>What is an Exception</h2>";
echo "<pre>
An exception is a signal that indicates some sort of exceptional event or error has occurred.
Exceptions can be caused due to various reasons, for example, database connection or query fails, file that you're trying to access doesn't exist, and so on.
As opposed to PHP's traditional error-handling system, exception handling is the object-oriented method for handling errors, which provides more controlled and flexible form of error reporting.
</pre>";

echo "<h2>Using Throw and Try...Catch Statements</h2>";
echo "<pre>
In exception-based approach, program code is written in a try block, an exception can be thrown using the throw statement when an exceptional event occurs during the execution of code in a try block. 
It is then caught and resolved by one or more catch blocks.
</pre>";

function dividision($dividend, $divisor){
	if($divisor == 0){
		throw new Exception('Division by Zero.');	
	} else{
		$quotient = $dividend / $divisor;
		echo "<p>$dividend / $divisor = $quotient</p>";	
	}
}

try{
	dividision(10, 2);
	dividision(30, -4);
	dividision(15, 0);
	
	echo '<p>All divisions performed successfully.</p>';
} catch(Exception $e){
	echo '<p>Caught exception: ' . $e->getMessage() . '</p>';
}

echo "<h2>Explanation of Code</h2>";
echo "<pre>
<li>The division() function in the example above checks if a divisor is equal to zero. If it is, an exception is thrown via PHP's throw statement. Otherwise this function perform the division using given numbers and display the result.</li>
<li>Later, the division() function is called within a try block with different arguments. If an exception is generated while executing the code within the try block, PHP stops execution at that point and attempt to find the corresponding catch block. If it is found, the code within that catch block is executed, if not, a fatal error is generated.</li>
<li>The catch block typically catch the exception thrown within the try block and creates an object (\$e) containing the exception information. The error message from this object can be retrieved using the Exception's getMessage() method.</li>

The PHP's Exception class also provides getCode(), getFile(), getLine() and getTraceAsString() methods that can be used to generate detailed debugging information.

</pre>";

error_reporting(0);

try{
	$file = "somefile.txt";
	$handle = fopen($file, "r");
	if(!$handle){
		throw new Exception("Cannot open the file!", 5);	
	}
	
	$content = fread($handle, filesize($file));
	if(!content){
		throw new Exception("Could not read file!", 10);	
	}
	
	fclose($handle);
} catch(Exception $e){
	echo "<h3>Caught Exception!</h3>";
	echo "<p>Error message: " . $e->getMessage() . "</p>";
	echo "<p>File: " . $e->getFile() . "</p>";
	echo "<p>Line: " . $e->getLine() . "</p>";
	echo "<p>Error code: " . $e->getCode() . "</p>";
	echo "<p>Trace: " . $e->getTraceAsString() . "</p>";
}

echo "<h2>Defining Custom Exceptions</h2>";
class EmptyEmailException extends Exception {}
class InvalidEmailException extends Exception {}

$email = "someuser@example..com";

try{
	if($email == ""){
			throw new EmptyEmailException("<p>Please enter your E-mail address!</p>");
	}
	
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
		throw new InvalidEmailException("<p><b>$email</b> is not a valued E-mail address!</p>");	
	}
	
	echo "<p>SUCCESS: Email validation successful.</p>";
} catch(EmptyEmailException $e){
	echo $e->getMessage();
} catch(InvalidEmailException $e){
	echo $e->getMessage();
}
echo "<h2>Setting a Global Exception Handler</h2>";
echo "<pre>
if you don't want to expose such information to the user, you can create a custom function and register it with the set_exception_handler() function to handle all uncaught exceptions.
</pre>";

function handleUncaughtException($e){
	echo "Opps! Something went wrong. Please try again, or contact us if the problem persists.";
	$error = "Uncaught Exception: " . $message = date("Y-m-d H:i:s - ");
	$error .= $e->getMessage() . "in file " . $e->getFile() . " on line " . $e->getLine() . "\n";
	
	error_log($error, 3, "logs/exceptionLog.log"); 
}

set_exception_handler("handleUncaughtException");

throw new Exception("Testing Exception!");
?>







