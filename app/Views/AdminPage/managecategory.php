<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>News</title>
    
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/ciologo.png" />
  </head>

  <body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <!-- Larger Logo -->
        <a class="navbar-brand brand-logo" href="dashboard">
        <img src="assets/images/ciologo.png" alt="logo" style="width: 70px; height: auto;">
        </a>

        <!-- Smaller Logo for Mini View -->
        <a class="navbar-brand brand-logo-mini" href="dashboard">
        <img src="assets/images/ciologo.png" alt="logo" style="width: 70px; height: auto;">
        </a>
    </div>
    <?php include('include\header.php'); ?>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <div class="container-fluid page-body-wrapper">
        <?php include('include\sidebar.php'); ?>

      <!-- Edit News Modal -->
      <div class="modal fade" id="editNewsModal" tabindex="-1" role="dialog" aria-labelledby="editNewsModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="editNewsModalLabel">Edit Category</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <!-- Add your form elements for editing here -->
                      <form action="/saveCategoryChanges" method="post">
                          <div class="row">
                              <!-- First Column -->
                              <div class="col-md-6">

                                  <div class="mb-3">
                                      <label for="editCategory" class="form-label">Category Name</label>
                                      <input type="text" name="editCategory" id="editCategory" placeholder="Enter category">
                                  </div>
                              </div>
                          </div>
                          <!-- Add more form fields as needed for editing -->
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary save-changes-btn">Save changes</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="fas fa-list"></i>
            </span> Manage Category

            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="card">
          <div class="card-body">
            <h4 class="card-title">Manage Category</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Category Name</th>
                    <th></th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($categoryData as $categoryItem): ?>
                      <tr>
                          <td><?php echo $categoryItem['name']; ?></td>
                          <td>
                          <td>
                              <button type="button" class="btn btn-sm btn-primary edit-category-btn" data-category-id="<?php echo $categoryItem['id_categories']; ?>">Edit</button>
                              <button type="button" class="btn btn-sm btn-danger delete-category-btn" data-category-id="<?php echo $categoryItem['id_categories']; ?>">Delete</button>
                          </td>
                          </td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include('include\footer.php'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script>
      document.querySelectorAll('.edit-category-btn').forEach(item => {
        item.addEventListener('click', event => {
            const categoryId = event.currentTarget.dataset.categoryId;
            console.log('Edit button clicked for category ID:', categoryId);

            fetch(`/get-category-data/${categoryId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Response from server:', data); // Log the response
                    document.getElementById('editCategory').value = data.id_categories;
                })
                .catch(error => {
                    console.error('Error fetching category data:', error);
                });

            $('#editNewsModal').modal('show');
        });
    });
    // Event handler for the "Save changes" button
    document.querySelector('.save-changes-btn').addEventListener('click', function() {
        // Here you can add the logic to save changes
        console.log('Save changes button clicked');
    });

      // Event handler for Close button
      document.querySelector('#editNewsModal .btn-secondary').addEventListener('click', function() {
          $('#editNewsModal').modal('hide');
      });

    document.querySelectorAll('.delete-category-btn').forEach(item => {
        item.addEventListener('click', event => {
            // Fetch category ID
            const categoryId = event.currentTarget.dataset.categoryId;
            console.log('Delete button clicked for category ID:', categoryId);
            // Show confirmation dialog
            if (confirm('Are you sure you want to delete this category?')) {
                // Proceed with deletion logic
                console.log('Category deleted.');
                // You may want to perform AJAX call to delete the category from server
                // and then remove the corresponding row from the table
            }
        });
    });
</script>
  <!-- plugins:js -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- End custom js for this page -->
</body>
</html>