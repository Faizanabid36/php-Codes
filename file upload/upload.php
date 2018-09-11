<?php
 if(isset($_POST['submit'])==0){
 	$file=$_FILES["files"];
 	$fileExt=explode('.', $_FILES["files"]["name"]);
 	$fileExt= strtolower(end($fileExt));
 	$allowedExt=array("jpg","jpeg","png","pdf");
 	if(in_array($fileExt, $allowedExt)){
 		if ($file['error']===0) {
 			$fileName=uniqid('',true).".".$fileExt;
 			$fileLocation="uploads/".$fileName;
 			move_uploaded_file($file['tmp_name'],$fileLocation );
 			header("location: upload_file.php?status=success");
 		}
 		else{
 			header("location: upload_file.php?status=error");
 		}
 	}
 	else{
 		header("location: upload_file.php?status=no_success");
 	}
 }
 
