<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="sidebar">
  <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="admin.php"><i class="fa fa-fw fa-wrench"></i>category</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>
  <div class="container mt-5">
    <h2>Add Category</h2>
    <form id="addCategoryForm">
      <div class="mb-3">
        <label for="categoryName" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="categoryName" name="categoryName" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Category</button>
    </form>

    <hr>

    <h2>Manage Categories</h2>
    <ul id="categoryList" class="list-group">
      <!-- Categories will be dynamically added here -->
    </ul>
  </div>

  <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editCategoryForm">
            <div class="mb-3">
              <label for="editCategoryName" class="form-label">Category Name</label>
              <input type="text" class="form-control" id="editCategoryName" name="editCategoryName" required>
              <input type="hidden" id="editCategoryId" name="editCategoryId">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="confirm.js"></script>
  <script src="script.js"></script>
</body>
</html>
