<?php
// Establish database connection
require 'cannectDB.php';


$categoryId = $_POST['categoryId'];
$categoryName = $_POST['categoryName'];

// Perform necessary validation and sanitization

// Update the category in the database
$sql = "UPDATE categories SET name = '$categoryName' WHERE id = $categoryId";
$result = mysqli_query($connection, $sql);

// Close database connection
mysqli_close($connection);

// Send response
?>
