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
</style>
<body>
  
  <?php include('include\header.php'); ?>

  <section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <?php foreach($newsData as $news): ?>
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="post">
          <div class="post-media post-image">
            <img loading="lazy" class="img-fluid" alt="post-image"><?= $news['images']; ?>
          </div>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> Admin</a>
                </span>
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> News</a>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                    class="comments-link">Comments</a></span>
              </div>
              <h2 class="entry-title">
                <a href="kalapnews"><?= $news['title']; ?></a>
              </h2>
            </div><!-- header end -->

            <div class="entry-content">
              <p><?= $news['content']; ?></p>
            </div>

            <div class="post-footer">
              <a href="kalapnews" class="btn btn-primary">Continue Reading</a>
            </div>

          </div><!-- post-body end -->
        </div><!-- 1st post end -->
        <?php endforeach ?>

        <div class="post">
          <div class="post-media post-image">
            <img loading="lazy" src="assets/images/news/bridge.jpg" class="img-fluid" alt="post-image">
          </div>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> Admin</a>
                </span>
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> News</a>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                    class="comments-link">Comments</a></span>
              </div>
              <h2 class="entry-title">
                <a href="maidlang">Brgy. Maidlang rehabilitation and regravelling of road going to Abaton Bridge.</a>
              </h2>
            </div><!-- header end -->

            <div class="entry-content">
              <p>Calapan City, Oriental Mindoro announces rehab and regravelling of road in Brgy. Maidlang leading to Abaton Bridge, aiming to improve accessibility and safety.</p>
            </div>

            <div class="post-footer">
              <a href="news-single.html" class="btn btn-primary">Continue Reading</a>
            </div>

          </div><!-- post-body end -->
        </div><!-- 2nd post end -->

        <div class="post">
          <div class="post-media post-image">
            <img loading="lazy" src="assets/images/news/inflation.jpg" class="img-fluid" alt="post-image">
          </div>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> Admin</a>
                </span>
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> News</a>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                    class="comments-link">Comments</a></span>
              </div>
              <h2 class="entry-title">
                <a href="inflation">PSA: Ormin Inflation Rate, bumaba sa 2.5% nitong Enero 2024</a>
              </h2>
            </div><!-- header end -->

            <div class="entry-content">
              <p>Patuloy na bumababa ang inflation rate sa lalawigan ng Oriental Mindoro at ayon nga sa PSA Provincial Statistical Office, pumalo ito sa 2.5% nitong Enero 2024.
                
                Kabilang sa naging bahagi ng pagbaba ng implasyon ay ang Housing, Water, Electricty, Gas and Other Fuels, (2) Transport, and (3) Furnishings, Household Equipment, and Routine Household.
                
                Samantala, patuloy naman ang pagtaas ng ilang bilihin tulad ng alcoholic beverages at tobacco, gamot at health services, bigas, gatas, dairy products, itlog, prutas, karne, at mga ready-made food.</p>
            </div>

            <div class="post-footer">
              <a href="news-single.html" class="btn btn-primary">Continue Reading</a>
            </div>

          </div><!-- post-body end -->
        </div><!-- 3rd post end -->

        <nav class="paging" aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
          </ul>
        </nav>

      </div><!-- Content Col end -->

      <div class="col-lg-4">

        <div class="sidebar sidebar-right">
          <div class="widget recent-posts">
            <h3 class="widget-title">Recent Posts</h3>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="assets\images\slider-main\kalap.png"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">Get ready to mark your calendars because the KALAP FESTIVAL 2024 is just around the corner!</a>
                  </h4>
                </div>
              </li><!-- 1st post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="assets/images/news/bridge.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">Brgy. Maidlang rehabilitation and regravelling of road going to Abaton Bridge.</a>
                  </h4>
                </div>
              </li><!-- 2nd post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="assets/images/news/inflation.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">PSA: Ormin Inflation Rate, bumaba sa 2.5% nitong Enero 2024</a>
                  </h4>
                </div>
              </li><!-- 3rd post end-->

            </ul>

          </div><!-- Recent post end -->

          <div class="widget">
            <h3 class="widget-title">Categories</h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Entertainment</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Politics</a></li>
              <li><a href="#">Culture</a></li>
            </ul>
          </div><!-- Categories end -->

          <div class="widget">
            <h3 class="widget-title">Archives </h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Feburay 2024</a></li>
              <li><a href="#">January 2024</a></li>
              <li><a href="#">December 2023</a></li>
              <li><a href="#">November 2023</a></li>
              <li><a href="#">October 2023</a></li>
            </ul>
          </div><!-- Archives end -->

          <div class="widget widget-tags">
            <h3 class="widget-title">Tags </h3>

            <ul class="list-unstyled">
              <li><a href="#">News</a></li>
              <li><a href="#">Politics</a></li>
              <li><a href="#">Crime</a></li>
              <li><a href="#">Rehabilitation</a></li>
              <li><a href="#">Finance</a></li>
              <li><a href="#">Safety</a></li>
              <li><a href="#">Kalap</a></li>
            </ul>
          </div><!-- Tags end -->


        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


  <?php include('include\footer.php'); ?>
   <!-- Javascript Files
  ================================================== -->

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