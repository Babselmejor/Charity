<?php $__env->startSection('dashboardcontent'); ?>
<!-- ================================ links Dashboard Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <!-- ================================ links Dashboard Content Start ========================================================================= -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Dashboard</span>
      <h3 class="page-title"><?php echo Setting()->Name; ?></h3>
    </div>
  </div>
  <!-- ================================ links Dashboard Content Start ========================================================================= -->
  <!-- End Page Header -->
  <!-- Small Stats Blocks -->
  
  <div class="row">
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
      <div class="card card-small card-post card-post--1">
        <div class="card-post__image" style="background-image: url('<?php echo e(asset('dashboardassets/images/content-management/2.png')); ?>');border-radius: 10px">
          <a href="<?php echo e(route('dashboardPosts.index')); ?>" class="card-post__category badge badge-pill badge-info">Postes</a>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
      <div class="card card-small card-post card-post--1">
        <div class="card-post__image" style="background-image: url('<?php echo e(asset('dashboardassets/images/content-management/1.png')); ?>');border-radius: 10px">
          <a href="<?php echo e(route('dashboardCauses.index')); ?>" class="card-post__category badge badge-pill badge-primary">Crowdfunding</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
      <div class="card card-small card-post card-post--1">
        <div class="card-post__image" style="background-image: url('<?php echo e(asset('dashboardassets/images/content-management/4.png')); ?>');border-radius: 10px">
          <a href="<?php echo e(route('dashboardEvents.index')); ?>" class="card-post__category badge badge-pill badge-warning">Crowdsourcing</a>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
  </div>
  
  <!-- ================================ links Dashboard Content Start ========================================================================= -->
  </div>
  <!-- End Small Stats Blocks -->
</div>
<!-- End Top Referrals Component -->
</div>
</div>
<!-- ================================ links Message Content Start ========================================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('asso.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views\asso\admin.blade.php ENDPATH**/ ?>