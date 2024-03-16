<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manage News</title>
    
    <link rel="stylesheet" href="<?= base_url('assets2/vendors/mdi/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets2/vendors/css/vendor.bundle.base.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="<?= base_url('assets2/css/style.css')?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url('assets2/images/ciologo.png')?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
            </div>
        </div>
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <!-- Larger Logo -->
                <a class="navbar-brand brand-logo" href="dashboard">
                    <img src="<?= base_url('assets2/images/ciologo.png')?>" alt="logo" style="width: 70px; height: auto;">
                </a>

                <!-- Smaller Logo for Mini View -->
                <a class="navbar-brand brand-logo-mini" href="dashboard">
                    <img src="<?= base_url('assets2/images/ciologo.png')?>" alt="logo" style="width: 70px; height: auto;">
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
                                              <th>Content</th>
                                              <th>Category</th>
                                              <th>Author</th>
                                              <th>Image</th>
                                              <th>News Status</th>
                                              <th>Publication Status</th>
                                              <th>Created At</th>
                                              <th>Updated At</th>
                                              <th>Date Approved</th> 
                                              <th>Date Submitted</th> 
                                              <th>Publication Date</th> 
                                              <th>Actions</th> 
                                          </tr>
                                          </thead>
                                            <tbody>
                                                <?php foreach ($newsData as $newsItem): ?>
                                                    <tr>
                                                        <td><?php echo $newsItem['title']; ?></td>
                                                        <td class="advisoryContent"><?php echo $newsItem['content']; ?></td>
                                                        <td><?php echo $newsItem['category_id']; ?></td>
                                                        <td><?php echo $newsItem['author']; ?></td>
                                                        <td><?php echo $newsItem['images']; ?></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span id="newsStatusText<?= $newsItem['news_id']; ?>"><?php echo $newsItem['news_status']; ?></span>
                                                                <div class="dropdown ml-auto">
                                                                    <i class="fas fa-ellipsis-h dropdown-toggle" id="dropdownMenuButton<?= $newsItem['news_id']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= $newsItem['news_id']; ?>">
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('<?= $newsItem['news_id']; ?>','Approved', document.querySelector('#newsStatusText<?= $newsItem['news_id']; ?>'))"><i class="fas fa-check-circle text-success mr-1"></i>Approved</a>
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('<?= $newsItem['news_id']; ?>','Decline', document.querySelector('#newsStatusText<?= $newsItem['news_id']; ?>'))"><i class="fas fa-times-circle text-danger mr-1"></i>Decline</a>
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('<?= $newsItem['news_id']; ?>','Reject', document.querySelector('#newsStatusText<?= $newsItem['news_id']; ?>'))"><i class="fas fa-ban text-danger mr-1"></i>Reject</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span id="publicationStatusText<?= $newsItem['news_id']; ?>"><?php echo ucfirst(strtolower($newsItem['publication_status'])); ?></span>
                                                                <div class="dropdown ml-auto">
                                                                    <i class="fas fa-ellipsis-h dropdown-toggle" id="dropdownMenuButton<?= $newsItem['news_id']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= $newsItem['news_id']; ?>">
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('<?= $newsItem['news_id']; ?>','Published', document.querySelector('#publicationStatusText<?= $newsItem['news_id']; ?>'), true)"><i class="fas fa-check-circle text-success mr-1"></i>Published</a>
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('<?= $newsItem['news_id']; ?>','Unpublished', document.querySelector('#publicationStatusText<?= $newsItem['news_id']; ?>'), true)"><i class="fas fa-times-circle text-danger mr-1"></i>Unpublished</a>
                                                                        <a class="dropdown-item" href="#" onclick="changeStatus('<?= $newsItem['news_id']; ?>','Draft', document.querySelector('#publicationStatusText<?= $newsItem['news_id']; ?>'), true)"><i class="fas fa-pencil-alt text-info mr-1"></i>Draft</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $newsItem['created_at']; ?></td>
                                                        <td><?php echo $newsItem['updated_at']; ?></td>
                                                        <td><?php echo $newsItem['date_approved']; ?></td>
                                                        <td><?php echo $newsItem['date_submitted']; ?></td>
                                                        <td><?php echo $newsItem['publication_date']; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" data-placement="top" title="View News" onclick="viewNews(<?php echo $newsItem['news_id']; ?>)">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <a href="<?php echo base_url('/deleteNews/'.$newsItem['news_id']); ?>" class="btn btn-sm btn-danger delete-news-btn">Delete</a>
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

    <script>
    function formatAdvisoryDetails(content) {
        // Define the maximum width percentage or retrieve it from an appropriate source
        var maxWidthPercentage = 80; // Adjust this according to your needs

        // Calculate the maximum width based on the window width and maximum width percentage
        var maxWidth = (window.innerWidth * maxWidthPercentage) / 100;

        // Calculate the maximum length for the combined subject and content
        var maxLength = Math.floor(maxWidth / 8);

        // Check if content length exceeds the maximum length
        if (content.length > maxLength) {
            // If combined length exceeds maxLength, truncate and add ellipsis
            content = content.substring(0, maxLength - 3) + "...";
        }

        return content;
    }

    // Call the function to truncate content after page load
    window.onload = function() {
        var advisoryContents = document.getElementsByClassName("advisoryContent");
        for (var i = 0; i < advisoryContents.length; i++) {
            advisoryContents[i].innerText = formatAdvisoryDetails(advisoryContents[i].innerText);
        }
    };
</script>


    <!-- change status -->
    <script>
    function changeStatus(id, status, statusTextElement) {
        $.ajax({
            url: "<?php echo base_url('changeStatus');?>",
            type: "POST",
            data: {
                news_id: id,
                status: status
            },
            success: function(data) {
                statusTextElement.innerText = status;
            },
            error: function(error) {
                console.log(error);
                alert("Failed to update status. Please try again.");
            }
        })
    }

    function viewNews(newsId) {
        window.location.href = '<?php echo base_url('viewnews/')?>' + newsId; // Change the URL as needed
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
        // Prevent the default action of the anchor tag
        event.preventDefault();
        
        // Fetch news item data based on news ID
        const newsId = item.getAttribute('data-news-id');
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
                    news_id: newsId
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
    <script src="<?= base_url('assets2/vendors/js/vendor.bundle.base.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('assets2/vendors/chart.js/Chart.min.js')?>"></script>
    <script src="<?= base_url('assets2/js/jquery.cookie.js" type="text/javascript')?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets2/js/off-canvas.js')?>"></script>
    <script src="<?= base_url('assets2/js/hoverable-collapse.js')?>"></script>
    <script src="<?= base_url('assets2/js/misc.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url('assets2/js/dashboard.js')?>"></script>
    <script src="<?= base_url('assets2/js/todolist.js')?>"></script>
    <!-- End custom js for this page -->
</body>
</html>
