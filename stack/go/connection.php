<?php

$servername = "localhost";
$username2 = "toor";
$password2 = "";
$dbname = "overflow";
// Create connection
$conn = new mysqli($servername, $username2, $password2 , $dbname);
mysqli_set_charset( $conn, 'utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
