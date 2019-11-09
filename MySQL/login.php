<?php
require_once("config.php");

$link = mysqli_connect($hostname, $username, $password, $database);

if($link==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$usr = $pw = "";
$usr_err = $pw_err = "";

if($_SERVER["REQUEST_METHOD"] = "POST"){
	if(empty(trim($_POST["username"]))){
		$use_err = "Please enter username.";
	} else{
		$usr = trim($_POST["username"]);
	}
	
	if(empty(trim($_POST["password"]))){
		$pw_err = "Plase enter your password.";
	} else{
		$pw = trim($_POST["password"]);
	}
	
	
	if(empty($usr_err) && empty($pw_err)){
		$sql = "SELECT id, username, password FROM users WHERE username = ?";
		if($stmt = mysqli_prepare($link, $sql)){
			mysqli_stmt_bind_param($stmt, "s", $param_username);
			
			$param_username = $usr;
			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);
				if(mysqli_stmt_num_rows($stmt) == 1){
					mysqli_stmt_bind_result($stmt, $id, $usr, $hashed_password);
					if(mysqli_stmt_fetch($stmt)){
						if(password_verify($pw, $hashed_password)){
							session_start();
							$_SESSION["loggedin"] = true;
							$_SESSION["id"] = $id;
							$_SESSION["username"] = $usr;
							
							header("location: welcome.php");
						} else{
							$pw_err = "The password you entered was not valid.";
						}
					}
				} else{
					$usr_err = "No account found with that username.";
				} 
			} else{
					echo "Oops! Something went wrong. Please try again later.";
				}
		}
		mysqli_stmt_close($stmt);
	}
	
	mysqli_close($link);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($usr_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $usr; ?>">
                <span class="help-block"><?php echo $usr_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($pw_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $pw_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="registration.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>