<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manage Announcements</title>
    
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
                <!-- <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div> -->
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
                            </span> Manage Announcements
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
                                    <h4 class="card-title">Manage Announcements</h4>
                                      <div class="table-responsive">
                                        <table class="table table-striped">
                                        <thead>
                                          <tr>
                                              <th>Title</th>
                                              <th>Description</th>
                                              <th>Images</th>
                                              <th>Created</th>
                                              <th>Updated</th>
                                              <th>Action</th>
                                          </tr>
                                          </thead>
                                            <tbody>
                                            <?php foreach ($announceData as $announceItem): ?>
                                                <tr>
                                                    <td><?php echo $announceItem['title']; ?></td>
                                                    <td><?php echo $announceItem['description']; ?></td>
                                                    <td>
                                                        <?php 
                                                        $images = explode(',', $announceItem['images']);
                                                        foreach ($images as $image): ?>
                                                            <img src="<?php echo base_url('public/uploads/' . $image); ?>" alt="Image">
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td><?php echo $announceItem['created_at']; ?></td>
                                                    <td><?php echo $announceItem['updated_at']; ?></td>
                                                    <td> <!-- Actions column -->
                                                        <button type="button" class="btn btn-sm btn-primary edit-announce-btn" data-announce-id="<?php echo $announceItem['id_announce']; ?>">Edit</button>
                                                        <button type="button" class="btn btn-sm btn-danger delete-announce-btn" data-announce-id="<?php echo $announceItem['id_announce']; ?>">Delete</button>
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

    <!-- Modal for Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your form for editing announcement here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- <script>
    // Script for showing edit modal
    $('.edit-announce-btn').on('click', function() {
        var announceId = $(this).data('announce-id');
        // Here you can fetch the announcement data using Ajax and populate the edit modal
        $('#editModal').modal('show');
    });

    // Script for showing delete alert
    $('.delete-announce-btn').on('click', function() {
        var announceId = $(this).data('announce-id');
        if (confirm('Are you sure you want to delete this announcement?')) {
            // Here you can send a delete request using Ajax or submit a form for deleting the announcement
            // You can also redirect the user to a delete route/controller
            alert('Announcement deleted successfully.');
        }
    });
</script> -->

<script>
      document.querySelectorAll('.edit-announce-btn').forEach(item => {
      item.addEventListener('click', event => {
          
          const announceId = event.currentTarget.dataset.newsId;
          console.log('Edit button clicked for announcement ID:', announceId);

          // Show the modal
          $('#editAnnounceModal').modal('show');
      });
  });

    // Event handler for Close button
  document.querySelector('#editAnnounceModal .btn-secondary').addEventListener('click', function() {
      $('#editAnnounceModal').modal('hide');
  });

  // Event handler for Save changes button
  document.querySelector('#editAnnounceModal .btn-primary').addEventListener('click', function() {
      // Perform actions when Save changes button is clicked
      console.log('Save changes button clicked');

      // Close the modal
      $('#editAnnounceModal').modal('hide');
  });

  document.querySelectorAll('.delete-announce-btn').forEach(item => {
    item.addEventListener('click', event => {
      // Fetch news item data based on news ID
      const newsId = event.currentTarget.dataset.newsId;
      console.log('Delete button clicked for announcement ID:', newsId);
      
      // Show alert
      alert('Are you sure you want to delete this announcement item?');
      
      // Here you can proceed with actual deletion logic if needed
    });
  });

    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    
</body>
</html>
