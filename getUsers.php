<?php
	require "connectDB.php";
	$sql = "SELECT * FROM login;";
	$result = mysqli_query($connection, $sql);
	$response = array();
	while($row = mysqli_fetch_array($result)) {
		array_push($response, array("id" => $row["id"], "email" => $row["email"],
									"password" => $row["password"]));
	}
	echo json_encode(array("users" => $response));
	$connection->close();
?>