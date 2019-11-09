<?php
session_start();
echo "<h2>What is a Session</h2>";
echo "<pre>Although you can store data using cookies but it has some security issues. 
Since cookies are stored on user's computer it is possible for an attacker to easily modify a cookie content to insert potentially harmful data in your application that might break your application.
Also every time the browser requests a URL to the server, all the cookie data for a website is automatically sent to the server within the request. 
It means if you have stored 5 cookies on user's system, each having 4KB in size, the browser needs to upload 20KB of data each time the user views a page, which can affect your site's performance.
You can solve both of these issues by using the PHP session. 
A PHP session stores data on the server rather than user's computer. 
In a session based environment, every user is identified through a unique number called session identifier or SID. 
This unique session ID is used to link each user with their own information on the server like emails, posts, etc.
</pre>";

echo "<h2>Starting a PHP Session</h2>";
echo "<pre>
Call the session_start() function. It will create a new session and generate a unique session ID for the user.
<strong>Note</strong>: You must call the session_start() function at the beginning of the page i.e. before any output generated by your script in the browser, much like you do while setting the cookies with setcookie() function.</pre>";

echo "<h2>Storing and Accessing Session Data</h2>";
echo "<pre>You can store all your session data as key-value pairs in the \$_SESSION[] superglobal array.
\$_SESSION[\"firstname\"] = \"Peter\";
\$_SESSION[\"lastname\"] = \"Parker\";</pre>";

$_SESSION["firstname"] = "Peter";
$_SESSION["lastname"] = "Parker";
echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];

echo "<h2>Destroying a Session</h2>";
echo "<pre>If you want to remove certain session data, simply unset the corresponding key of the \$_SESSION associative array/
if(isset(\$_SESSION[\"lastname\"])){
	unset(\$_SESSION[\"lastname\"]);
}

However, to destroy a session compeletly, simply call the session_destroy() function.
This function doesn't need any argument and a single call destorys all the session data.
<strong>Note</strong>: Before destroying a session with the session_destroy() function, you need to first recreate the session environment if it is not already there using the session_start() function, so that there is something to destroy.
</pre>";

session_destroy();

if(isset($_SESSION["firstname"])){
	unset($_SESSION["firstname"]);
	unset($_SESSION["firstname"]);
	
	echo "Sessions have been destroyed.";
	}

?>