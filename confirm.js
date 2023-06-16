$(document).ready(function() {
    
    // Delete category
    $(document).on('click', '.delete-category', function() {
      var categoryId = $(this).data('id');
      var categoryName = $(this).data('name');
      
  
      // Show confirmation popup
      var confirmation = confirm("Are you sure you want to delete the category: " + categoryName + "?");
      if (confirmation) {
        // If user confirms, proceed with delete action
        $.ajax({
            type: 'POST',
            url: 'delete_category.php',
            data: { categoryId: categoryId },
            success: function(response) {
              loadCategories();
            }
          });
      } else {
        // If user cancels, do nothing
        return false;
      }
    });
  
    // Rest of your code...
    function loadCategories() {
        $.ajax({
          url: 'get_categories.php',
          success: function(response) {
            $('#categoryList').html(response);
          }
        });
      }
  });
  