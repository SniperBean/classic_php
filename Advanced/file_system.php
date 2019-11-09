<?php
echo "<h2>Creating a New Directory</h2>";
$dir = "dir/testdir";

echo "<pre>We could use file_exists(path and dir's name) function to check whether the directory was created.
Then use mkdir(path and dir's name) to create new directory.
</pre>";

if(!file_exists($dir)){
	if(mkdir($dir)){
		echo "Directory created susccessfully;.";
		} else{
			echo "ERROR: Directory could not be created.";
			}	
	} else{
		echo "ERROR: Directory already exists.";
	}

echo "<h2>Copying Files from One Location to Another</h2>";
$file = "dir/example.txt";
$newfile = "backup/example.txt";

echo "<pre>The copy(file ,newfile) function could copys file</pre>";

if(file_exists($file)){
	if(copy($file, $newfile)){
		echo "File copied successfully.";
		} else{
			echo "ERROR: File could not be copied.";
			}
	} else{
		echo  "ERROR: File does not exits.";
		}

echo "<h2>Listing All File in a Directory</h2>";
echo "<pre>You can use the PHP scandir(path) function to list file and directories inside the specified path.</pre>";

function outputFiles($path){
	if(file_exists($path) && is_dir($path)){
		$result = scandir($path);
		// Filter out the current (.) and parent (..) directories
		$files = array_diff($result, array('.','..'));
		
		if(count($files) > 0){
			foreach($files as $file){
				if(is_file("$path/$file")){
					echo $path . "/" . $file . "<br>";
					}
				else if(is_dir("$path/$file")){
					outputFiles("$path/$file");
				}
			}
		}
		else{
			echo "ERROR: No files found in the directory.";
			}
	}
	else{
		echo "ERROR: The directory does not exit.";
		}
}

outputFiles("dir");

echo "<h2>Listing All Files of a Certain Type</h2>";
echo "<pre>Sometimes you might need to find out certain types of files within direcory, for example, listing only .txt or .png files, etc.
You can easily.
basename(file) function - show filename with extension.
filesize(file) function - show filesize</pre>";

foreach(glob("dir/*.txt") as $file){
	echo basename($file) . " size: " . filesize($file) . " bytes" . "<br>";
	}
	
echo "<pre>You can also combine previous example with the scandir() function</pre>";

function outputFiles_glob($path){
	if(file_exists($path) && is_dir($path)){
		$files = glob($path . "/*");
		
		if(count($files) > 0){
			foreach($files as $file){
				if(is_file($file)){
					echo $path . "/" . basename($file) . "<br>";
					}
				else if(is_dir($file)){
					outputFiles_glob($file);
				}
			}
		}
		else{
			echo "ERROR: No files found in the directory.";
			}
	}
	else{
		echo "ERROR: The directory does not exit.";
		}
}

outputFiles_glob("dir");
		
?>