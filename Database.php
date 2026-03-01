<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "night_gourd";

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}