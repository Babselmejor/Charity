<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ start banner Area =================-->
    <style type="text/css">
        .banner-area{background:url('<?php echo e(asset(Setting()->HomePicture)); ?>') no-repeat;background-size:cover}
    </style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-end align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">Crowdsourcing</h1>
                    <p>Participez à des initiatives innovantes qui favorisent l'accès mondial aux investissements et aux opportunités. Ensemble, nous pouvons développer des solutions durables et inclusives pour répondre aux défis mondiaux. Explorez nos projets en cours et rejoignez-nous pour façonner un avenir meilleur pour tous.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Upcoming Event Area =================-->
    <section class="upcoming_event_area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><span>Crowdsourcing</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--================ Start Popular Causes Area =================-->
                <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                <div class="col-lg-6">
                    <div class="single_upcoming_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <!--================ Start Popular Causes Area =================-->
                                    <img class="img-fluid w-100" src="<?php echo asset($Event->image); ?>" alt="">
                                    <div class="date">
                                        <!--================ Start Popular Causes Area =================-->
                                        <?php echo e(date('M j', strtotime($Event->created_at))); ?>

                                    </div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <!--================ Start Popular Causes Area =================-->
                                        <a href="<?php echo url('Events'); ?>/<?php echo $Event->slug; ?>"><?php echo substr($Event->Title_en, 0, 190); ?></a>
                                    </h3>
                                    <p>
                                        <!--================ Start Popular Causes Area =================-->
                                        <?php echo substr($Event->Content_en, 0, 60); ?>

                                    </p>
                                    <!--================ Start Popular Causes Area =================-->
                                    <div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv1">
                                        <div class="single_time">
                                            <h4 class="days"><?php echo $Event->Days; ?></h4>
                                            <p>Jours</p>
                                        </div>
                                        <div class="single_time">
                                            <h4 class="hours"><?php echo $Event->Hours; ?></h4>
                                            <p>Heures</p>
                                        </div>
                                        <div class="single_time">
                                            <h4 class="minutes"><?php echo $Event->Minutes; ?></h4>
                                            <p>Minutes</p>
                                        </div>
                                    </div>
                                    <!--================ Start Popular Causes Area =================-->
                                    <a href="<?php echo url('Events'); ?>/<?php echo $Event->slug; ?>" class="primary-btn2">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--================ Start Popular Causes Area =================-->
                <?php echo $Events->links(); ?>

                <!--================ Start Popular Causes Area =================-->
            </div>
        </div>
    </section>
    <!--================ End Upcoming Event Area =================-->
    <!--================ Start CTA Area =================-->
    <div class="cta-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!--================ Start Popular Causes Area =================-->
                    <p class="top_text">Contribuez à notre cause avec votre générosité !</p>
                    <h1>Rejoignez notre initiative pour soutenir les associations locales. Votre don permettra d'améliorer concrètement la vie de ceux qui en ont le plus besoin. Ensemble, nous pouvons faire une réelle différence. Merci pour votre soutien !</h1>
                     <a href="<?php echo url('Contact'); ?>" class="primary-btn">Don</a>
                     <!--================ Start Popular Causes Area =================-->
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->

<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('english.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/english/Events/index.blade.php ENDPATH**/ ?>