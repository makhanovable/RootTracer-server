<?php
	require "connectDB.php";
	$email = $_POST["email"];
	$password = $_POST["password"];
	if($email != null && $password != null) {
		$sql = "INSERT INTO login VALUES('', '$email', '$password');";
		if(!mysqli_query($connection, $sql)) {
			die(mysqli_error());
		}
	}
	$connection->close();
?>