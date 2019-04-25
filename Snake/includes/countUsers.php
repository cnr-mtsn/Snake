
<?php

	/*****	ESTABLISH DATABASE CONNECTION	*****/
	$serverName = "localhost:3306";
	$dbUsername = "cnr.mtsn";
	$dbPassword = "d83f4eame4cumd";
	$dbName = "Snake";
	$conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);

	//Count users
	$sql = "SELECT * FROM player";
	$userCount = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($userCount);

	echo $rows;

?>
