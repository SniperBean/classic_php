<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Image Gallery</title>
<style type="text/css">
	.img-box{
		display: inline-block;
		text-align: center;
		margin: 0 15px;
		}
</style>
</head>

<body>

<?php
echo "<h2>Downloading Files with PHP</h2>";
$str = "
<a href=\"downloads/test.zip\">Download Zip file</a>
<a href=\"downloads/masters.pdf\">Download PDF file</a>
<a href=\"downloads/sample.jpg\">Download Image file</a>
<a href=\"downloads/setup.exe\">Download EXE file</a>";

echo "<pre>
You can use HTML to download files.";
echo htmlentities($str,ENT_QUOTES,"UTF-8");
echo "</pre>";


echo "<h2>Forcing a Download Using PHP</h2>";
echo "<pre>You can force images or other kind of files to download directly to the user's hard drive using the PHP readfile() function.</pre>";

$images = array("kites.jpg", "balloons.jpg");

foreach($images as $image){
	echo '<div class="img-box">';
	echo '<img src="image/' . $image . '"width="200" alt="' . pathinfo($image, PATHINFO_FILENAME) . '">';
	echo '<p><a href="download.php?file=' . urlencode($image) . '">Download</a></p>';
	echo '</div>';
	}
	
?>