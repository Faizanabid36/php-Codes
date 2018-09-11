<!DOCTYPE html>
<html>
<head>
	<title>Upload a File</title>
	<style type="text/css">
		#message{
			color: red;
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="files" value="Choose File"><br><br>
		<input type="submit" value="Upload">
		 <p>Allowed Extensions Are: jpg, jpeg, png, pdf</p>
	</form>
	<?php  
	$fullUrl="$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullUrl,'status=success')){
		echo "<h1 id=message>File Uploaded Successfully.</h1>";
	}
	elseif (strpos($fullUrl,'status=error')) {
		echo "<h1 id=message>Error Uploading File.</h1><br>";	
	}
	elseif (strpos($fullUrl,'status=no_success')) {
		echo "<h1 id=message>This Extension is Not Allowed.</h1>";
		
	}
	?>
</body>
</html>