<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
	<?php 
require 'session.php';
require_once 'db/db_inc.php';

$first=$_SESSION['first'];
	$last=$_SESSION['last'];
	$username=$_SESSION['username'];
	$age=$_SESSION['age'];
	$email=$_SESSION['email'];
	$password=$_SESSION['password'];
	$id=$_SESSION['id'];
	$fullName=$first." ".$last;
		$slctImgQuery="SELECT *FROM profileimg WHERE id=$id;";
		$slctImgRslt=mysqli_query($conn,$slctImgQuery);
		$Image=mysqli_fetch_assoc($slctImgRslt);
		$existingImage=$Image['status'];
if(isset($_SESSION)){
		echo '<a href="Welcome.php"><button>Go Back</button></a>';
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
	$fullUrl="$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullUrl, "status=error")){
		echo '<div id="img">
			<img src="'.$existingImage.'" width="120" height="125">
			Your Current Profile Picture
		</div>';
		echo "<h2>Error Uploading Picture</h2>";
	}
	elseif(strpos($fullUrl, "status=invalid_ext")){
		echo '<div id="img">
			<img src="'.$existingImage.'" width="120" height="125">
			Your Current Profile Picture
		</div>';
		echo "<h2>Invalid Extension Chosen</h2>";
	}
	elseif(strpos($fullUrl, "status=success")){
		$_SESSION['status'];
		$fileName=$_SESSION['status'];
		echo "<h2>Successfully Changed Profile Picture</h2>";
		echo '<div id="img">
			<img src="'.$fileName.'" width="120" height="125">
		 </div>';
	}
	else{
	echo '<div id="img">
			<img src="'.$existingImage.'" width="120" height="125">
			Your Current Profile Picture
		</div>';
	}
?>
<form method="post" action="uploads.php" enctype="multipart/form-data">
	 <input type="file" name="file">
	 <input type="submit" value="Upload">
</form>
</body>
</html>