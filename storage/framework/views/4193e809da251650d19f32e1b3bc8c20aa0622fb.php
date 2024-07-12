<?php $__env->startSection('dashboardcontent'); ?>
<!-- ============================================= links Content Start Roles ============================================= -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Roles</span>
      <h3 class="page-title"><i class="icon-line-awesome-lock"></i> Edit Role</h3>
    </div>
  </div>
  <!-- ============================================= links Content Start Roles ============================================= -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-9 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div class="card-body">
            <!-- ============================================= links Content Start Roles ============================================= -->
            <form class="add-new-post" action="<?php echo e(route('dashboardRoles.update',$Role->name)); ?>" method="POST"  role="form" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <!-- ============================================= links Content Start Roles ============================================= -->
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Name" name="name" value="<?php echo e($Role->name); ?>">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Display Name" name="display_name" value="<?php echo e($Role->display_name); ?>">
            <!-- ============================================= links Content Start Roles ============================================= -->
        </div>
      </div>
      <!-- / Add New Post Form -->
    </div>
    <!-- ============================================= links Content Start Roles ============================================= -->
    <div class="col-lg-3 col-md-12">
      <!-- Post Overview -->
      <div class='card card-small mb-3'>
        <div class="card-header border-bottom">
          <h6 class="m-0">Actions</h6>
        </div>
        <!-- ============================================= links Content Start Roles ============================================= -->
        <div class='card-body p-0'>
          <ul class="list-group list-group-flush">
             <li class="list-group-item p-3">
              <span class="d-flex mb-2">
                <i class="icon-material-outline-outlined-flag mr-1"></i>
                <strong class="mr-1">Statut:</strong>  Brouillon
              </span>
              <span class="d-flex mb-2">
                <i class="icon-material-outline-visibility mr-1"></i>
                <strong class="mr-1">Visibilité:</strong>
                <strong class="text-success">Public</strong>
              </span>
            </li>
            <!-- ============================================= links Content Start Roles ============================================= -->
             <li class="list-group-item d-flex px-3">
                <a class="btn btn-sm btn-outline-accent" href="<?php echo e(route('dashboardRoles.index')); ?>"><i class="icon-line-awesome-lock"></i> Roles</a>
                <button class="btn btn-sm btn-accent ml-auto" type="submit">
                  <i class="icon-material-outline-library-add"></i> Publier</button>
                </li>
                <!-- ============================================= links Content Start Roles ============================================= -->
                </form>
              </ul>
            </div>
          </div>
          <!-- / Post Overview -->
        </div>
      </div>
    </div>
<!-- ============================================= links Content Start Roles ============================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views\dashboard\dashboardRoles\edit.blade.php ENDPATH**/ ?>