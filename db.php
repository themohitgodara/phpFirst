<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$db = "xyz";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
