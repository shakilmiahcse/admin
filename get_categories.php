<?php
// Establish database connection
require 'cannectDB.php';


// Fetch categories from the database
$sql = "SELECT * FROM categories";
$result = mysqli_query($connection, $sql);

// Generate HTML list items for categories
$output = '';
while ($row = mysqli_fetch_assoc($result)) {
  $categoryId = $row['id'];
  $categoryName = $row['name'];
  $output .= '<li class="list-group-item">' . $categoryName . '
                <div class="btn-group float-end" role="group">
                  <button class="btn btn-primary btn-sm edit-category" data-id="' . $categoryId . '" data-name="' . $categoryName . '">Edit</button>
                  <button class="btn btn-danger btn-sm delete-category" data-id="' . $categoryId . '">Delete</button>
                </div>
              </li>';
}

// Close database connection
mysqli_close($connection);

// Send response
echo $output;
?>
