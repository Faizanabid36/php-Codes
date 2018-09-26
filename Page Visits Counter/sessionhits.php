<!DOCTYPE html>
<html>
<head>
	<title>Page Visit Counts</title>
</head>
<body>
	<form>
		<input type="submit" name="start" value="Start Session"><br>
		<input type="submit" name="stop" value="Stop Session">
	</form>
	<?php
	if(isset($_REQUEST['start'])){
		session_start();
		@$_SESSION['hits']=$_SESSION['hits']+1;
		echo $_SESSION['hits'];
	}
	if(isset($_REQUEST['stop'])){
		echo "stopped";
		session_start();
		session_unset();
		session_destroy();
	}
?>
</body>
</html>