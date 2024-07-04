<?php
$servername = "localhost";
$username = "root"; // Usually 'root' is the default user
$password = ""; // Replace with the correct password, if any
$database = "studentdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
