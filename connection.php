<?php
$servername = "localhost";
$username = "makson";
$password = "makson7!";
$db = "personalni_trener";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>