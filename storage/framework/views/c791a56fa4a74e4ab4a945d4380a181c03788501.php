<?php $__env->startSection('dashboardcontent'); ?>
<!-- ================================ links Dashboard Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <!-- ================================ links Dashboard Content Start ========================================================================= -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Dashboard Admin</span>
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
        <div class="card-post__image" style="background-image: url('<?php echo e(asset('dashboardassets/images/content-management/1.png')); ?>');border-radius: 10px">
          <a href="<?php echo e(route('dashboardUsers.index')); ?>" class="card-post__category badge badge-pill badge-primary">Utilisateurs</a>
        </div>
      </div>
      <!-- ================================ links Dashboard Content Start ========================================================================= -->
    </div>
    
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
      <div class="card card-small card-post card-post--1">
        <div class="card-post__image" style="background-image: url('<?php echo e(asset('dashboardassets/images/content-management/3.png')); ?>');border-radius: 10px">
          <a href="<?php echo e(route('dashboardRoles.index')); ?>" class="card-post__category badge badge-pill badge-dark">Roles</a>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
  </div>
  <div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Utilisateurs</span>
              <?php if(count(Users()) != null): ?>
              <h6 class="stats-small__value count my-3"><?php echo e(count(Users())); ?></h6>
              <?php else: ?>
              <h6 class="stats-small__value count my-3">0</h6>
              <?php endif; ?>
            </div>
          </div>
              <canvas height="110" class="blog-overview-stats-small-1"></canvas>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg col-md-6 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Postes</span>
              <?php if(count(Posts()) != null): ?>
              <h6 class="stats-small__value count my-3"><?php echo e(count(Posts())); ?></h6>
              <?php else: ?>
              <h6 class="stats-small__value count my-3">0</h6>
              <?php endif; ?>
            </div>
          </div>
          <canvas height="129" class="blog-overview-stats-small-2"></canvas>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg col-md-4 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Crowdfunding</span>
              <?php if(count(Causes()) != null): ?>
              <h6 class="stats-small__value count my-3"><?php echo e(count(Causes())); ?></h6>
              <?php else: ?>
              <h6 class="stats-small__value count my-3">0</h6>
              <?php endif; ?>
            </div>
          </div>
          <canvas height="159" class="blog-overview-stats-small-3"></canvas>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg col-md-4 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Messages</span>
              <?php if(count(Messages()) != null): ?>
              <h6 class="stats-small__value count my-3"><?php echo e(count(Messages())); ?></h6>
              <?php else: ?>
              <h6 class="stats-small__value count my-3">0</h6>
              <?php endif; ?>
            </div>
          </div>
          <canvas height="101" class="blog-overview-stats-small-4"></canvas>
        </div>
      </div>
      <!-- ================================ links Dashboard Content Start ========================================================================= -->
    </div>
    <div class="col-lg col-md-4 col-sm-12 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Crowdsourcing</span>
              <?php if(count(Events()) != null): ?>
              <h6 class="stats-small__value count my-3"><?php echo e(count(Events())); ?></h6>
              <?php else: ?>
              <h6 class="stats-small__value count my-3">0</h6>
              <?php endif; ?>
            </div>
          </div>
          <canvas height="200" class="blog-overview-stats-small-5"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- ================================ links Dashboard Content Start ========================================================================= -->
  <div class="row">
    <div class="col-lg-12">
    <div class="card card-small">
      <div class="card-header border-bottom">
        <h6 class="m-0">Messages principaux</h6>
      </div>
      <div class="card-body p-0">
        <ul class="list-group list-group-small list-group-flush">
         <?php $__currentLoopData = Messages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue"><?php echo e($Message->subject); ?></span>
            <span class="ml-auto text-right text-semibold text-reagent-gray"><?php echo e($Message->id); ?></span>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              
        </ul>
      </div>
      <!-- ================================ links Dashboard Content Start ========================================================================= -->
      <div class="card-footer border-top">
        <div class="row">
          <div class="col text-left view-report">
            <a href="<?php echo e(url('dashboard/dashboardMessages')); ?>" class="mb-2 btn btn-sm btn-success mr-1" style="color: #fff">Messages</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
  </div>
  </div>
  <!-- End Small Stats Blocks -->
</div>
<!-- End Top Referrals Component -->
</div>
</div>
<!-- ================================ links Message Content Start ========================================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/dashboard/admin.blade.php ENDPATH**/ ?>