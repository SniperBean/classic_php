<?php

setcookie("username", "John Carter", time()+30*24*60*60);

echo "<h2>Setting a Cookie in PHP</h2>";
echo "<pre>setcookie(name, value, expire, path, domain, secure) function is uesd to set a cookie in PHP.
Make sure you call setcookie() function before any output genrated by your script otherwise cookie will not set.

The parameters of the setcookie() function have the following meanings:
<div>
                    <table>
                    <thead>
                        <tr>
                        	<th>Parameter</th>
                        	<th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td>name</td>
                        	<td>The name of the cookie.</td>
                        </tr>
                        <tr>
                        	<td>value</td>
                        	<td>The value of the cookie. Do not store sensitive information since this value is stored on the user's computer.</td>
                        </tr>
                        <tr>
                        	<td>expires</td>
                        	<td>The expiry date in UNIX timestamp format. After this time cookie will become inaccessible. The default value is 0.</td>
                        </tr>			    
                        <tr>
                        	<td>path</td>
                        	<td>Specify the path on the server for which the cookie will be available. If set to <code>/</code>, the cookie will be available within the entire domain.</td>
                        </tr>
                        <tr>
                        	<td>domain</td>
                        	<td>Specify the domain for which the cookie is available to e.g www.example.com.</td>
                        </tr>
                        <tr>
                        	<td>secure</td>
                        	<td>This field, if present, indicates that the cookie should be sent only if a secure HTTPS connection exists.</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                
Example:
setcookie(\"username\", \"John Carter\", time()+30*24*60*60);

Note: All the arguments except the name are optional. You may also replace an argument with an empty string (\"\") in order to skip that argument, however to skip the expire argument use a zero (0) instead, since it is an integer.
<font color=\"Red\" ><strong>Warning</strong></font>: Don't store sensitive data in cookies since it could potentially be manipulated by the malicious user. To store the sensitive data securely use sessions instead.
</pre>";

if(isset($_COOKIE["username"])){
	echo "Hi! " . $_COOKIE["username"];
} else{
	echo "Welcome Guest!";
}

echo "<h2>Removing Cookies</h2>";
echo "<pre>You can delete a copy by the same setcookie() function with the cookie name and any value (such as an empty string) however this time you need the set the expiration date in the past, as shown in the example below:

setcookie(\"username\", \"\", time()-3600);
</pre>";

?>