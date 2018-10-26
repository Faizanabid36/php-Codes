<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
	<a href="login.php"><button>Login</button></a>
	<form action="performSignup.php" method="post">
		Enter First Name:<br>
		<input type="text" name="fname"><br>
		Enter Last Name:<br>
		<input type="text" name="lname"><br>
		Enter User Name:<br>
		<input type="text" name="uname"><br>
		Enter Email Address:<br>
		<input type="email" name="email"><br>
		Enter Password:<br>
		<input type="password" name="password1"><br>
		Confirm Password:<br>
		<input type="password" name="password2"><br>
		Enter Age<br>
		<input type="number" name="age"><br><br>
		<input id="submit" type="submit" value="Sign Up">
	</form>
	<?php 
		$fullUrl="http://$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]";
		if(strpos($fullUrl,"status=invalid_name")){
			echo "<h2>Invalid Name Entered</h2>";
		}
		elseif (strpos($fullUrl,"status=invalid_length")) {
			echo "<h2>Password Lenght Must be Greater than 5</h2>";	
		}
		elseif (strpos($fullUrl,"status=incorrect_password")) {
			echo "<h2>Password Does not Match</h2>";
		}
		elseif (strpos($fullUrl,"status=email_taken")) {
			echo "<h2>Email/Username Already Exists</h2>";
		}
		elseif (strpos($fullUrl,"status=success")) {
			echo "<h2>Successfully Signed Up</h2>";
		}
		elseif (strpos($fullUrl,"status=incomplete")) {
			echo "<h2>Fill The Complete Form</h2>";
		}
	?>
</body>
</html>