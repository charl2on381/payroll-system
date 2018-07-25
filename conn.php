<?php
	$conn = new mysqli('localhost', 'root', '', 'appsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>