<?php
$servername = "localhost";
$username = "Rigel";
$password = "1234";
$dbname = "ugv_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>