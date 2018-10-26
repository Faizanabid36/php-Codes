<?php
	require 'db/db_inc.php';
	require 'session.php';

if(empty($_POST['uname'])||empty($_POST['password'])){
	header('location: login.php?status=incomplete');
}
else{
	$mail=$_POST['uname'];
	$passwordEntered=$_POST['password'];
	$qry="SELECT * FROM data WHERE username='$mail' OR email='$mail';";
	$result=mysqli_query($conn,$qry);
	$userExist=mysqli_fetch_assoc($result);
	if(!mysqli_num_rows($result)>0){
		header('location: login.php?status=invalid_id');
		exit();
	}
	else{
		$passwordSaved=$userExist['password'];
		if(!password_verify($passwordEntered,$passwordSaved)){
			header('location: login.php?status=invalid_pass');
			exit();
		}
		else{
			 $_SESSION['first']=$userExist['first'];
			 $_SESSION['last']=$userExist['last'];
			 $_SESSION['email']=$userExist['email'];
			 $_SESSION['age']=$userExist['age'];
			 $_SESSION['username']=$userExist['username'];
			 $_SESSION['password']=$userExist['password'];
			 $_SESSION['id']=$userExist['id'];
			header('location: login.php?status=success');
		}
	}
}