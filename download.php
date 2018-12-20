<?php


    $conn = new mysqli("localhost", "root", "", "applicants");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $fullname = isset($_GET['fullname'])? $_GET['fullname'] : "";

    $sql = "SELECT * FROM applications WHERE fullname = '$fullname'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

		header('Content-Type: ' . $row['mime']);
		header('Content-Disposition: attachment;' . ' filename="' . $row['resume'] . '"');
		echo $row['data'];

	
?>