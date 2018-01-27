<?php
	require "connectDB.php";
	$email = $_POST["email"];
	$lat = $_POST["lat"];
	$lot = $_POST["lot"];
	$time = $_POST["time"];
	$route = $_POST["route"];
	if($email != null && $password != null) {
		$sql = "INSERT INTO `points` (`id`, `email`, `lat`, `lot`, `time`, `route`) VALUES (NULL, '$email', '$lat', '$lot', '$time', '$route');";
		if(!mysqli_query($connection, $sql)) {
			die(mysqli_error());
		}
	}
	$connection->close();
?>