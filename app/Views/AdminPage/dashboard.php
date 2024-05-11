<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="<?= base_url('assets2/vendors/mdi/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets2/vendors/css/vendor.bundle.base.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets2/css/style.css')?>">
    <link rel="shortcut icon" href="<?= base_url('assets2/images/ciologo.png')?>" />
  </head>

  <style>
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          </div>
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
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white" style="height: 150px; width: 200px;">
                        <div class="card-body">
                            <h4 class="font-weight-normal mb-3">Users <i class="mdi mdi-account mdi-36px float-right"></i></h4>
                            <h2 class="mb-5">1500</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white" style="height: 150px; width: 200px;">
                        <div class="card-body">
                            <h4 class="font-weight-normal mb-3">Staff <i class="mdi mdi-account-group mdi-36px float-right"></i></h4>
                            <h2 class="mb-5">45</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white" style="height: 150px; width: 200px;">
                        <div class="card-body">
                            <h4 class="font-weight-normal mb-3">News by Admin <i class="mdi mdi-newspaper mdi-36px float-right"></i></h4>
                            <h2 class="mb-5">45</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white" style="height: 150px; width: 200px;">
                        <div class="card-body">
                            <h4 class="font-weight-normal mb-3">News by Staff <i class="mdi mdi-newspaper mdi-36px float-right"></i></h4>
                            <h2 class="mb-5">45</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
            <!-- Line Chart for Sentiment Analysis -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sentiment Analysis</h4>
                        <canvas id="sentiment-analysis-chart" style="height: 400px;"></canvas>
                    </div>
                </div>
            </div>

            <!-- Pie Chart for Visit Statistics -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visit Statistics</h4>
                        <canvas id="visit-statistics-chart" style="height: 400px;"></canvas>
                    </div>
                </div>
            </div>

            <!-- Bar Chart for Traffic Sources -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Traffic Sources</h4>
                        <canvas id="traffic-sources-chart" style="height: 400px;"></canvas>
                    </div>
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
    <script src="<?= base_url('assets2/vendors/js/vendor.bundle.base.js')?>"></script>
    <script src="<?= base_url('assets2/vendors/chart.js/Chart.min.js')?>"></script>
    <script src="<?= base_url('assets2/js/jquery.cookie.js" type="text/javascript')?>"></script>
    <script src="<?= base_url('assets2/js/off-canvas.js')?>"></script>
    <script src="<?= base_url('assets2/js/hoverable-collapse.js')?>"></script>
    <script src="<?= base_url('assets2/js/misc.js')?>"></script>
    <script src="<?= base_url('assets2/js/dashboard.js')?>"></script>
    <script src="<?= base_url('assets2/js/todolist.js')?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Sample data for the charts
        var sentimentAnalysisData = {
            labels: ['Positive', 'Negative', 'Neutral'],
            datasets: [{
                label: 'Sentiment',
                data: [40, 20, 40],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        };

        var visitStatisticsData = {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'Visits',
                data: [200, 300, 400, 500, 600],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        };

        var trafficSourcesData = {
            labels: ['Direct', 'Organic', 'Referral', 'Social'],
            datasets: [{
                label: 'Traffic',
                data: [300, 400, 200, 100],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Initialize the charts
        var sentimentAnalysisChart = new Chart(document.getElementById('sentiment-analysis-chart'), {
            type: 'doughnut',
            data: sentimentAnalysisData
        });

        var visitStatisticsChart = new Chart(document.getElementById('visit-statistics-chart'), {
            type: 'line',
            data: visitStatisticsData
        });

        var trafficSourcesChart = new Chart(document.getElementById('traffic-sources-chart'), {
            type: 'bar',
            data: trafficSourcesData
        });
    </script>
  </body>
</html>