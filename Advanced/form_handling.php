<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
</head>

<body>

<?php
echo "<h2>Creating a Simple Contact Form</h2>";
?>

	<h3>Contact Us</h3>
	<p>Please fill in this form and send us.</p>
	<form action="process-form.php" method="post">
		<p>
			<label for="inputName">Name:<sup>*</sup></label>
			<input type="text" name="name" id="inputName">
		</p>
		<p>
			<label for="inputEmail">Email:<sup>*</sup></label>
			<input type="text" name="email" id="inputEmail">
		</p>
		<p>
			<label for="inputSubject">Subject:<sup>*</sup></label>
			<input type="text" name="subject" id="inputSubject">
		</p>
		<p>
			<label for="inputComment">Message:<sup>*</sup></label>
			<textarea name="message" id="inputComment" rows="5" cols="30"></textarea>
		</p>
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</form>

<?php
	echo "<h2>Explanation of code</h2>";
	echo "<pre>
Notice that there are two attributes within the opening < form> tag:

The action attribute references a PHP file \"process-form.php\" that receives the data entered into the form when user submit it by pressing the submit button.
The method attribute tells the browser to send the form data through POST method.
Rest of the elements inside the form are basic form controls to receive user inputs. To learn more about HTML form elements please check out the HTML Forms tutorial.
</pre>";
?>	

</body>
</html>