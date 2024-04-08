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
    <link rel="icon" type="assets/image/png" href="<?= base_url('assets/images/cio.png')?>">
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/bootstrap.min.css')?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.min.css')?>">
    <!-- Animation -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/animate-css/animate.css')?>">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css')?>">
    <!-- Colorbox -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/colorbox/colorbox.css')?>">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>
<body>
<?php include('include\header.php'); ?>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="post-content post-single">
                    <div class="post-media post-image">
                        <img loading="lazy" class="w-100" src="<?= json_decode($article['images'])[0] ?>" alt="news-image" />
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
                                  <i class="far fa-comment"></i> 03<a href="#" class="comments-link">Comments</a>
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
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name"><input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required></label>
                                    </div>
                                </div><!-- Col 4 end -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="message"><textarea class="form-control required-field" id="message" name="message" placeholder="Your Comment" rows="10" required></textarea></label>
                                    </div>
                                </div><!-- Col 12 end -->
                            </div><!-- Form row end -->
                            <div class="clearfix">
                                <button class="btn btn-primary" type="submit" aria-label="post-comment">Post Comment</button>
                            </div>
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
                                            <div class="text-left">
                                                <a class="comment-reply font-weight-bold" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div><!-- Comments end -->
                                </li>
                                <!-- Reply form end -->
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <h3 class="comments-heading">No Comments</h3>
                    <?php endif; ?>
                </div><!-- Post comment end -->
            </div><!-- Col 8 end -->

            
            <!-- Sidebar Col -->
            <div class="col-lg-4">
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
                                        <a href="#">We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
                                    </h4>
                                </div>
                            </li><!-- 1st post end-->
                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="#"><img loading="lazy" alt="img" src="images/news/news2.jpg"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
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
                                        <a href="#">We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
                                    </h4>
                                </div>
                            </li><!-- 1st post end-->
                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="#"><img loading="lazy" alt="img" src="images/news/news2.jpg"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
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
                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->
        </div><!-- Main row end -->
    </div><!-- Container end -->
</section><!-- Main container end -->

<?php include('include\footer.php'); ?>

<!-- Javascript Files -->
<!-- initialize jQuery Library -->
<script src="<?= base_url('assets/plugins/jQuery/jquery.min.js')?>"></script>
<!-- Bootstrap jQuery -->
<script src="<?= base_url('assets/plugins/bootstrap/bootstrap.min.js')?>" defer></script>
<!-- Slick Carousel -->
<script src="<?= base_url('assets/plugins/slick/slick.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/slick/slick-animation.min.js')?>"></script>
<!-- Color box -->
<script src="<?= base_url('assets/plugins/colorbox/jquery.colorbox.js')?>"></script>
<!-- shuffle -->
<script src="<?= base_url('assets/plugins/shuffle/shuffle.min.js')?>" defer></script>

<!-- Google Map API Key-->
<script src="<?= base_url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU')?>" defer></script>
<!-- Google Map Plugin-->
<script src="<?= base_url('assets/plugins/google-map/map.js')?>" defer></script>

<!-- Template custom -->
<script src="<?= base_url('assets/js/script.js')?>"></script>  
</body>
</html>
