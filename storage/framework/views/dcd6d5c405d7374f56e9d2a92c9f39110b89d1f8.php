<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ Start top-section Area =================-->
    <style type="text/css">
        .banner-area{background:url('<?php echo e(asset(Setting()->HomePicture)); ?>') no-repeat;background-size:cover}
    </style>
    <!-- ===============================  About  ======================================== -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-end align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">À propos de nous</h1>
                    <!-- ===============================  About  ======================================== -->
                    <p><?php echo Setting()->about_en; ?></p>
                    <!-- ===============================  About  ======================================== -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->
    <!--================ Start About Area =================-->
    <section class="about_area lite_bg">
        <style type="text/css">
            .about_area .about_bg{
                background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('<?php echo e(asset(Setting()->AboutPicture)); ?>');background-repeat:no-repeat;background-size:cover;
                background-size:cover;
                position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
        </style>
    </section>

    <section class="features-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						
						<h2><span>A propos</span></h2>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-compass"></i>
						<h4>Faire un don</h4>
						<!-- ===============================  Home  ======================================== -->
						<p><?php echo Setting()->content_feature_en; ?></p>
						<!-- ===============================  Home  ======================================== -->
						<a href="<?php echo e(url('Contact')); ?>" class="primary-btn2">Voir plus</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-desk"></i>
						<h4>Donner de l'inspiration</h4>
						<!-- ===============================  Home  ======================================== -->
						<p><?php echo Setting()->content_feature_two_en; ?></p>
						<!-- ===============================  Home  ======================================== -->
						<a href="<?php echo e(url('Contact')); ?>" class="primary-btn2">Voir plus</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-bathroom"></i>
						<h4>Devenez bénévole</h4>
						<!-- ===============================  Home  ======================================== -->
						<p><?php echo Setting()->content_feature_three_en; ?></p>
						<!-- ===============================  Home  ======================================== -->
						<a href="<?php echo e(url('Contact')); ?>" class="primary-btn2">Voir plus</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="callto-area section-gap relative" data-parallax="scroll" data-image-src="<?php echo e(asset(Setting()->HomePicture)); ?>">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<p class="top_text">Besoin de votre aide?</p>
					<div class="call-wrap mx-auto">
						<h1>Bénévole recherché dans votre région</h1>
						<p>Dans notre vie, je les éclaire, deux jours apparaissent, la règle est la chose qui vole, la cause principale, la volaille elle-même sèche,
							à partir de la cause principale, la volaille elle-même est sèche
						</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="<?php echo e(route('register')); ?>" class="primary-btn mt-5">
							Sign up
							<i class="ti-angle-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('english.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/english/about.blade.php ENDPATH**/ ?>