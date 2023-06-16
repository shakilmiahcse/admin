$(document).ready(function() {
  // Load categories on page load
  loadCategories();

  // Add category form submission
  $('#addCategoryForm').submit(function(e) {
    e.preventDefault();
    var categoryName = $('#categoryName').val();

    $.ajax({
      type: 'POST',
      url: 'add_category.php',
      data: { categoryName: categoryName },
      success: function(response) {
        $('#categoryName').val('');
        loadCategories();
      }
    });
  });

  // Edit category button click
  $(document).on('click', '.edit-category', function() {
    var categoryId = $(this).data('id');
    var categoryName = $(this).data('name');

    $('#editCategoryName').val(categoryName);
    $('#editCategoryId').val(categoryId);
    $('#editCategoryModal').modal('show');
  });

  // Edit category form submission
  $('#editCategoryForm').submit(function(e) {
    e.preventDefault();
    var categoryId = $('#editCategoryId').val();
    var categoryName = $('#editCategoryName').val();

    $.ajax({
      type: 'POST',
      url: 'edit_category.php',
      data: { categoryId: categoryId, categoryName: categoryName },
      success: function(response) {
        $('#editCategoryModal').modal('hide');
        loadCategories();
      }
    });
  });

  // Delete category
  $(document).on('click', '.delete-category', function() {
    var categoryId = $(this).data('id');

    // $.ajax({
    //   type: 'POST',
    //   url: 'delete_category.php',
    //   data: { categoryId: categoryId },
    //   success: function(response) {
    //     loadCategories();
    //   }
    // });
  });

  // Load categories
  function loadCategories() {
    $.ajax({
      url: 'get_categories.php',
      success: function(response) {
        $('#categoryList').html(response);
      }
    });
  }
});
