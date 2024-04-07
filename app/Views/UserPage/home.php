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
    .liked i.fa-thumbs-up {
    color: violet;
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
            <div class="shuffle-btn-group">
                <label class="active" for="all">
                    <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked" onclick="filterNews('all')">Show All
                </label>
                <?php foreach ($categories as $category): ?>
                    <label for="<?= $category['category_name'] ?>">
                        <input type="radio" name="shuffle-filter" id="<?= $category['category_name'] ?>" value="<?= $category['category_name'] ?>" onclick="filterNews('<?= $category['category_name'] ?>')">
                        <?= $category['category_name'] ?>
                    </label>
                <?php endforeach; ?>
            </div>
            <div id="news-container" class="row"><!-- News container start -->
                <?php foreach ($newsData as $article): ?>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="ts-service-box d-flex flex-column align-items-center">
                            <div class="ts-service-image-wrapper" style="width: 350px; height: 250px; overflow: hidden;">
                                <img loading="lazy" class="w-100 h-100" src="<?= json_decode($article['images'])[0] ?>" alt="news-image" style="object-fit: cover; width: 100%; height: 100%;" />
                            </div>
                            <div class="d-flex flex-column align-items-start mt-3 w-100">
                                <div class="ts-news-info">
                                    <h3 class="news-box-title"><?= $article['title'] ?></h3>
                                    <div class="content-container">
                                        <p class="advisoryContent"><?= $article['content'] ?></p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3 w-100">
                                    <!-- Read More Link -->
                                    <a class="learn-more d-inline-block" href="<?= base_url('news_read/' . $article['news_id']) ?>" aria-label="news-details"><i class="fa fa-caret-right"></i> Read more</a>
                                    <!-- Like Icon -->
                                    <a class="like-icon me-3" href="#" data-news-id="<?= $article['news_id'] ?>" onclick="toggleLike(this)"><i class="far fa-thumbs-up"></i></a>
                                </div>
                            </div>
                        </div><!-- Service box end -->
                    </div><!-- Col end -->
                <?php endforeach; ?>
            </div><!-- News container end -->
        </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->



  <?php include('include\footer.php'); ?>
   <!-- Javascript Files
  ================================================== -->
  <script>
    // Define filterNews and displayNews functions in the same scope
    function filterNews(category) {
        // Make an AJAX request to the filterNews method in the controller
        fetch(`/filter-news/${category}`)
            .then(response => response.json())
            .then(data => {
                // Handle the filtered news data
                displayNews(data.newsData);
            })
            .catch(error => console.error('Error filtering news:', error));
    }

    function displayNews(newsData) {
    const newsContainer = document.getElementById('news-container');
    // Check if the target element exists
    if (newsContainer) {
        // Clear previous news articles
        newsContainer.innerHTML = '';

        // Display each news article
        newsData.forEach(article => {
            const articleElement = document.createElement('div');
            articleElement.classList.add('col-lg-4', 'col-md-6', 'mb-5');
            articleElement.innerHTML = `
            <div class="ts-service-box d-flex flex-column align-items-center">
                            <div class="ts-service-image-wrapper" style="width: 350px; height: 250px; overflow: hidden;">
                                <img loading="lazy" class="w-100 h-100" src="<?= json_decode($article['images'])[0] ?>" alt="news-image" style="object-fit: cover; width: 100%; height: 100%;" />
                            </div>
                            <div class="d-flex flex-column align-items-start mt-3 w-100">
                        <div class="ts-news-info">
                            <h3 class="news-box-title">${article.title}</h3>
                            <div class="content-container">
                                <p class="advisoryContent">${article.content}</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3 w-100">
                            <!-- Read More Link -->
                            <a class="learn-more d-inline-block" href="/news_read/${article.news_id}" aria-label="news-details"><i class="fa fa-caret-right"></i> Read more</a>
                            <!-- Like Icon -->
                            <a class="like-icon me-3" href="#" data-news-id="${article.news_id}" onclick="toggleLike(this)"><i class="far fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            `;
            newsContainer.appendChild(articleElement);
        });
    } else {
        console.error('News container element not found.');
    }
}


</script>


  <script>
    function toggleLike(element) {
        // Get the news ID from data attribute
        let newsId = element.dataset.newsId;

        // Send AJAX request to like endpoint
        fetch(`/like/${newsId}`, {
            method: 'POST'
        })
        .then(response => response.json())
        .then(data => {
            if (data.message === 'Like saved successfully') {
                // Change like icon color
                element.classList.add('liked');
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>

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