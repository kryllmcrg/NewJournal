<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="templatemo">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <title>Home</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style2.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="shortcut icon" href="assets/images/ciologo.png" />
</head>

<style>
    body{
    margin: 0;
    padding: 0;
    font-family: 'roboto' , sans-serif;
    background-color: #F2F2F2;
}
h1{
    text-align: center;
    color: #333333;
}
.cardcontainer{
    width: 350px;
    height: 500px;
    background-color: white;
    margin-left: auto;
    margin-right: auto;
    transition: 0.3s;
}
.cardcontainer:hover{
    box-shadow: 0 0 45px gray;
}
.photo{
    height: 300px;
    width: 100%;
}
.photo img{
    height: 100%;
    width: 100%;
}
.txt1{
    margin: auto;
    text-align: center;
    font-size: 17px;
}
.content{
    width: 80%;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: -33px;
}
.photos{
    width: 90px;
    height: 30px;
    background-color: #E74C3C;
    color: white;
    position: relative;
    top: -30px;
    padding-left: 10px;
    font-size: 20px;
}
.txt4{
    font-size:27px;
    position: relative;
    top: 33px;
}
.txt5{
    position: relative;
    top: 18px;
    color: #E74C3C;
    font-size: 23px;
}
.txt2{
    position: relative;
    top: 10px;
}
.cardcontainer:hover > .photo{
    height: 200px;
    animation: move1 0.5s ease both;
}
@keyframes move1{
    0%{height: 300px}
    100%{height: 200px}
}
.cardcontainer:hover > .content{
    height: 200px;
}
.footer{
    width: 80%;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    background-color: white;
    position: relative;
    top: -15px;
}
.btn{
    position: relative;
    top: 20px;
}
#heart{
    cursor: pointer;
}
.like{
    float: right;
    font-size: 22px;
    position: relative;
    top: 20px;
    color: #333333;
}
.fa-gratipay{
    margin-right: 10px;
    transition: 0.5s;
}
.fa-gratipay:hover{
    color: #E74C3C;
}
.txt3{
    color: gray;
    position: relative;
    top: 18px;
    font-size: 14px;
}
.comments{
    float: right;
    cursor: pointer;
}
.fa-clock, .fa-comments{
    margin-right: 7px;
}
</style>


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

