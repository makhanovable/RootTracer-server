<?php
	require "connectDB.php";
	$sql = "SELECT * FROM points;";
	$result = mysqli_query($connection, $sql);
	$response = array();
	while($row = mysqli_fetch_array($result)) {
		array_push($response, array("id" => $row["id"], "email" => $row["email"], "lat" => $row["lat"], "lot" => $row["lot"], "time" => $row["time"],
									"route" => $row["route"]));
	}
	echo json_encode(array("points" => $response));
	$connection->close();
?>