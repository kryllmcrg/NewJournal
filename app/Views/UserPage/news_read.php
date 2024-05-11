<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>CIO Official Website</title>
    <!-- Mobile Specific Metas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <!-- Favicon -->
    <link rel="icon" type="assets/image/png" href="<?= base_url('assets/images/cio.png') ?>">
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/bootstrap.min.css') ?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.min.css') ?>">
    <!-- Animation -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/animate-css/animate.css') ?>">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css') ?>">
    <!-- Colorbox -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/colorbox/colorbox.css') ?>">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    
</head>
<style>
    .reply-form {
        display: none;
        margin-top: 10px;
    }

    .reply-form input[type="text"] {
        width: calc(100% - 110px); /* Adjust the width of the input field */
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
    }

    .submit-reply {
        display: inline-block;
        vertical-align: middle;
        cursor: pointer;
        background-color: #007bff;
        color: #fff;
        padding: 5px 10px;
        border-radius: 3px;
    }

    .submit-reply:hover {
        background-color: #0056b3; /* Darker color on hover */
    }
    .star {
    color: darkorchid; /* Set the color of the star to violet */
    }

    .star:hover {
        color: purple; /* Change color to purple on hover */
    }
</style>

<body>
    <?php include ('include\header.php'); ?>

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0 order-lg-1">
                    <div class="post-content post-single" id="news-article">
                        <div class="post-media post-image">
                            <?php if (isset($article['videos'])) {
                                echo '<iframe src="' . json_decode($article['videos'])[0] . '" width="640" height="360" frameborder="0" allowfullscreen></iframe>';
                            } else {
                                echo "<img loading='lazy' class='w-100' src=" . json_decode($article['images'])[0] . " alt='news-image' />";
                            } ?>
                        </div>
                        <div class="post-body">
                            <div class="entry-header">
                                <div class="post-meta">
                                    <span class="post-author">
                                        <i class="far fa-user"></i> <?= $article['author'] ?>
                                    </span>
                                    <span class="post-cat">
                                        <i class="far fa-folder-open"></i> <?= $category_name ?>
                                    </span>
                                    <span class="post-meta-date">
                                        <i class="far fa-calendar"></i> <?= $article['publication_date'] ?>
                                    </span>
                                    <span class="post-comment">
                                        <i class="far fa-comment"></i> <?= count($comments) ?><a href="#"
                                            class="comments-link"><?= (count($comments) == 1) ? 'Comment' : 'Comments' ?></a>
                                    </span>
                                    <span class="post-pdf">
                                        <i class="far fa-file-pdf"></i>
                                        <!-- <a href="path_to_your_pdf_file.pdf"
                                            download></a> -->
                                        <button id="download-pdf" class="btn btn-secondary">Download PDF</button>
                                    </span>
                                </div>
                                <h2 class="entry-title"><?= $article['title'] ?></h2>
                            </div><!-- header end -->
                            <div class="entry-content">
                                <?= $article['content'] ?>
                            </div>
                            
                        </div><!-- post-body end -->
                    </div><!-- post content end -->
                    <!-- POST COMMENTS -->
                    <div id="comments" class="comments-area">
                        <!-- ADD COMMENTS -->
                        <div class="comments-form border-box">
                            <h3 class="title-normal">Add a comment</h3>
                            <form action="<?= base_url('addComment') ?>" method="post" role="form">
                                <input type="hidden" name="news_id" value="<?= $article['news_id'] ?>">
                                <input type="hidden" name="user_id" value="<?= session()->get('user_id') ?>">
                                <input type="hidden" name="parent_comment_id" id="parent_comment_id" value="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">
                                                <input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required>
                                            </label>
                                        </div>
                                    </div><!-- Col 4 end -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="message">
                                                <textarea class="form-control required-field" id="message" name="message" placeholder="Your Comment" rows="10" required></textarea>
                                            </label>
                                        </div>
                                    </div><!-- Col 12 end -->
                                </div><!-- Form row end -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form><!-- Form end -->
                        </div><!-- Comments form end -->

                        <?php if (!empty($comments)): ?>
                            <h3 class="comments-heading"><?= count($comments) ?> Comments</h3>
                            <ul class="comments-list">
                            <?php foreach ($comments as $comment): ?>
                                        <li>
                                            <div class="comment d-flex">
                                                <img loading="lazy" class="comment-avatar" alt="author" src="images/news/avator1.png">
                                                <div class="comment-body">
                                                    <div class="meta-data">
                                                        <span class="comment-author mr-3"><?= $comment['comment_author'] ?></span>
                                                        <span class="comment-date float-right"><?= $comment['comment_date'] ?></span>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p><?= $comment['comment'] ?></p>
                                                    </div>
                                                   <!-- Reply link -->
                                                   <div class="text-left">
                                                        <input type="hidden" name="news_id" value="<?= $article['news_id'] ?>">
                                                        <input type="hidden" name="user_id" value="<?= session()->get('user_id') ?>">
                                                        <input type="hidden" name="parent_comment_id" id="parent_comment_id" value="">
                                                        <a class="comment-reply font-weight-bold" href="#" data-comment-id="<?= $comment['comment_id'] ?>">Reply</a>
                                                        <div class="reply-form" style="display: none;">
                                                            <input type="hidden" id="parent_comment_id" value="<?= $comment['comment_id'] ?>">
                                                            <input type="text" class="form-control required-field" id="message" name="message" placeholder="Your Comment" required>
                                                            <span class="submit-reply" data-comment-id="<?= $comment['comment_id'] ?>">
                                                                <i class="far fa-folder-open"></i> Submit Reply
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Comments end -->
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                        <?php else: ?>
                            <h3 class="comments-heading">No Comments</h3>
                        <?php endif; ?>
                    </div><!-- Post comment end -->
                </div><!-- Col 8 end -->

                <!-- Sidebar Col -->
                <div class="col-lg-4 order-lg-2">
                    <div class="sidebar sidebar-right">
                        <!-- Recent Posts -->
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="img" src="images/news/news1.jpg"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">We Just Completes $17.6 Million Medical Clinic In
                                                Mid-missouri</a>
                                        </h4>
                                    </div>
                                </li><!-- 1st post end-->
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="img" src="images/news/news2.jpg"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">Thandler Airport Water Reclamation Facility Expansion Project
                                                Named</a>
                                        </h4>
                                    </div>
                                </li><!-- 2nd post end-->
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="img" src="images/news/news3.jpg"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">Silicon Bench and Corners Provide New Seating for A...</a>
                                        </h4>
                                    </div>
                                </li><!-- 3rd post end-->
                            </ul>
                        </div><!-- Recent post end -->
                        <!-- CATEGORIES -->
                        <div class="widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="arrow nav nav-tabs">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Commercial</a></li>
                                <li><a href="#">Building</a></li>
                                <li><a href="#">Safety</a></li>
                                <li><a href="#">Structure</a></li>
                            </ul>
                        </div><!-- Categories end -->

                        <!-- MOST LIKED -->
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Most Liked Posts</h3>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="img" src="images/news/news1.jpg"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">We Just Completes $17.6 Million Medical Clinic In
                                                Mid-missouri</a>
                                        </h4>
                                    </div>
                                </li><!-- 1st post end-->
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="img" src="images/news/news2.jpg"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">Thandler Airport Water Reclamation Facility Expansion Project
                                                Named</a>
                                        </h4>
                                    </div>
                                </li><!-- 2nd post end-->
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="img" src="images/news/news3.jpg"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">Silicon Bench and Corners Provide New Seating for A...</a>
                                        </h4>
                                    </div>
                                </li><!-- 3rd post end-->
                            </ul>
                        </div><!-- MOST LIKED end -->
                        <!-- Star rating -->
                        <div class="form-group">
                                    <label for="rating">Rating:</label><br>
                                    <div class="rating">
                                        <input type="hidden" name="rating" id="rating" value="0"> <!-- Hidden input to store the selected rating -->
                                        <i class="far fa-star star" data-rating="1"></i> <!-- Star icon for rating 1 -->
                                        <i class="far fa-star star" data-rating="2"></i> <!-- Star icon for rating 2 -->
                                        <i class="far fa-star star" data-rating="3"></i> <!-- Star icon for rating 3 -->
                                        <i class="far fa-star star" data-rating="4"></i> <!-- Star icon for rating 4 -->
                                        <i class="far fa-star star" data-rating="5"></i> <!-- Star icon for rating 5 -->
                                    </div>
                                    <p>Average Rating: <span id="average-rating">0.0</span></p>
                                </div>
                                <div class="row">
                            <div class="col-md-10">
                                <div class="progress rounded-0" style="height: 30px; width: 100%; background-color: #BC7FCD;">
                                    <div class="progress-bar rounded-0" role="progressbar" style="width: 94%; background-color: #8E8FFA;" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">4.7</div>
                                </div>
                                <ul class="list-group mt-3 rounded-0 d-flex flex-row">
                                    <li class="list-group-item justify-content-between align-items-center rounded-0 bg-purple flex-grow-1" style="margin-right: 5px;">
                                        5 Star
                                        <span class="badge badge-primary badge-pill" style="background-color: #8E8FFA;">1.4K</span>
                                    </li>
                                    <li class="list-group-item justify-content-between align-items-center rounded-0 bg-purple flex-grow-1" style="margin-right: 5px;">
                                        4 Star
                                        <span class="badge badge-primary badge-pill" style="background-color: #8E8FFA;">178</span>
                                    </li>
                                    <li class="list-group-item justify-content-between align-items-center rounded-0 bg-purple flex-grow-1" style="margin-right: 5px;">
                                        3 Star
                                        <span class="badge badge-primary badge-pill" style="background-color: #8E8FFA;">84</span>
                                    </li>
                                    <li class="list-group-item justify-content-between align-items-center rounded-0 bg-purple flex-grow-1" style="margin-right: 5px;">
                                        2 Star
                                        <span class="badge badge-primary badge-pill" style="background-color: #8E8FFA;">30</span>
                                    </li>
                                    <li class="list-group-item justify-content-between align-items-center rounded-0 bg-purple flex-grow-1" style="margin-right: 5px;">
                                        1 Star
                                        <span class="badge badge-primary badge-pill" style="background-color: #8E8FFA;">44</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- Sidebar end -->
                </div><!-- Sidebar Col end -->
            </div><!-- Main row end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

    <?php include ('include\footer.php'); ?>

    <!-- Javascript Files -->
    <!-- initialize jQuery Library -->
    <script src="<?= base_url('assets/plugins/jQuery/jquery.min.js') ?>"></script>
    <!-- Bootstrap jQuery -->
    <script src="<?= base_url('assets/plugins/bootstrap/bootstrap.min.js') ?>" defer></script>
    <!-- Slick Carousel -->
    <script src="<?= base_url('assets/plugins/slick/slick.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/slick/slick-animation.min.js') ?>"></script>
    <!-- Color box -->
    <script src="<?= base_url('assets/plugins/colorbox/jquery.colorbox.js') ?>"></script>
    <!-- shuffle -->
    <script src="<?= base_url('assets/plugins/shuffle/shuffle.min.js') ?>" defer></script>

    <!-- Google Map API Key-->
    <script src="<?= base_url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU') ?>"
        defer></script>
    <!-- Google Map Plugin-->
    <script src="<?= base_url('assets/plugins/google-map/map.js') ?>" defer></script>

    <!-- Template custom -->
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    <script>
    $(document).ready(function() {
        $(".comment-reply").click(function(e) {
            e.preventDefault();
            var commentId = $(this).data("comment-id");
            console.log("Comment ID:", commentId); // Log comment ID to check if it's correct
            // Find the closest parent comment and then find the reply form within it
            $(this).closest('.text-left').find(".reply-form").toggle(); // Toggle the visibility of the reply form for the clicked comment
        });
    });
</script>

    <script>

        window.onload = function () {
            document.getElementById('download-pdf').addEventListener('click', () => {
                var element = document.getElementById('news-article');
                console.log(element);
                var opt = {
                    margin: 1,
                    filename: 'myfile.pdf',
                    image: { type: 'jpeg', quality: 0.98 },
                    html2canvas: { scale: 2 },
                    jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
                };

                // New Promise-based usage:
                html2pdf().from(element).set(opt).save();
            });
        }
    </script>

    <script>
        $(document).ready(function() {
    $('.star').click(function() {
        var rating = parseInt($(this).data('rating')); // Get the selected rating
        var totalStars = $('.star').length; // Total number of stars
        
        // Update star colors
        $('.star').removeClass('fas star').addClass('far star'); // Reset all stars to empty
        $(this).prevAll('.star').addBack().removeClass('far star').addClass('fas star'); // Fill clicked star and previous stars

        // Calculate average rating
        var totalRating = 0;
        var selectedStars = $(this).prevAll('.star').length + 1; // Count the number of selected stars
        $('.star.fas').each(function() {
            totalRating += parseInt($(this).data('rating'));
        });
        var averageRating = (totalRating / selectedStars); // Calculate average rating
        
        // Update average rating display
        $('#average-rating').text(averageRating.toFixed(1)); // Display average rating with one decimal place
    });
});
    </script>
</body>

</html>