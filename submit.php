<?php
// Connect to the database
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$conn = new mysqli('localhost', 'root', '', 'mydb');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Get the form data


// Insert the data into the database
$sql = "INSERT INTO mydb (name, email, phone) VALUES ('$name', '$email', '$phone')";
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
