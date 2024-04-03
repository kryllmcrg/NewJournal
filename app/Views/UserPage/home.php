<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>CIO Offcial Website</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="assets/image/png" href="assets/images/cio.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="assets/plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="assets/plugins/slick/slick.css">
  <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="assets/plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<style>
    .nav {
        color: black;
    }
    
    .content-container {
        max-height: 100px; /* Adjust this value as needed */
        overflow: hidden;
    }

    .read-more {
        margin-top: 10px;
    }
</style>
<body>
  
  <?php include('include\header.php'); ?>
  <div class="banner-carousel banner-carousel-2 mb-0">
      <div class="banner-carousel-item" style="background-image:url(assets/images/slider-main/kalap.png)">
        <div class="container">
            <div class="box-slider-content">
              <div class="box-slider-text">
                  <h2 class="box-slide-title">Celebrate Kalap Festival</h2>
                  <h3 class="box-slide-sub-title">Experience the Vibrancy of Calapan City</h3>
                  <p class="box-slide-description">Join us in commemorating the colorful Kalap Festival, a celebration of culture, tradition, and unity in Calapan City, Oriental Mindoro. Immerse yourself in the rich heritage of the region, witness dazzling performances, indulge in local delicacies, and create lasting memories with your loved ones.</p>
                  <p>
                    <a href="#" class="slider btn btn-primary">Read more</a>
                  </p>
              </div>
            </div>
        </div>
      </div>

      <div class="banner-carousel-item" style="background-image:url(assets/images/slider-main/dokting.jpg)">
        <div class="slider-content text-left">
            <div class="container">
              <div class="box-slider-content">
                <div class="box-slider-text">
                    <h2 class="box-slide-title">Remembering Dentist Doc Ting</h2>
                    <h3 class="box-slide-sub-title">A Loss to the Community</h3>
                    <p class="box-slide-description">In the wake of the tragic loss of Dentist Doc Ting, a pillar of our community and dedicated public servant, we mourn the untimely passing of a beloved figure. His contributions to the betterment of Calapan City, Oriental Mindoro, will forever be remembered. Let us honor his memory by cherishing the values he stood for and continuing his legacy of service and compassion.</p>
                    <p><a href="#" class="slider btn btn-primary" aria-label="about-us">Read more</a></p>
                  </div>
              </div>
            </div>
        </div>
      </div>
</div>

<section id="ts-features" class="ts-features pb-2">
    <div class="container">
        <div class="row">
            <?php foreach ($newsData as $article): ?>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100 h-100" src="<?= json_decode($article['images'])[0] ?>" alt="news-image" style="object-fit: cover; width: 100%; height: 100%;" />
                        </div>
                        <div class="d-flex">
                            <div class="ts-news-info">
                                <h3 class="news-box-title"><a href="<?= base_url('news_read' . $article['news_id']) ?>"><?= $article['title'] ?></a></h3>
                                <div class="content-container">
                                    <p class="advisoryContent"><?= $article['content'] ?></p>
                                </div>
                                <p><strong>Category:</strong> <?= $article['category_id'] ?></p>
                                <p><strong>Author:</strong> <?= $article['author'] ?></p>
                                <p><strong>Publication Date:</strong> <?= date('F j, Y', strtotime($article['publication_date'])) ?></p>
                                <a class="learn-more d-inline-block" href="<?= base_url('news_read' . $article['news_id']) ?>" aria-label="news-details"><i class="fa fa-caret-right"></i> Read more</a>
                            </div>
                        </div>
                    </div><!-- Service box end -->
                </div><!-- Col end -->
            <?php endforeach; ?>
        </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->

  <?php include('include\footer.php'); ?>
   <!-- Javascript Files
  ================================================== -->

  <script>
    function formatAdvisoryDetails(content) {
        // Define the maximum width percentage or retrieve it from an appropriate source
        var maxWidthPercentage = 80; // Adjust this according to your needs

        // Calculate the maximum width based on the window width and maximum width percentage
        var maxWidth = (window.innerWidth * maxWidthPercentage) / 50;

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
            var content = advisoryContents[i].innerText;
            var truncatedContent = formatAdvisoryDetails(content);
        }
    };
</script>

  <!-- initialize jQuery Library -->
  <script src="assets/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="assets/plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="assets/plugins/slick/slick.min.js"></script>
  <script src="assets/plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="assets/plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="assets/plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="assets/plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="assets/js/script.js"></script>  
</body>
</html>