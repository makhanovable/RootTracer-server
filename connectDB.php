<?php
	$host = "localhost";
	$user = "id3116113_hanz";
	$password = "password";
	$database = "id3116113_login";
	$connection = mysqli_connect($host, $user, $password, $database);
	if(!$connection) {
		die(mysqli_connect_error());
	}
?>
