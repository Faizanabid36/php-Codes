<?php
	require 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
	<a href="signup.php"><button>Signup</button></a>
	<?php 
	if (isset($_SESSION['username'])) {
		header('location: welcome.php');	
	}
	else{
		echo '<form action="performLogin.php" method="post">
		Enter Username or Email:<br>
		<input type="text" name="uname"><br>
		Enter Password:<br>
		<input type="password" name="password"><br><br>
		<input id="submit" type="submit" value="LogIn">
	</form>';
	}
		$fullUrl="http://$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]";
		if(strpos($fullUrl,"status=invalid_pass")){
			echo "<h2>Invalid Password Entered</h2>";
		}	
		elseif (strpos($fullUrl,"status=invalid_id")) {
			echo "<h2>Invalid Email or Username</h2>";
		}
		elseif (strpos($fullUrl,"status=success")) {
			header('location: welcome.php');
			exit();
		}
		elseif (strpos($fullUrl,"status=incomplete")) {
			echo "<h2>Fill The Complete Form</h2>";
		}
	?>
</body>
</html>