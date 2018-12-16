
<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "applicants");

// CREATE TABLE `applicants`.`messages` ( `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `message` VARCHAR(800) NOT NULL ) ENGINE = InnoDB;



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$sql = "INSERT INTO messages (name, email, message)
	 		VALUES ('$name', '$email', '$message')";


if ($conn->query($sql) === TRUE) {
    header('Location: ThankYou.php');
	exit;;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


