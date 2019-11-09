<?php
echo "<h2>The PHP mail() Functions</h2>";
echo "<pre>You can use the PHP built-in mail() function for creating and sending email messages to one or more recipients dynamically from your PHP application either in a plain-txt from formatted HTML.
The basic syntax of this function can be given with:
mail(to, subject, message, headers, parameters)

The following table summarizes the parameters of this function.

<table>
                    <thead>
                        <tr>
                        	<th>Parameter</th>
                        	<th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td colspan=\"2\"><strong>Required</strong> — The following parameters are required</td>
                        </tr>
                        <tr>
                        	<td><code>to</code></td>
                        	<td>The recipient's email address.</td>
                        </tr>
                        <tr>
                        	<td><code>subject</code></td>
                        	<td>Subject of the email to be sent. This parameter i.e. the subject line cannot contain any newline character (<code>\n</code>).</td>
                        </tr>
                        <tr>
                        	<td><code>message</code></td>
                        	<td>Defines the message to be sent. Each line should be separated with a line feed-LF (<code>\n</code>). Lines should not exceed 70 characters.</td>
                        </tr>
                        <tr>
                        	<td class=\"section\" colspan=\"2\"><strong>Optional</strong> — The following parameters are optional</td>
                        </tr>
                        <tr>
                        	<td><code>headers</code></td>
                        	<td>This is typically used to add extra headers such as \"From\", \"Cc\", \"Bcc\". The additional headers should be separated with a carriage return plus a line feed-CRLF (<code>\r\n</code>).</td>
                        </tr>
                        <tr>
                        	<td><code>parameters</code></td>
                        	<td>Used to pass additional parameters.</td>
                        </tr>
                    </tbody>
                    </table>
</pre>";

echo "<h2>Sending Plain Text Emails</h2>";
echo "<pre>he simplest way to send an email with PHP is to send a text email.
\$to = 'maryjane@email.com';
\$subject = 'Marriage Proposal';
\$message = 'Hi Jane, will you marry me?';
\$from = 'peterparker@email.com';

if(mail(\$to, \$subject, \$message)){
	echo 'Your mail has been sent sucessfully.';
} else{
	echo 'Unable to send email. Please try again.';
}
</pre>";

$to = 'maryjane@email.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?';
$from = 'peterparker@email.com';

if(mail($to, $subject, $message)){
	echo 'Your mail has been sent sucessfully';
} else{
	echo 'Uable to send mail. Please try again';
}

echo "<h2>Sending HTML Formatted Emails</h2>";
echo "<pre>
\$to = 'maryjane@email.com';
\$subject = 'Marriage Proposal';
\$message = 'Hi Jane, will you marry me?';
\$from = 'peterparker@email.com';

//To send HTML mail, the Content-type header must be set
\$header = 'MIME-Version: 1.0' . \"\\r\\n\";
\$header .= 'Content-type: text/html; charset=iso-8859-1' . \"\\r\\n\";

//Create email headers
\$header .= 'From: ' . \$from . \"\\r\\n\" . 'X-Mailer: PHP/' . phpversion(); 

//Compose a simple HTML email message
\$message = '< html>< body>';
\$message .= '< h1 style=\"color:#f40;\">Hi Hane!< /h>';
\$message .= '< p style=\"color:#080; font-size:18px;\">Will you marry me?< /p>';
\$message . ='< /body>< /html>';


if(mail(\$to, \$subject, \$message)){
	echo 'Your mail has been sent sucessfully.';
} else{
	echo 'Unable to send email. Please try again.';
}

<strong>Note</strong>: However, the PHP mail() function is a part of the PHP core but you need to set up a mail server on your machine to make it really work.
</pre>";



?>