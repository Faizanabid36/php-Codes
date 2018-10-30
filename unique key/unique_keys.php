<?php
		require 'connection.php';
		require 'key.php';

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Unique Keys</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<?php
		$dbName="uniquekeys";
		$dbTable="records";
		$token=generateKey();
		echo "<h3>Generated Token is: ".$token."</h3>";
		$creatingToken=new queryBuilder(Connection::make($dbName),$token,$dbTable);
		$creatingToken->createToken();
		echo "Also Check Database to Confirm token values";
	?>
</body>
</html>