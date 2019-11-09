<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
</head>

<body>

<?php
echo "<h2>Capturing Form Data with PHP</h2>";
echo "<pre>To access the value of a particular form field, you can use the following superglobal variable.
<table>
                        <thead>
                            <tr>
                            	<th>Superglobal</th>
                            	<th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            	<td><code>$_GET</code></td>
                            	<td>Contains a list of all the field names and values sent by a form using the get method (i.e. via the URL parameters).</td>
                            </tr>
                            <tr>
                            	<td><code>$_POST</code></td>
                            	<td>Contains a list of all the field names and values sent by a form using the post method (data will not visible in the URL).</td>
                            </tr>
                            <tr>
                            	<td><code>$_REQUEST</code></td>
                            	<td>Contains the values of both the <code>$_GET</code> and <code>$_POST</code> variables as well as the values of the <code>$_COOKIE</code> superglobal variable.</td>
                            </tr>
                        </tbody>
                    </table>
</pre>";
?>

	<h3>Thank You</h3>
	<p>Here is the information you have submitted:</p>
	<ol>
		<li><em>Name:</em> <?php echo $_POST["name"]?></li>
		<li><em>Email:</em> <?php echo $_POST["email"]?></li>
		<li><em>Subject:</em> <?php echo $_POST["subject"]?></li>
		<li><em>Message:</em> <?php echo $_POST["message"]?></li>
	</ol>
</body>
</html>