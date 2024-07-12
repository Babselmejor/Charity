<?php $__env->startSection('dashboardcontent'); ?>
<!-- ================================ links Events Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Crowdsourcing</span>
        <h3 class="page-title"><i class="icon-feather-file-text"></i> Edit Crowdsourcing</h3>
      </div>
    </div>
    <!-- ================================ links Events Content Start ========================================================================= -->
    <!-- End Page Header -->
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
          <div class="card-body">
              <!-- ================================ links Events Content Start ========================================================================= -->
              <form class="add-new-post" action="<?php echo e(route('dashboardEvents.update',$Event->slug)); ?>" method="POST"  role="form" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <!-- ================================ links Events Content Start ========================================================================= -->
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Title" name="Title_en" value="<?php echo e($Event->Title_en); ?>">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Slug" name="slug" value="<?php echo e($Event->slug); ?>">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Days" name="Days" value="<?php echo e($Event->Days); ?>">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Hours" name="Hours" value="<?php echo e($Event->Hours); ?>">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Minutes" name="Minutes" value="<?php echo e($Event->Minutes); ?>">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Address" name="Address" value="<?php echo e($Event->Address); ?>">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event FinishTime" name="FinishTime" value="<?php echo e($Event->FinishTime); ?>">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event StartTime" name="StartTime" value="<?php echo e($Event->StartTime); ?>">
              <textarea value="<?php echo e($Event->Content_en); ?>" class="form-control form-control-lg mb-3" type="text" name="Content_en" rows="15">
              <!-- ================================ links Events Content Start ========================================================================= -->
                <?php echo e($Event->Content_en); ?>

              <!-- ================================ links Events Content Start ========================================================================= -->
              </textarea> 
               <div class="row mt-3">
            </div>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ================================ links Events Content Start ========================================================================= -->
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
                <a class="btn btn-sm btn-outline-accent" href="<?php echo e(route('dashboardEvents.index')); ?>"><i class="icon-material-outline-description"></i> Crowdsourcing</a>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Publier</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ================================ links Events Content Start ======================================================= -->
            <!-- / Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Crowdsourcing Image</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="<?php echo asset($Event->image); ?>" alt="Event image">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="" value="<?php echo e($Event->image); ?>">
                    </label>
                  </div>
                </ul>
                </form>
              </div>
            </div>
            <!-- ================================ links Events Content Start ======================================================== -->
            <!-- / Post Overview -->
          </div>
        </div>
      </div>
<!-- ================================ links Events Content Start ========================================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('asso.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views\asso\dashboardEvents\edit.blade.php ENDPATH**/ ?>