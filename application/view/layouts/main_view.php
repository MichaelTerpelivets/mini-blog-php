<!DOCTYPE html>
<html lang="en">
<?php include_once "../application/view/layouts/header.php"; ?>
<body class="">
<?php include_once "../application/view/layouts/nav_bar.php"; ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url(<?= 'http://' . $_SERVER['HTTP_HOST'] . '/' ?>images/main-image.jpg)">
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
    </div>
</header>
<div class="container">
        <?php include_once "../application/view/" . $content_view; ?>
</div>
<hr>
<?php include_once "../application/view/layouts/footer.php"; ?>
</body>
</html>