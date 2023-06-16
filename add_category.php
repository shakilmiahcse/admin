<?php
// Establish database connection
require 'cannectDB.php';


$categoryName = $_POST['categoryName'];

// Perform necessary validation and sanitization

// Insert the category into the database
$sql = "INSERT INTO categories (name) VALUES ('$categoryName')";
$result = mysqli_query($connection, $sql);

// Close database connection
mysqli_close($connection);

// Send response
?>
