<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Category</title>
    
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/logggo.png" />
  </head>
  <body>
    <div class="container-scroller">
      <?php include('include\logo.php'); ?>
      <?php include('include\header.php'); ?>
      </nav>
      <div class="container-fluid page-body-wrapper">
      <?php include('include\sidebar.php'); ?>

      <!-- MAIN CONTENTS -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-plus"></i>
                </span> Add Category
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Category</h4>
                    <form method="post" action="/addcategory" class="forms-sample">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categoryName">Category Name:</label>
                                    <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="Enter category name" required>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                    <button type="button" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © CalapanCityNews 2024</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> CIO <a href="" target="_blank">Calapan City Information Office</a> OffcialWebsite.com</span>
            </div>
          </footer>
        </div>
      </div>
    </div>
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