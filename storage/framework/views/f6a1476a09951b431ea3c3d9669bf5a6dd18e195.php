<?php $__env->startSection('dashboardcontent'); ?>
<!-- ============================================= links Content Start Roles ============================================= -->
<!-- / .main-navbar -->
<!-- ============================================= links Content Start Roles ============================================= -->
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> <?php echo e($message); ?></div>
  <?php endif; ?>
  <!-- ============================================= links Content Start Roles ============================================= -->
  <?php if($message = Session::get('Delete')): ?>
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> <?php echo e($message); ?> </div>
  <?php endif; ?>
  <!-- ============================================= links Content Start Roles ============================================= -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Aperçu</span>
        <h3 class="page-title"><i class="icon-line-awesome-lock"></i> Roles 
          <a href="<?php echo e(route('dashboardRoles.create')); ?>" class="mb-2 btn btn-success mr-2"><i class="icon-material-outline-add-circle-outline"></i> Add Role</a></h3>  
        </div>
      </div>
      <!-- ============================================= links Content Start Roles ============================================= -->
      <!-- End Page Header -->
      <!-- Default Light Table -->
      <div class="row">
        <div class="col-lg-12 mb-4">
         <!-- ============================================= links Content Start Roles ============================================= -->
          <div class="card card-small lo-stats h-100">
            <div class="card-header border-bottom">
              <h6 class="m-0">Roles</h6>
              <div class="block-handle"></div>
            </div>
            <div class="card-body p-0">
              <div class="container-fluid px-0">
                <table class="table mb-0">
                  <thead class="py-2 bg-light text-semibold border-bottom">
                    <tr>
                      <th>Details Name</th>
                      <th class="text-center">Display Name</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- ============================================= links Content Start Roles ============================================= -->
                    <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="lo-stats__order-details">
                        <span><?php echo e($Role->name); ?></span>
                        <span><?php echo e(date('M j, Y', strtotime($Role->created_at))); ?></span>
                      </td>
                      <td class="lo-stats__status">
                        <div class="d-table mx-auto">
                          <span class="badge badge-pill badge-success"><?php echo e($Role->display_name); ?></span>
                        </div>
                      </td>
                      <td class="lo-stats__actions">
                        <!-- ============================================= links Content Start Roles ============================================= -->
                        <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
           <a href="<?php echo e(URL::to('dashboard/dashboardRoles')); ?>/<?php echo e($Role->name); ?>/edit" class="mb-2 btn btn-sm btn-primary"><i class="icon-feather-edit"></i> Edit</a>
           <form action="<?php echo e(route('dashboardRoles.destroy',$Role->id)); ?>" method="POST" files="true" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- ============================================= links Content Start Roles ============================================= -->
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer border-top">
              <div class="row">
                <div class="col">
                    <?php echo $Roles->links(); ?>

                  </div>
                  <div class="col text-right view-report">
                    <?php if(COUNT($Roles) != NULL): ?>
                    <a>Affichage de 10 à <?php echo e(COUNT($Roles)); ?> sur <?php echo e(COUNT($Roles)); ?> Roles</a>
                    <?php else: ?>
                    <a>Affichage de 10 à 0 sur 0 rôles</a>
                    <?php endif; ?>
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
<!-- ============================================= links Content Start Roles ============================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/dashboard/dashboardRoles/index.blade.php ENDPATH**/ ?>