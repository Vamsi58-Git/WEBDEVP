<?php
$host = 'localhost';
$db = 'user_db';
$user = 'root';       // Default username for XAMPP
$pass = '';           // Default password is empty
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
