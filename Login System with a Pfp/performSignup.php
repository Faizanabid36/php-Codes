<?php 
require 'db/db_inc.php';
require 'session.php';

if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['uname'])||empty($_POST['email'])||empty($_POST['age'])||empty($_POST['password1'])||empty($_POST['password2'])){
	header('location: signup.php?status=incomplete');
	exit();
}
else{
	$first=trim($_POST['fname']);
	$last=trim($_POST['lname']);
	$username=trim($_POST['uname']);
	$email=$_POST['email'];
	$age=$_POST['age'];
	$password=$_POST['password1'];
	$c_password=$_POST['password2'];

	if (!preg_match("/^[a-zA-z]*$/", $first)||preg_match("/^[a-zA-z]*&/", $last)) {
		header('location: signup.php?status=invalid_name');
		exit();
	}
	else{
		$email=filter_var($email,FILTER_VALIDATE_EMAIL);
		if(strlen($password)<5){
			header('location: signup.php?status=invalid_length');
			exit();
		}
		else{
			if (!strcmp($password, $c_password)==0) {
			header('location: signup.php?status=incorrect_pass');
			exit();
			}
			else{
				$mail_query="SELECT * FROM data WHERE email='$email' OR username='$username';";
				$mailQueryResult=mysqli_query($conn,$mail_query);
				if(mysqli_fetch_assoc($mailQueryResult)){
					header('location: signup.php?status=email_taken');
					exit();
				}
				else{
					$hash_password=password_hash($password,PASSWORD_DEFAULT);
					$email=strtolower($email);
					$insertAccount="INSERT INTO data(first,last,email,password,age,username) VALUES('$first','$last','$email','$hash_password','$age','$username')";
					$insertingResult=mysqli_query($conn,$insertAccount);
					if($insertingResult){
						$callData="SELECT * FROM data WHERE email='$email' OR username='$username';";
						$checkId=mysqli_query($conn,$callData);
						$newResult=mysqli_fetch_assoc($checkId);
						$id= $newResult['id'];
						$DefaultimgQry="INSERT INTO profileimg(id,username,status) Values($id,'$username','assets/aa.png')";
						mysqli_query($conn,$DefaultimgQry);
						 header('location: signup.php?status=success');
						 exit();
					}
					else{
						header('location:signup.php?status=failure');
						exit();
					}
				}
				
			}
		}
	}
}
