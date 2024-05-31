<?php

$servername = "newdatabase.cro24g6akjny.eu-north-1.rds.amazonaws.com";
$username = "admin";
$password = "12345678";
$db = "phpSQL";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
