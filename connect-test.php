<?php
$servername = "localhost";
$username = "urcscon3_trussel";
$password = "coffee1N/!";
$database = "urcscon3_trussell";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>