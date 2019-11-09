<?php
//Check POST Method
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//Check file's setting and check photo of error info
	if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
		//Set a array(key/value) to set extension name
		$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        //Get variable for name, type and size
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
		
		//Use pathinfo(path, options) function to get file information.
		/*
		There's 3 options.
		PATHINFO_DIRNAME	- return dirname
		PATHINFO_BASENAME	- return basename
		PATHINFO_EXTENSION	- return extension
		
		example:
			input - print_r(pathinfo("/testweb/test.txt"));
			
			output- Array
					(
					[dirname] => /testweb
					[basename] => test.txt
					[extension] => txt
					)
		*/
		
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		//Compare extension with allowed extension.
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
		
		//		   5 * MegaByte 
		$maxsize = 5 * 1024 *1024;
		if(filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
		
		//Match filetype with allowed extension
		if(in_array($filetype, $allowed)){
			if(file_exists("upload/" . $_FILES["photo"]["name"])){
				echo $_FILES["photo"]["name"] . " is already exists.";
			} else{
				//Use move_uploaded_file(source file, target file) function to upload file
				move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
				echo "Your file was uploaded successfully.";
			}
		}
		else{
			echo "Error: There was a problem uploading your file. Please try again.";
			}
		}
	else{
		echo "Error: " . $_FILES["photo"]["error"];
		}
}


echo "<h2>Explantion of Code</h2>";
echo "<pre>Once the form is submitted information about the uploaded file can be accessed via PHP superglobal array called \$_FILES. For example, our upload form contains a file select field called photo (i.e. name=\"photo\"), if any user uploaded a file using this field, we can obtains its details like the name, type, size, temporary name or any error occurred while attempting the upload via the \$_FILES[\"photo\"] associative array, like this:

<li>\$_FILES[\"photo\"][\"name\"] — This array value specifies the original name of the file, including the file extension. It doesn't include the file path.</li>
<li>\$_FILES[\"photo\"][\"type\"] — This array value specifies the MIME type of the file.</li>
<li>\$_FILES[\"photo\"][\"size\"] — This array value specifies the file size, in bytes.</li>
<li>\$_FILES[\"photo\"][\"tmp_name\"] — This array value specifies the temporary name including full path that is assigned to the file once it has been uploaded to the server.</li>
<li>\$_FILES[\"photo\"][\"error\"] — This array value specifies error or status code associated with the file upload, e.g. it will be 0, if there is no error.</li>
</pre>";

?>