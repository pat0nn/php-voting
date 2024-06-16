<?php
	$conn = new mysqli('192.168.31.229:3306', 'root', '1', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>

