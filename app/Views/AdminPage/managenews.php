<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>News</title>
    
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logggo.png" />
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
          <img src="assets/images/logo.png" alt="logo" style="width: 120px; height: auto;">
        </a>

        <!-- Smaller Logo for Mini View -->
        <a class="navbar-brand brand-logo-mini" href="dashboard">
          <img src="assets/images/logo.png" alt="logo" style="width: 40px; height: auto;">
        </a>
    </div>
    <?php include('include\header.php'); ?>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#staff" aria-expanded="false" aria-controls="staff">
              <span class="menu-title">Staff</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-account menu-icon"></i>
            </a>
            <div class="collapse" id="staff">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="manageprofile">Manage Profile</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#news" aria-expanded="false" aria-controls="news">
              <span class="menu-title">News</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-newspaper menu-icon"></i>
            </a>
            <div class="collapse" id="news">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="addnews">Add News</a></li>
                <li class="nav-item"> <a class="nav-link" href="managenews">Manage News</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#comments" aria-expanded="false" aria-controls="comments">
              <span class="menu-title">Comments</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-comment menu-icon"></i>
            </a>
            <div class="collapse" id="comments">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="managecomments">Manage Comments</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#collaboration" aria-expanded="false" aria-controls="collaboration">
              <span class="menu-title">Collaboration</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-account-group menu-icon"></i>
            </a>
            <div class="collapse" id="collaboration">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="chats">Chats</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-folder menu-icon"></i>
            </a>
            <div class="collapse" id="category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="addcategory">Add Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="managecategory">Manage Category</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item sidebar-actions">
            <a class="nav-link" href="#">
              <span class="menu-title">Settings</span>
              <i class="mdi mdi-settings menu-icon"></i>
            </a>
            <a class="nav-link" href="logout">
              <span class="menu-title">Logout</span>
              <i class="mdi mdi-logout menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>

      <!-- Edit News Modal -->
      <div class="modal fade" id="editNewsModal" tabindex="-1" role="dialog" aria-labelledby="editNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editNewsModalLabel">Edit News</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Add your form elements for editing here -->
              <form>
                <div class="row">
                    <!-- First Column -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="editTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="editTitle" placeholder="Enter title">
                        </div>

                        <div class="mb-3">
                            <label for="editSubTitle" class="form-label">SubTitle</label>
                            <input type="text" class="form-control" id="editSubTitle" placeholder="Enter Subtitle">
                        </div>

                        <div class="mb-3">
                            <label for="editCategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="editCategory" placeholder="Enter category">
                        </div>
                    </div>

                    <!-- Second Column -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="editAuthor" class="form-label">Author</label>
                            <input type="text" class="form-control" id="editAuthor" placeholder="Enter author">
                        </div>

                        <div class="mb-3">
                            <label for="editContent" class="form-label">Content</label>
                            <textarea class="form-control" id="editContent" rows="4" placeholder="Enter content"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="editImages" class="form-label">Images</label>
                            <input type="text" class="form-control" id="editImages" placeholder="Enter image URL">
                        </div>

                        <div class="mb-3">
                            <label for="editPublicationDate" class="form-label">Publication Date</label>
                            <input type="date" class="form-control" id="editPublicationDate">
                        </div>
                    </div>
                </div>
                <!-- Add more form fields as needed for editing -->
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
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
                <i class="mdi mdi-newspaper"></i>
              </span> Manage News
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
            <h4 class="card-title">Manage News</h4>
            <button type="button" class="btn btn-sm btn-success export-pdf-btn">Export to PDF</button>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Content</th>
                    <th>Images</th>
                    <th>Publication Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($newsData as $newsItem): ?>
                      <tr>
                          <td><?php echo $newsItem['title']; ?></td>
                          <td><?php echo $newsItem['subTitle']; ?></td>
                          <td><?php echo $newsItem['category']; ?></td>
                          <td><?php echo $newsItem['author']; ?></td>
                          <td><?php echo $newsItem['content']; ?></td>
                          <td>
                              <!-- If images are stored as comma-separated values in the database -->
                              <?php 
                              $images = explode(',', $newsItem['images']); 
                              foreach ($images as $image) {
                                  echo '<img src="public/uploads/' . $image . '" alt="Image">';
                              }
                              ?>
                          </td>
                          <td><?php echo $newsItem['publicationDate']; ?></td>
                          <td><?php echo $newsItem['status']; ?></td>
                          <td>
                              <!-- Add edit and delete buttons or actions here -->
                              <!-- Example: -->
                              <button type="button" class="btn btn-sm btn-primary edit-news-btn" data-news-id="<?php echo $newsItem['id_news']; ?>">Edit</button>
                              <button type="button" class="btn btn-sm btn-danger delete-news-btn" data-news-id="<?php echo $newsItem['id_news']; ?>">Delete</button>
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
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © CalapanCityNews 2024</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> CIO <a href="" target="_blank">Calapan City Information Office</a> OffcialWebsite.com</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script>
      document.querySelectorAll('.edit-news-btn').forEach(item => {
      item.addEventListener('click', event => {
          // Fetch news item data based on news ID
          const newsId = event.currentTarget.dataset.newsId;
          console.log('Edit button clicked for news ID:', newsId);

          // Show the modal
          $('#editNewsModal').modal('show');
      });
  });

    // Event handler for Close button
  document.querySelector('#editNewsModal .btn-secondary').addEventListener('click', function() {
      $('#editNewsModal').modal('hide');
  });

  // Event handler for Save changes button
  document.querySelector('#editNewsModal .btn-primary').addEventListener('click', function() {
      // Perform actions when Save changes button is clicked
      console.log('Save changes button clicked');

      // Close the modal
      $('#editNewsModal').modal('hide');
  });

  </script>
  <!-- plugins:js -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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