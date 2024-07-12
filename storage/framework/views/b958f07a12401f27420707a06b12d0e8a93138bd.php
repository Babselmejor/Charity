<?php $__env->startSection('dashboardcontent'); ?>
<!-- ================================ links Causes Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4" id="editor">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Crowdfunding</span>
      <h3 class="page-title"><i class=" icon-material-outline-assignment"></i> Add Crowdfunding</h3>
    </div>
  </div>
  <!-- ================================ links Causes Content Start ========================================================================= -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-9 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div id="form-container" class="card-body">
          <!-- ================================ dashboard Causes store ========================================================================= -->
          <form action="<?php echo e(route('assodashboardCauses.store')); ?>" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
            <?php echo csrf_field(); ?>
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Title" name="Title_en">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Slug" name="slug">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Raised" name="Raised">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Goal" name="Goal">
            <input class="form-control form-control-lg mb-3" type="number" placeholder="Your Donors" name="Donors">
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <div class="form-control form-control-lg mb-3">
              <label for="Category">Category Crowdfunding</label>
              <select class="custom-select" name="category_id">
                <option value="1" selected="">Category Crowdfunding</option>
                <?php $__currentLoopData = $Categores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($Category->id); ?>"><?php echo e($Category->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <textarea class="form-control form-control-lg mb-3" type="text" name="Content_en" rows="10"></textarea>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ================================ dashboard Causes store ========================================================================= -->
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <h6 class="m-0">Actions</h6>
          </div>
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-flag mr-1"></i>
                  <strong class="mr-1">Statut:</strong> Brouillon

                </span>
                <span class="d-flex mb-2">
                  <i class="icon-material-outline-visibility mr-1"></i>
                  <strong class="mr-1">Visibilité:</strong>
                  <strong class="text-success">Public</strong>

                </span>
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-calendar mr-1"></i>
                  <strong class="mr-1">Calendrier:</strong> Maintenant

                </span>
                <span class="d-flex">
                  <i class="icon-line-awesome-bullseye mr-1"></i>
                  <strong class="mr-1">Lisibilité:</strong>
                  <strong class="text-warning">Ok</strong>
                </span>
              </li>
              <li class="list-group-item d-flex px-3">
                  <a class="btn btn-sm btn-outline-accent" href="<?php echo e(route('assodashboardCauses.index')); ?>"><i class="icon-material-outline-description"></i> Crowdfunding</a>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Publier</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- / Post Overview -->
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Crowdfunding Image</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="<?php echo e(asset('dashboardassets/images/content-management/cover.png')); ?>" alt="User Avatar">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="">
                    </label>
                  </div>
                </ul>
              </form>
            </div>
            <!-- ================================ dashboard Causes store ========================================================================= -->
          </div>
          <!-- / Post Overview -->
        </div>
      </div>
    </div>
<!-- ================================ links Causes Content Start ========================================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('asso.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/asso/assodashboardCauses/create.blade.php ENDPATH**/ ?>