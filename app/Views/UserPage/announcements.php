<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="templatemo">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <title>Announcements</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style2.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  <link rel="shortcut icon" href="assets/images/ciologo.png" />
</head>
<body>
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <?php include('include\header.php'); ?>
  <div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="header-text">
                    <h6>Calapan Oriental Mindoro Updates</h6>
                    <h2>Stay Updated with the Latest News</h2>
                    <p>Get the hottest updates and latest news about Calapan Oriental Mindoro. Stay informed about community events, government initiatives, and local developments.</p>
                    <div class="buttons">
                        <div class="border-button">
                            <a href="news">Read Latest News</a>
                        </div>
                        <div class="main-button">
                            <a href="https://citygovernmentofcalapan.gov.ph/" target="_blank">Visit Official Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="owl-banner owl-carousel">
                    <div class="item">
                        <img src="assets/images/carousel1.jpg" alt="Calapan Oriental Mindoro">
                    </div>
                    <div class="item">
                        <img src="assets/images/carousel2.jpg" alt="Calapan Oriental Mindoro">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="width: 600px;">
                <div class="card border-0 shadow-sm rounded-3">
                    <img src="assets/images/no_image.jpeg" class="card-img-top rounded-3" alt="Img">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title">Username</h5>
                        </div>
                        <p class="card-text">Calapan Festival HAHAHA</p>
                        <div>
                            <a href="UserPage/view.php?slug=" class="text-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </div>
  <?php include('include\footer.php'); ?>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    // Function to dynamically populate the dropdown menu with categories
      document.addEventListener("DOMContentLoaded", function() {
          var dropdownDiv = document.getElementById("news-dropdown");

          // Make an AJAX request to fetch categories
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function() {
              if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                  var categories = JSON.parse(this.responseText);
                  categories.forEach(function(category) {
                      var listItem = document.createElement("li");
                      var link = document.createElement("a");
                      link.setAttribute("href", "#" + category.name.toLowerCase());
                      link.textContent = category.name;
                      listItem.appendChild(link);
                      dropdownDiv.appendChild(listItem);
                  });
              }
          };
          xhr.open("GET", "/getCategories", true); // Use the correct route without controller name
          // Replace '/controller/getCategories' with your actual route
          xhr.send();
      });

</script>
</body>
</html>