<?php 
		require 'session.php';
		require 'db/db_inc.php';
if(isset($_POST['submit'])==0){
	$file=$_FILES['file'];
	if($file['error']===0){
		$fileName=$file['name'];
		$fileExt=explode('.', $fileName);
		$fileExt=strtolower(end($fileExt));
		$allowedExt=array('jpg','jpeg','png');
		if(in_array($fileExt,$allowedExt)){
			$newName=uniqid('',true).".".$fileExt;
			$fileLocation='pfp/'.$newName;
			move_uploaded_file($file['tmp_name'], $fileLocation);
			$_SESSION['pfp']=$newName;
			$id=$_SESSION['id'];
			$getInfoQuery="SELECT * FROM  profileimg WHERE id=$id;";
			$infoResult=mysqli_query($conn,$getInfoQuery);
			$info=mysqli_fetch_assoc($infoResult);
					$updateImgQuery="UPDATE profileimg SET status='$fileLocation' WHERE id=$id;";
					mysqli_query($conn,$updateImgQuery);			
			$slctImgQuery="SELECT *FROM profileimg WHERE id=$id;";
			$slctImgRslt=mysqli_query($conn,$slctImgQuery);
			$updatedImage=mysqli_fetch_assoc($slctImgRslt);
			$_SESSION['status']=$updatedImage['status'];
				header('location: changedp.php?status=success');
			exit();
		}
		else{
			header('location: changedp.php?status=invalid_ext');
			exit();
		}
	}
	else{
		header('location: changedp.php?status=error');
		exit();
	}
}