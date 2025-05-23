<?php
$host = "localhost"; 
$dbUser = "root"; 
$dbPass = ""; 
$dbName = "user_registration"; 

$conn = mysqli_connect($host, $dbUser, $dbPass, $dbName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
