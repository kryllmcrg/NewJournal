<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets2/vendors/css/vendor.bundle.base.css">
    
    <link rel="stylesheet" href="assets2/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets2/images/logggo.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
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
              <img src="assets2/images/logo.png" alt="logo" style="width: 120px; height: auto;">
          </a>

          <!-- Smaller Logo for Mini View -->
          <a class="navbar-brand brand-logo-mini" href="dashboard">
              <img src="assets2/images/logo.png" alt="logo" style="width: 40px; height: auto;">
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
                <i class="mdi mdi-message"></i>
                </span> Chats
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div id="chat-window">
        <div id="chat-output"></div>
        <input type="text" id="message-input" placeholder="Type your message...">
        <button id="send-button">Send</button>
        </div>
      </div>
      <?php include('include\footer.php'); ?>
    </div>
    <script src="assets2/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets2/vendors/chart.js/Chart.min.js"></script>
    <script src="assets2/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets2/js/off-canvas.js"></script>
    <script src="assets2/js/hoverable-collapse.js"></script>
    <script src="assets2/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets2/js/dashboard.js"></script>
    <script src="assets2/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
  <style>
    /* General styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.main-panel {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.content-wrapper {
    padding: 20px;
}

.page-header {
    margin-bottom: 20px;
}

.page-title {
    font-size: 24px;
    margin-bottom: 10px;
    color: #6a1b9a; /* Purple color */
}

.breadcrumb-item.active {
    color: #6a1b9a; /* Purple color */
}

/* Chat window styles */
#chat-window {
    background-color: #f9f9f9;
    padding: 20px;
    border-top: 1px solid #ddd;
}

#chat-output {
    height: 200px;
    overflow-y: scroll;
    padding-right: 20px;
}

#message-input {
    width: calc(100% - 100px);
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-right: 10px;
    font-size: 16px;
    outline: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#send-button {
    width: 80px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #6a1b9a; /* Purple color */
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    transition: background-color 0.3s ease;
}

#send-button:hover {
    background-color: #4a148c; /* Darker purple color on hover */
}

  </style>
</html>