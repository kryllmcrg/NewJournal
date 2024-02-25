<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manage News</title>
    
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    
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
            
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="fas fa-newspaper"></i>
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
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span id="statusText"><?php echo $newsItem['status']; ?></span>
                                                                <div class="dropdown ml-auto">
                                                                    <i class="fas fa-ellipsis-h" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('Approved')"><i class="fas fa-check-circle text-success mr-1"></i>Approved</a>
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('Pending')"><i class="fas fa-hourglass-half text-warning mr-1"></i>Pending</a>
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('Decline')"><i class="fas fa-times-circle text-danger mr-1"></i>Decline</a>
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('Reject')"><i class="fas fa-ban text-danger mr-1"></i>Reject</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" data-placement="top" title="View News" onclick="viewNews(<?php echo $newsItem['id_news']; ?>)">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                        </td>
                                                    </tr>
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

    <!-- change status -->
    <script>
    function changeStatus(status) {
        document.getElementById('statusText').innerText = status;
        let badge = document.getElementById('statusBadge');
        badge.innerText = status;
        badge.className = 'badge badge-pill ' + getStatusClass(status);
    }
    </script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
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
