<?php
$host = "localhost";
$user = "root";  // Default MySQL user
$pass = "";      // Default MySQL password (leave empty)
$dbname = "recipe_finder";  // Database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
