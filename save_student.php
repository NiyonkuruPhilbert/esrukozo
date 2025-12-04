<?php
$servername = "localhost";
$username = "root";   // change if needed
$password = "";       // add your MySQL password
$dbname = "school_db";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert form data
$name = $_POST['name'];
$email = $_POST['email'];
$grade = $_POST['grade'];
$message = $_POST['message'];

$sql = "INSERT INTO students (name, email, grade, message) 
        VALUES ('$name', '$email', '$grade', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Application submitted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
