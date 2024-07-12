<?php $__env->startSection('dashboardcontent'); ?>
<!-- ================================ links Categores Content Start ========================================================================= -->
<!-- / .main-navbar -->
  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> <?php echo e($message); ?></div>
  <?php endif; ?>
  <!-- ================================ dashboard Categores store ====================================== -->
  <?php if($message = Session::get('Delete')): ?>
  <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> <?php echo e($message); ?> </div>
  <?php endif; ?>
  <!-- ================================ dashboard Categores store ====================================== -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Aperçu</span>
        <h3 class="page-title"><i class="icon-line-awesome-align-justify"></i> Categories 
          <a href="<?php echo e(route('dashboardCategores.create')); ?>" class="mb-2 btn btn-success mr-2"><i class="icon-material-outline-add-circle-outline"></i> 
          Add Categores</a>
        </h3>  
        </div>
      </div>
      <!-- ================================ dashboard Categores store ====================================== -->
      <!-- End Page Header -->
      <!-- Default Light Table -->
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card-small lo-stats h-100">
            <div class="card-header border-bottom">
              <h6 class="m-0">Dernières catégories</h6>
              <div class="block-handle"></div>
            </div>
            <div class="card-body p-0">
              <div class="container-fluid px-0">
                <table class="table mb-0">
                  <thead class="py-2 bg-light text-semibold border-bottom">
                    <tr>
                      <th>Order</th>
                      <th>Name</th>
                      <th class="text-center">Slug</th>
                      <th class="text-center">Color</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- ================================ dashboard Categores store ====================================== -->
                    <?php $__currentLoopData = $Categores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="lo-stats__image">
                        <span><?php echo e($Category->order); ?></span>
                      </td>
                      <td class="lo-stats__order-details">
                        <span><?php echo e($Category->title); ?></span>
                        <span><?php echo e(date('M j, Y', strtotime($Category->created_at))); ?></span>
                      </td>
                      <td class="lo-stats__total text-center text-success"><?php echo e($Category->slug); ?></td>
                      <td class="lo-stats__status">
                        <div class="d-table mx-auto">
                          <span class="badge badge-pill badge-<?php echo e($Category->color); ?>"><?php echo e($Category->color); ?></span>
                        </div>
                      </td>
                      <td class="lo-stats__actions">
                        <!-- ================================ dashboard Categores store ====================================== -->
                        <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
            <a href="<?php echo e(URL::to('asso/dashboardCategores')); ?>/<?php echo e($Category->slug); ?>/edit" class="mb-2 btn btn-sm btn-primary">
            <i class="icon-feather-edit"></i> Edit</a>
           <!-- ================================ dashboard Categores store ====================================== -->
           <form action="<?php echo e(route('dashboardCategores.destroy',$Category->id)); ?>" method="POST" files="true" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- ================================ dashboard Categores store ====================================== -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- ================================ dashboard Categores store ====================================== -->
            <div class="card-footer border-top">
              <div class="row">
               <div class="col">
                    <!-- ================================ links dashboard Categores store ====================================== -->
                     <?php echo $Categores->links(); ?>

                     <!-- ================================ links dashboard Categores store ====================================== -->
                  </div>
                  <div class="col text-right view-report">
                    <?php if(COUNT($Categores) != NULL): ?>
                    <a>Affichage de 10 à <?php echo e(COUNT($Categores)); ?> sur <?php echo e(COUNT($Categores)); ?> Categories</a>
                    <?php else: ?>
                    <a>Affichage de 10 à 0 sur 0 catégories</a>
                    <?php endif; ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- ================================ links Categores Content Start ========================================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('asso.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views\asso\dashboardCategores\index.blade.php ENDPATH**/ ?>