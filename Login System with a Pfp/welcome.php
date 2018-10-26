<?php  
	require 'session.php';
	require_once 'db/db_inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
	<?php  
	$first=$_SESSION['first'];
	$last=$_SESSION['last'];
	$username=$_SESSION['username'];
	$age=$_SESSION['age'];
	$email=$_SESSION['email'];
	$password=$_SESSION['password'];
	$id=$_SESSION['id'];
	$fullName=$first." ".$last;
	if(isset($_SESSION)){
		echo '<a href="logout.php"><button>Log Out</button></a>';
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
	if(isset($_SESSION['id'])){
		echo '<a href="changedp.php">Click Here to Change Profile Picture</a>';
	}
	$getImgQuery="SELECT * FROM profileimg WHERE username='$username';";
	$getImgResult=mysqli_query($conn,$getImgQuery);
	$image=mysqli_fetch_assoc($getImgResult);
	$usrImg=$image['status'];
	if(is_null($usrImg)){
		echo '<div>
			<img src="assets/aa.png" width="130" height="130">
		</div>';	
		echo '<h2>'.$fullName.'</h2>';
	}
	else{
		echo '<div>
			<img src="'.$usrImg.'"width="130" height="130">
		</div>';	
		echo '<h2>'.$fullName.'</h2>';
	}	
	?>
</body>
</html>