<?php $__env->startSection('dashboardcontent'); ?>
<!-- ============================================= links Content Start User ============================================= -->
<!-- / .main-navbar -->
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
<strong>Success!</strong> <?php echo e($message); ?></div>
<?php endif; ?> 
  <!-- ============================================= links Content Start User ============================================= -->
<?php if($message = Session::get('Delete')): ?>
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
<strong>Delete!</strong> <?php echo e($message); ?> </div>
<?php endif; ?>
<!-- ============================================= links Content Start User ============================================= -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Aperçu</span>
        <h3 class="page-title"><i class=" icon-feather-user-plus"></i> Utilisateurs
          <a href="<?php echo e(route('dashboardUsers.create')); ?>" class="mb-2 btn btn-success mr-2">
            <i class="icon-material-outline-add-circle-outline"></i> Add New</a>
          </h3>  
        </div>
      </div>
      <!-- ============================================= links Content Start User ============================================= -->
      <!-- End Page Header -->
      <!-- Default Light Table -->
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card-small lo-stats h-100">
            <div class="card-header border-bottom">
              <h6 class="m-0">Derniers utilisateurs</h6>
              <div class="block-handle"></div>
            </div>
            <div class="card-body p-0">
              <div class="container-fluid px-0">
                <table class="table mb-0">
                  <thead class="py-2 bg-light text-semibold border-bottom">
                    <tr>
                      <th>Details</th>
                      <th>Details</th>
                      <th class="text-center">Role</th>
                      <th class="text-center">Display Name</th>
                      <th class="text-left">Email</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- ============================================= links Content Start User ============================================= -->
                    <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="lo-stats__image">
                        <img class="border rounded" src="<?php echo asset($User->avatar); ?>">
                      </td>
                      <td class="lo-stats__order-details">
                        <span><?php echo e($User->name); ?></span>
                        <span><?php echo e(date('M j, Y', strtotime($User->created_at))); ?></span>
                      </td>
                      <!-- ============================================= links Content Start User ============================================= -->
                      <td class="lo-stats__status">
                        <div class="d-table mx-auto">
                          <?php if(isset($User->role->name)): ?>
                          <span class="badge badge-pill badge-success"><?php echo e($User->role->name); ?></span>
                          <?php else: ?>
                          <span class="badge badge-pill badge-info">User</span>
                          <?php endif; ?>
                        </div>
                      </td>
                      <!-- ============================================= links Content Start User ============================================= -->
                      <td class="lo-stats__items text-center">
                        <?php if(isset($User->role->display_name)): ?>
                        <span class="badge badge-pill badge-success"><?php echo e($User->role->display_name); ?></span>
                        <?php else: ?>
                        <span class="badge badge-pill badge-info">User</span>
                        <?php endif; ?>
                      </td>
                      <!-- ============================================= links Content Start User ============================================= -->
                      <td class="lo-stats__total  text-success">
                        <?php echo e($User->email); ?>

                      </td>
                      <!-- ============================================= links Content Start User ============================================= -->
                      <td class="lo-stats__actions">
                        <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                    <a href="<?php echo e(URL::to('dashboard/dashboardUsers')); ?>/<?php echo e($User->name); ?>/edit" class="mb-2 btn btn-sm btn-primary"><i class="icon-feather-edit-2"></i> Edit</a>
                          <form action="<?php echo e(route('dashboardUsers.destroy',$User->id)); ?>" method="POST" files="true" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- ============================================= links Content Start User ============================================= -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- ============================================= links Content Start User ============================================= -->
            <div class="card-footer border-top">
              <div class="row">
                <div class="col">
                  <!-- ============================================= links Content Start User ============================================= -->
                    <?php echo $Users->links(); ?>

                    <!-- ============================================= links Content Start User ============================================= -->
                  </div>
                  <div class="col text-right view-report">
                    <!-- ============================================= links Content Start User ============================================= -->
                    <?php if(COUNT($Users) != NULL): ?>
                    <a>Affichage de 10 à <?php echo e(COUNT($Users)); ?> sur <?php echo e(COUNT($Users)); ?> Utilisateurs</a>
                    <?php else: ?>
                    <a>Affichage de 10 à 0 sur 0 utilisateurs</a>
                    <?php endif; ?>
                    <!-- ============================================= links Content Start User ============================================= -->
                  </div>
              </div>
              <!-- ============================================= links Content Start User ============================================= -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Default Light Table -->
      <!-- Default Dark Table -->
      <!-- End Default Dark Table -->
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/dashboard/dashboardUsers/index.blade.php ENDPATH**/ ?>