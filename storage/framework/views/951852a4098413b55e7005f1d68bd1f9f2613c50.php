<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ===================================== Meta site ================================================ -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- ====== Laravel description site edit delete from admin panel ================== -->
    <meta name="description" content="<?php echo Setting()->MetaDescription; ?>">
    <!-- ====== Laravel author site edit delete from admin panel ====================== -->
    <meta name="author" content="<?php echo Setting()->Name; ?>">
    <!-- ====== Laravel keywords site edit delete from admin panel ================== -->
    <meta name="keywords" content="<?php echo Setting()->MetaKeyWords; ?>">
    <!-- ====== Laravel robots site edit delete from admin panel ================== -->
    <meta name="robots" content="<?php echo Setting()->SiteTitle; ?>">
    <!-- ====== Laravel favicon icon ================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('assets/img/Favicon/apple-icon-57x57.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('assets/img/Favicon/apple-icon-60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('assets/img/Favicon/apple-icon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/img/Favicon/apple-icon-76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('assets/img/Favicon/apple-icon-114x114.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('assets/img/Favicon/apple-icon-120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('assets/img/Favicon/apple-icon-144x144.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('assets/img/Favicon/apple-icon-152x152.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/img/Favicon/apple-icon-180x180.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo e(asset('assets/img/Favicon/android-icon-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset(Setting()->FaviconOne)); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset(Setting()->FaviconTwo)); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset(Setting()->FaviconThree)); ?>">
    <link rel="manifest" href="<?php echo e(asset('assets/img/Savicon/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ====== Laravel favicon icon================== -->
    <!-- ====== Laravel title site edit delete from admin panel ================== -->
    <?php if(isset(Setting()->SiteTitle)): ?>
    <title><?php echo e(Setting()->SiteTitle); ?></title>
    <?php else: ?>
    <title>Site Title</title>
    <?php endif; ?>
    <!-- ============================== GOOGLE WEB FONT ========================== -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400" rel="stylesheet">
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.css')); ?>" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/nice-select.css')); ?>" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/icons.css')); ?>" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/main.css')); ?>" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
</head>
<body>

    <!--================ Start Header Area =================-->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- =============================== BASE ======================================== -->
                <a class="navbar-brand" href="<?php echo url('/'); ?>">
                    <img src="<?php echo e(asset(Setting()->LogoPicture)); ?>" alt="">
                </a>
                <!-- =============================== BASE  ======================================== -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <!-- =============================== BASE  ======================================== -->
                <?php $__currentLoopData = Menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(url('')); ?>/<?php echo e($Menu->url); ?>" target="<?php echo $Menu->target; ?>"><?php echo $Menu->title; ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php if(auth()->guard()->guest()): ?>
                <!-- =============================== BASE ======================================== -->
                <a href="<?php echo e(route('login')); ?>" class="genric-btn primary small"><i class=" icon-material-outline-face"></i> <?php echo e(__('Login')); ?></a>
                <?php else: ?>
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="genric-btn primary small"><i class="icon-feather-log-in"></i> <?php echo e(__('Logout')); ?></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
                <?php endif; ?>
                <!-- =============================== BASE ======================================== -->
                
            </div>
        </div>
    </nav>
</header>
<!--================ Start Header Area =================-->
<!--================ Start Header Area =================-->

<!--=============================================================== End Header Area =================-->
<?php echo $__env->yieldContent('content'); ?>
<!--=============================================================== start footer Area =================-->
<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <!-- =============================== Setting BASE ======================================== -->
                        <h4 class="footer_title large_title"><img src="<?php echo e(asset(Setting()->LogoPicture)); ?>" alt="Logo" style="width: 50%;"></h4>
                        <p>
                            <!-- =============================== Setting BASE ======================================== -->
                            <?php echo e(Setting()->about_en); ?>

                        </p>
                        <!-- =============================== Setting BASE ======================================== -->
                        <P><?php echo e(Setting()->Location); ?></P>
                        <p>
                          Copyright &copy; Tous droits réservés <a href="<?php echo e(url('/')); ?>" target="_blank"><?php echo e(Setting()->SiteTitle); ?></a>
                      </p>
                      <!-- =============================== Setting BASE ======================================== -->
                  </div>
              </div>
              <div class="col-md-3">
                <div class="single-footer-widget tp_widgets">
                    
                </div> 
            </div>
            <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h4 class="footer_title">Contactez-nous</h4>
                    <div class="ml-5">
                        <p class="sm-head">
                            <span class="icon-material-outline-location-on"></span>
                            Siège social
                        </p>
                        <!-- =============================== Setting BASE ======================================== -->
                        <p><?php echo e(Setting()->Location); ?></p>

                        <p class="sm-head">
                            <span class="icon-feather-phone"></span>
                            Numéro de téléphone
                        </p>
                        <p>
                            <!-- =============================== Setting BASE ======================================== -->
                            <?php echo e(Setting()->PhoneNumber); ?>

                        </p>

                        <p class="sm-head">
                            <span class="icon-material-outline-email"></span>
                            Email
                        </p>
                        <p>
                            <!-- =============================== Setting BASE ======================================== -->
                            <?php echo e(Setting()->Email); ?>

                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</footer>
<!--================ End footer Area =================-->
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/vendor/jquery-2.2.4.min.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/vendor/bootstrap.min.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/jquery.ajaxchimp.min.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/parallax.min.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.nice-select.min.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/countdown.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/english/layout/main.blade.php ENDPATH**/ ?>