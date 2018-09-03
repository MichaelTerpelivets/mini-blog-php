<!DOCTYPE html>
<html lang="en">
<?php include_once "../application/view/layouts/header.php"; ?>
<body class="">
<?php include_once "../application/view/layouts/nav_bar.php"; ?>
<!-- Page Header -->
<header class="masthead"
        style="background-image: url(<?= 'http://' . $_SERVER['HTTP_HOST'] . '/' ?>images/main-image.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Mini Blog</h1>
                    <span class="subheading"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="popular">Popular:</h3>
                <div id="testimonial-slider" class="owl-carousel">
                    <?php if (!empty($data['popular_articles'])) : ?>
                        <?php foreach ($data['popular_articles'] as $popular_article): ?>
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="
                        <?= 'http://' . $_SERVER['HTTP_HOST'] . '/' ?>images/icon-bmw.png" alt="">
                                </div>
                                <br>
                                <h3 class="testimonial-title">
                                    <?= $popular_article['user_name'] ?></h3>
                                <small class="post">Comments -
                                    <?= $popular_article['comments_count'] ?></small>
                                <p class="description">
                                    <a style="color: cornsilk" href="
                                <?= 'http://' . $_SERVER['HTTP_HOST'] . '/home/details/' . $popular_article['id'] ?>">
                                        <?= $popular_article['title']; ?>
                                    </a>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <?php include_once "../application/view/" . $content_view; ?>
</div>
<hr>
<?php include_once "../application/view/layouts/footer.php"; ?>
</body>
</html>