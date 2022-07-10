<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta name="title" content="<?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?>" />
<meta name="description" content="<?= $Wcms->page('description') ?>">
<link rel="stylesheet" href="/themes/cas/assets/css/lib/bootstrap.min.css">
<link rel="stylesheet" href="/themes/cas/assets/css/all.min.css">
<link rel="stylesheet" href="/themes/cas/assets/css/line-awesome.min.css">
<link rel="stylesheet" href="/themes/cas/assets/css/lib/animate.css">
<link rel="stylesheet" href="/themes/cas/assets/css/lib/slick.css">
<link rel="shortcut icon" href="/data/files/favicon.png">
<link rel="stylesheet" href="/themes/cas/assets/css/main.css?v=<?php echo(rand(1,10));?><?php echo(rand(1,10));?>">
<?= $Wcms->css() ?>
</head>
<body data-bs-spy="scroll" data-bs-offset="170" data-bs-target=".privacy-policy-sidebar-menu">
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<div class="overlay"></div>
<div class="preloader">
<div class="scene" id="scene">
<input type="checkbox" id="andicator" />
<div class="cube">
<div class="cube__face cube__face--front"><i></i></div>
<div class="cube__face cube__face--back"><i></i><i></i></div>
<div class="cube__face cube__face--right"><i></i> <i></i> <i></i> <i></i> <i></i></div>
<div class="cube__face cube__face--left"><i></i> <i></i> <i></i> <i></i> <i></i> <i></i></div>
<div class="cube__face cube__face--top"><i></i> <i></i> <i></i></div>
<div class="cube__face cube__face--bottom"><i></i> <i></i> <i></i> <i></i></div>
</div>
</div>
</div>
<div class="header">
<div class="container">
<div class="header-bottom">
<div class="header-bottom-area align-items-center">
<div class="logo"><a href="/"><img src="/data/files/logo.png" alt="<?= $Wcms->page('title') ?>"></a></div>
<ul class="menu">
<li><a href="/">Home</a></li>
<li><a href="/about">About</a></li>
<li><a href="/games">Games <span class="badge badge--sm badge--base text-dark">NEW</span></a></li>
<li><a href="/faq">Faq</a></li>
<li>
<a href="#0">Pages</a>
<ul class="sub-menu">
<li><a href="/privacy">Privacy</a></li>
<li><a href="/terms">Terms & Conditions</a></li>
<li><a href="/sign-up">Sign Up</a></li>
</ul>
</li>
<li>
<a href="/contact">Contact</a>
</li>
<button class="btn-close btn-close-white d-lg-none"></button>
</ul>
<div class="header-trigger-wrapper d-flex d-lg-none align-items-center">
<div class="header-trigger me-4">
<span></span>
</div>
<a href="/sign-up" class="cmn--btn active btn--md d-none d-sm-block">Sign Up</a>
</div>
</div>
</div>
</div>
</div>

<section class="inner-banner bg_img" style="background: url('/themes/cas/assets/images/inner-banner/bg2.jpg') top;">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7 col-xl-6 text-center">
<h2 class="title text-white"><?= $Wcms->page('keywords') ?></h2>
</div>
</div>
</div>
</section>

<section class="blog-details padding-top padding-bottom">
<div class="container">
<div class="row gy-5">
<div class="col-lg-12">
<div class="blog-details-wrapper">
<div class="details-content">
<h3 class="title"><?= $Wcms->page('title') ?></h3>
<ul class="meta-post"><?= $Wcms->page('description') ?></ul>
<div class="details-inner">


<?= $Wcms->page('content') ?>


</div>
</div>
</div>
<div class="comment__area">
<div class="write__comment__area mt-5">


<?= $Wcms->block('subside') ?>


</div>
</div>
</div>
</div>
</section>

<footer class="footer-section bg_img" style="background: url(/themes/cas/assets/images/footer/bg.jpg) center;">
<div class="footer-top">
<div class="container">
<div class="footer-wrapper d-flex flex-wrap align-items-center justify-content-md-between justify-content-center">
<div class="logo mb-3 mb-md-0"><a href="/"><img src="/data/files/logo.png" alt="<?= $Wcms->page('title') ?> on <?= $Wcms->get('config', 'siteTitle') ?>"></a></div>
<ul class="footer-links d-flex flex-wrap justify-content-center">
<li><a href="/games">Games</a></li>
<li><a href="/terms">Terms & Conditions</a></li>
<li><a href="/privacy">Privacy Policy</a></li>
</ul>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="footer-wrapper d-flex flex-wrap justify-content-center align-items-center text-center">
<p class="copyright text-white"><?= $Wcms->footer() ?></p>
</div>
</div>
</div>
<div class="shapes">
<img src="/themes/cas/assets/images/footer/shape.png" alt="footer" class="shape1">
</div>
</footer>

<script src="/themes/cas/assets/js/lib/jquery-3.6.0.min.js"></script>
<script src="/themes/cas/assets/js/lib/bootstrap.min.js"></script>
<script src="/themes/cas/assets/js/lib/slick.min.js"></script>
<script src="/themes/cas/assets/js/main.js"></script>
<?= $Wcms->js() ?>

</body>
</html>