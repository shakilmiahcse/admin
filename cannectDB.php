<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform your database operations here

// Close connection
// mysqli_close($connection);
?>
