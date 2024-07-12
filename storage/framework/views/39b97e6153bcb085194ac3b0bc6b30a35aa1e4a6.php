<?php $__env->startSection('dashboardcontent'); ?>
<!-- ============================================= links Content Start User ============================================= -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Aperçu</span>
        <h3 class="page-title"><i class="icon-feather-edit"></i> Edit User </h3>
      </div>
    </div>
    <!-- ============================================= links Content Start User ============================================= -->
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="row">
      <div class="col-lg-8">
        <div class="card card-small mb-4">
          <div class="card-header border-bottom">
            <h6 class="m-0">Détails du compte</h6>
          </div>
          <!-- ============================================= links Content Start User ============================================= -->
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
              <div class="row">
                <div class="col">
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <form action="<?php echo e(route('dashboardUsers.update',$User->name)); ?>" method="POST"  role="form" enctype="multipart/form-data" class="form-horizontal">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('patch')); ?>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="feFirstName">Name</label>
                        <input type="text" class="form-control" id="feFirstName" placeholder="First Name" name="name" value="<?php echo e($User->name); ?>"> </div>
                        <div class="form-group col-md-6">
                          <label for="feInputState">Roles</label>
                          <select id="feInputState" class="form-control" name="role_id" value="<?php echo e($User->role_id); ?>"> 
                            <!-- ============================================= links Content Start User ============================================= -->
                            <?php if(isset($User->role->display_name)): ?>
                             <option value="<?php echo e($User->role_id); ?>"><?php echo e($User->role->display_name); ?></option>
                            <?php else: ?>
                             <span class="badge badge-pill badge-info">NO Role</span>
                            <?php endif; ?>
                            <?php if($Roles !== NULL): ?>
                            <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($Role->id); ?>"><?php echo e($Role->display_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <span class="badge badge-pill badge-info">NO Role</span>
                            <?php endif; ?>
                            <!-- ============================================= links Content Start User ============================================= -->
                          </select> 
                        </div>
                      </div> 
                      <!-- ============================================= links Content Start User ============================================= -->
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="feEmailAddress">Email</label>
                          <input type="email" class="form-control" id="feEmailAddress" placeholder="Email" name="email" value="<?php echo e($User->email); ?>"></div>
                          <div class="form-group col-md-6">
                            <label for="fePassword">Password</label>
                            <input type="password" class="form-control" id="fePassword" placeholder="Password" name="password"> 
                          </div>
                          <div class="form-group col-md-12">
                            <label for="fePassword">Password Confirmation</label>
                        <input type="password" class="form-control" id="fePassword" placeholder="password_confirmation" name="password_confirmation" > 
                          </div>
                        </div>
                        <button type="submit" class="btn btn-accent">Edit Account</button>
                        <!-- ============================================= links Content Start User ============================================= -->
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- ============================================= links Content Start User ============================================= -->
              <div class="card card-small mb-4 pt-3">
                <div class="card-header border-bottom text-center" style="border-radius: 10px;">
                  <div class="mb-3 mx-auto">
                    <img src="<?php echo e(asset($User->avatar)); ?>" alt="User Avatar" width="110"> </div>
                    <input type="file" name="avatar<?php echo e($errors->has('avatar') ? ' is-invalid' : ''); ?>" class="btn btn-sm btn-white d-table mx-auto mt-4" value="<?php echo e($User->avatar); ?>">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                  </div>
                </div>
                <!-- ============================================= links Content Start User ============================================= -->
              </div>
            </form>
          </div>
          <!-- End Default Light Table -->
        </div>
<!-- ============================================= links Content Start User ============================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/dashboard/dashboardUsers/edit.blade.php ENDPATH**/ ?>