
<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "applicants");

// CREATE TABLE `applicants`.`applications` ( `fullname` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `phonenumber` VARCHAR(255) NOT NULL , `nationality` VARCHAR(255) NOT NULL , `city` VARCHAR(255) NOT NULL , `experience` VARCHAR(255) NOT NULL , `yearsOfExperience` VARCHAR(255) NOT NULL , `isWorking` VARCHAR(255) NOT NULL , `github` VARCHAR(255) NOT NULL , `javaScript` VARCHAR(255) NOT NULL , `oop` VARCHAR(255) NOT NULL , `about` VARCHAR(800) NOT NULL , `resume` VARCHAR(255) NOT NULL , `data` MEDIUMBLOB NOT NULL , `mime` VARCHAR(255) NOT NULL, PRIMARY KEY(fullname) ) ENGINE = InnoDB;






// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phoneNumber'];
	$nationality = $_POST['nationality'];
	$city = $_POST['city'];
	$experience = $_POST['experience'];
	$yearsOfExperience = $_POST['yearsOfExperience'];
	$isWorking = $_POST['isWorking'];
	$github = $_POST['github'];
	$javaScript = $_POST['javaScript'];
	$oop = $_POST['oop'];
	$about = $_POST['about'];
	$resume = $_FILES['resume']['name'];
	$data = addslashes(file_get_contents($_FILES["resume"]["tmp_name"]));
	$mime = $_FILES['resume']['type'];

	$sql = "INSERT INTO applications (fullname, email, phonenumber, nationality, city, experience, yearsOfExperience, isWorking, github, javaScript, oop, about, resume, data, mime)
 		VALUES ('$fullname', '$email', '$phonenumber', '$nationality', '$city', '$experience', '$yearsOfExperience', '$isWorking', '$github', '$javaScript', '$oop', '$about', '$resume', '$data', '$mime')";


if ($conn->query($sql) === TRUE) {
    header('Location: ThankYou.php');
	exit;
} else {
    echo "Error ocurred <br>";
}

$conn->close();
?>
