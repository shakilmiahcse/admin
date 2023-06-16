<?php
// Establish database connection
require 'cannectDB.php';


$categoryId = $_POST['categoryId'];

// Perform necessary validation and sanitization

// Delete the category from the database
$sql = "DELETE FROM categories WHERE id = $categoryId";
$result = mysqli_query($connection, $sql);

// Close database connection
mysqli_close($connection);

// Send response
?>
