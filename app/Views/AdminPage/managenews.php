<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manage News</title>
    
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    
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
                        <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
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
            <div class="container-fluid page-body-wrapper">
            <?php include('include\sidebar.php'); ?>
            
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="mdi mdi-comment"></i>
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
                    
                    <!-- Table -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Manage News</h4>
                                    <button type="button" class="btn btn-sm btn-success export-pdf-btn">Export to PDF</button>
                                      <div class="table-responsive">
                                        <table class="table table-striped">
                                        <thead>
                                          <tr>
                                              <th>Title</th>
                                              <th>SubTitle</th>
                                              <th>Author</th>
                                              <th>Category</th>
                                              <th>Publication Date</th>
                                              <th>Images</th>
                                              <th>Content</th>
                                              <th>Status</th>
                                              <th>Actions</th> 
                                          </tr>
                                          </thead>
                                            <tbody>
                                                <?php foreach ($newsData as $newsItem): ?>
                                                    <tr>
                                                        <td><?php echo $newsItem['title']; ?></td>
                                                        <td><?php echo $newsItem['subTitle']; ?></td>
                                                        <td><?php echo $newsItem['author']; ?></td>
                                                        <td><?php echo $newsItem['category']; ?></td>
                                                        <td><?php echo $newsItem['publicationDate']; ?></td>
                                                        <td>
                                                            <?php 
                                                            $images = explode(',', $newsItem['images']);
                                                            foreach ($images as $image): ?>
                                                                <img src="<?php echo base_url('public/uploads/' . $image); ?>" alt="Image">
                                                            <?php endforeach; ?>
                                                        </td>
                                                        <td><?php echo $newsItem['content']; ?></td>
                                                        <td><?php echo $newsItem['status']; ?></td>
                                                        <td> <!-- Actions column -->
                                                            <button type="button" class="btn btn-sm btn-primary edit-news-btn"  data-news-id="<?= $newsItem['id_news'] ?>">Edit</button>
                                                            <a href="<?php echo base_url('/deleteNews/'.$newsItem['id_news']); ?>" class="btn btn-sm btn-danger delete-news-btn">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <!-- Modal for Editing News -->
                                                    <div class="modal fade" id="editNewsModal<?=$newsItem['id_news']?>" tabindex="-1" role="dialog" aria-labelledby="editNewsModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                             <!-- Form for editing news -->
                                                             <form id="editNewsForm" action="<?php echo base_url('/editNews'); ?>" method="POST">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editNewsModalLabel">Edit News</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                   
                                                                    <input type="hidden" name="id_news" value="<?= $newsItem['id_news']?>">
                                                                        <div class="form-group">
                                                                            <label for="editNewsTitle">Title</label>
                                                                            <input value="<?= $newsItem['title'];?>" type="text" class="form-control" id="editNewsTitle" name="editNewsTitle" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="editNewsSubTitle">SubTitle</label>
                                                                            <input value="<?= $newsItem['subTitle'];?>" type="text" class="form-control" id="editNewsSubTitle" name="editNewsSubTitle" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="editNewsAuthor">Author</label>
                                                                            <input value="<?= $newsItem['author'];?>" type="text" class="form-control" id="editNewsAuthor" name="editNewsAuthor" required>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                        <label for="editCategory" class="form-label">Category</label>
                                                                        <input value="<?= $newsItem['category'];?>" type="text" class="form-control" id="editCategory" placeholder="Enter category">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="editNewsPublicationDate">Publication Date</label>
                                                                            <input value="<?= $newsItem['publicationDate'];?>" type="date" class="form-control" id="editNewsPublicationDate" name="editNewsPublicationDate" required>
                                                                        </div>

                                                                        <div style="display: flex; justify-content: center;">
                                                                            <img width="150px" src="<?= base_url('public/uploads/' . $image); ?>" alt="" srcset="">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="editNewsImages">Images</label>
                                                                            <input type="file" class="form-control-file" id="editNewsImages" name="editNewsImages[]" multiple>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="editNewsContent">Content</label>
                                                                            <textarea class="form-control" id="editNewsContent" name="editNewsContent" rows="5" required><?= $newsItem['content'];?></textarea>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="editNewsStatus">Status</label>
                                                                            <select class="form-control" id="editNewsStatus" name="editNewsStatus" required>
                                                                                <option <?php if($newsItem['status'] === "") echo "selected"?> value="published">Select Status</option>
                                                                                <option <?php if($newsItem['status'] === "Draft") echo "selected"?> value="draft">Draft</option>
                                                                                <option <?php if($newsItem['status'] === "Published") echo "selected"?> value="published">Published</option>
                                                                            </select>
                                                                        </div>
                                                                    
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary" id="saveEditedNewsBtn">Save Changes</button>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                
                <!-- partial -->
            </div>
            <?php include('include\footer.php'); ?>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


    <script>
      // JavaScript to handle the click event of the "Edit" button
      document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-news-btn');

        editButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const newsId = button.getAttribute('data-news-id');
                const modalId = `#editNewsModal${newsId}`;
                const modal = document.querySelector(modalId);

                // Open the corresponding modal
                $(modal).modal('show');
            });
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

  document.querySelectorAll('.delete-news-btn').forEach(item => {
    item.addEventListener('click', event => {
      // Fetch news item data based on news ID
      const newsId = event.currentTarget.dataset.newsId;
      console.log('Delete button clicked for news ID:', newsId);
      
      // Show alert
      alert('Are you sure you want to delete this news item?');
      
      // Here you can proceed with actual deletion logic if needed
    });
  });

  document.querySelectorAll('.delete-news-btn').forEach(item => {
    item.addEventListener('click', event => {
        // Fetch news item data based on news ID
        const newsId = event.currentTarget.dataset.newsId;
        console.log('Delete button clicked for news ID:', newsId);

        // Show a confirmation dialog
        var isConfirmed = confirm("Are you sure you want to delete this news?");

        // If the user confirms, perform the deletion logic
        if (isConfirmed) {
            // Make an AJAX request to delete the news item
            fetch('/delete-news', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id_news: newsId
                }),
            })
            .then(response => {
                if (response.ok) {
                    // Refresh the page or update the news list after successful deletion
                    location.reload();
                } else {
                    // Handle error response
                    console.error('Failed to delete news item');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
});

  </script>


    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
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
