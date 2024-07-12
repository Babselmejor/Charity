<?php $__env->startSection('dashboardcontent'); ?>
<!-- ================================ links Events Content Start ========================================================================= -->
<!-- / .main-navbar -->
  <!-- ================================ links Events Content Start ========================================================================= -->
  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> <?php echo e($message); ?></div>
  <?php endif; ?>
  <!-- ================================ links Events Content Start ========================================================================= -->
  <?php if($message = Session::get('Delete')): ?>
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> <?php echo e($message); ?> </div>
  <?php endif; ?>
  <!-- ================================ links Events Content Start ========================================================================= -->
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle">Aperçu</span>
          <!-- ================================ links Events Content Start ========================================================================= -->
          <h3 class="page-title"><i class=" icon-line-awesome-tags"></i> Crowdsourcing
            <a href="<?php echo e(route('assodashboardEvents.create')); ?>" class="mb-2 btn btn-success mr-2">
              <i class="icon-material-outline-add-circle-outline"></i> Add New</a>
            </h3>
            <!-- ================================ links Events Content Start ========================================================================= -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mb-4">
            <div class="card card-small lo-stats h-100">
              <div class="card-header border-bottom">
                <h6 class="m-0">Derniers crowdsourcing</h6>
                <div class="block-handle"></div>
              </div>
              <div class="card-body p-0">
                <div class="container-fluid px-0">
                  <table class="table mb-0">
                    <thead class="py-2 bg-light text-semibold border-bottom">
                      <tr>
                        <th>Details</th>
                        <th>Details</th>
                        <th class="text-center">Days</th>
                        <th class="text-center">Hours</th>
                        <th class="text-center">Minutes</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Finish Time</th>
                        <th class="text-center">Start Time</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- ================================ links Events Content Start ========================================================================= -->
                      <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="lo-stats__image">
                          <img class="border rounded" src="<?php echo asset($Event->image); ?>">
                        </td>
                        <!-- ================================ links Events Content Start ========================================================================= -->
                        <td class="lo-stats__order-details">
                          <span><?php echo substr($Event->Title_en, 0, 190); ?></span>
                          <span><?php echo e(date('M j, Y', strtotime($Event->created_at))); ?></span>
                        </td>
                        <!-- ================================ links Events Content Start ========================================================================= -->
                        <td class="lo-stats__items text-center"><?php echo e($Event->Days); ?></td>
                        <td class="lo-stats__total text-center text-success"><?php echo e($Event->Hours); ?></td>
                        <td class="lo-stats__items text-center"><?php echo e($Event->Minutes); ?></td>
                        <td class="lo-stats__items text-center"><?php echo e($Event->Address); ?></td>
                        <td class="lo-stats__items text-center"><?php echo e($Event->FinishTime); ?></td>
                        <td class="lo-stats__items text-center"><?php echo e($Event->StartTime); ?></td>
                        <!-- ================================ links Events Content Start ========================================================================= -->
                        <td class="lo-stats__actions">
                          <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                            <!-- ====================== links Events Content Start =============================================== -->
                            <a href="<?php echo e(URL::to('asso/assodashboardEvents')); ?>/<?php echo e($Event->slug); ?>/edit" class="mb-2 btn btn-sm btn-primary">
                            <i class="icon-feather-edit-2"></i> Edit</a>
                            <form action="<?php echo e(route('assodashboardEvents.destroy',$Event->id)); ?>" method="POST" files="true" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <!-- ====================== links Events Content Start =============================================== -->
                            <?php echo method_field('DELETE'); ?>
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <!-- ================================ links Events Content Start ========================================================================= -->
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer border-top">
                <div class="row">
                  <div class="col">
                    <!-- ====================== links Events Content Start =============================================== -->
                    <?php echo $Events->links(); ?>

                    <!-- ====================== links Events Content Start =============================================== -->
                  </div>
                  <div class="col text-right view-report">
                    <!-- ====================== links Events Content Start =============================================== -->
                    <?php if(COUNT($Events) != NULL): ?>
                    <a>Affichage de 10 à <?php echo e(COUNT($Events)); ?> sur <?php echo e(COUNT($Events)); ?> Crowdsourcing</a>
                    <?php else: ?>
                    <a>Affichage de 10 à 0 sur 0 crowdsourcing</a>
                    <?php endif; ?>
                    <!-- ====================== links Events Content Start =============================================== -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Default Light Table -->
        <!-- Default Dark Table -->
        <!-- End Default Dark Table -->
</div>
<!-- ================================ links Events Content Start ========================================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('asso.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/asso/assodashboardEvents/index.blade.php ENDPATH**/ ?>