<?php
//AA constant is a name or an identifier for a fixed value. 
//Constant are like variables except that one they are defined, they cannot be undefined or changed (except magic constants). 
//Constants are very useful for storing data that doesn't change while the script is running.
//Common examples of such data include configuration settings such as database username and password, website's base URL, company name, etc.

define("SITE_URL", "https://google.com.tw/");
echo 'Thank you for visiting - ' . SITE_URL;


?>