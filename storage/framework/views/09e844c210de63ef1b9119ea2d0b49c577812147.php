<?php $__env->startSection('dashboardcontent'); ?>
<!-- ====================== links Posts Content Start store =============================================== -->
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <!-- ====================== links Posts Content Start store =============================================== -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Blog Posts</span>
        <h3 class="page-title"><i class=" icon-feather-file-text"></i> Add Post</h3>
      </div>
    </div>
    <!-- ====================== links Posts Content Start store =============================================== -->
    <!-- End Page Header -->
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
          <div class="card-body">
              <!-- ====================== links Posts Content Start store =============================================== -->
              <form class="add-new-post" action="<?php echo e(route('dashboardPosts.update',$Post->slug)); ?>" method="POST"  role="form" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <!-- ====================== links Posts Content Start store =============================================== -->
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title" name="Title_en" value="<?php echo e($Post->Title_en); ?>">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Slug" name="slug" value="<?php echo e($Post->slug); ?>">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Seo Title" name="seo_title" value="<?php echo e($Post->seo_title); ?>">
              <!-- ====================== links Posts Content Start store =============================================== -->
              <div class="form-control form-control-lg mb-3">
                <label for="displayEmail">Author Post</label>
                <select class="custom-select" name="author_id">
                  <!-- ====================== links Posts Content Start store =============================================== -->
                <?php if(isset($Post->User->name)): ?>
                 <option value="<?php echo e($Post->author_id); ?>" selected=""><?php echo e($Post->User->name); ?></option>
                <?php else: ?>
                <!-- ====================== links Posts Content Start store =============================================== -->
                 <option value="1" selected="">NO User</option>
                <?php endif; ?>
                <!-- ====================== links Posts Content Start store =============================================== -->
                <?php if($Users !== NULL): ?>
                <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($User->id); ?>"><?php echo e($User->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                 <option value="1" selected="">NO User</option>
                <?php endif; ?>
                </select>
                <!-- ====================== links Posts Content Start store =============================================== -->
              </div>
              <!-- ====================== links Posts Content Start store =============================================== -->
              <div class="form-control form-control-lg mb-3">
                <label for="Category">Category Post</label>
                <select class="custom-select" name="category_id">
                 <?php if(isset($Post->Category->title)): ?>
                 <option  value="<?php echo e($Post->category_id); ?>" selected=""><?php echo e($Post->Category->title); ?></option>
                 <?php else: ?>
                 <option value="1" selected="">NO Category</option>
                 <?php endif; ?>
                 <?php if($Categores !== NULL): ?>
                 <?php $__currentLoopData = $Categores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($Category->id); ?>"><?php echo e($Category->title); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                  <option value="1" selected="">NO Category</option>
                  <?php endif; ?>
                </select>
                <!-- ====================== links Posts Content Start store =============================================== -->
              </div>
               <textarea value="<?php echo e($Post->body_en); ?>" class="form-control form-control-lg mb-3" type="text" name="body_en" rows="15"><?php echo e($Post->body_en); ?></textarea>
              <div class="row mt-3">
              <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" 
                     aria-selected="true">
                    <img src="<?php echo e(asset('dashboardassets/images/german.png')); ?>"> German</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="<?php echo e(asset('dashboardassets/images/arabic.png')); ?>"> Arabic</a>
                  </div>
                </div>
                <!-- ====================== links Posts Content Start store =============================================== -->
                <div class="col-10">
                  <div class="tab-content" id="v-pills-tabContent">
                   <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <input class="form-control form-control-lg mb-3" type="text" value="<?php echo e($Post->Title_gr); ?>" placeholder="Your Post Title German" name="Title_gr">
                      <textarea class="form-control form-control-lg mb-3" value="<?php echo e($Post->body_gr); ?>" cols="4" name="body_gr" placeholder="Your Post Content German"><?php echo e($Post->body_gr); ?></textarea>
                   </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <input class="form-control form-control-lg mb-3" type="text" value="<?php echo e($Post->Title_ar); ?>" placeholder="Your Post Title Arabic" name="Title_ar">
                      <textarea class="form-control form-control-lg mb-3" value="<?php echo e($Post->body_ar); ?>" cols="4" name="body_ar" placeholder="Your Post Content Arabic"><?php echo e($Post->body_ar); ?></textarea>
                  </div>
                  <!-- ====================== links Posts Content Start store =============================================== -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ====================== links Posts Content Start store =============================================== -->
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
                  <strong class="mr-1">Status:</strong> Draft
                </span>
                <span class="d-flex mb-2">
                  <i class="icon-material-outline-visibility mr-1"></i>
                  <strong class="mr-1">Visibility:</strong>
                  <strong class="text-success">Public</strong>
                </span>
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-calendar mr-1"></i>
                  <strong class="mr-1">Schedule:</strong> Now
                </span>
                <span class="d-flex">
                  <i class="icon-line-awesome-bullseye mr-1"></i>
                  <strong class="mr-1">Readability:</strong>
                  <strong class="text-warning">Ok</strong>
                </span>
              </li>
              <li class="list-group-item d-flex px-3">
                <button class="btn btn-sm btn-outline-accent">
                  <i class="icon-material-outline-description"></i> Posts</button>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Publish</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ====================== links Posts Content Start store =============================================== -->
            <!-- / Post Overview -->
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-feather-rss"></i> Featured</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-3 pb-2">
                    <div class="custom-control custom-checkbox mb-1">
                      <input value="<?php echo e($Post->featured); ?>" 
                       <?php if($Post->featured == 'on') {
                        echo "checked";
                       }else{
                        echo "value='off'";
                       }
                       ?>
                      type="checkbox" class="custom-control-input" id="featured" name="featured">
                      <label class="custom-control-label" for="featured">Featured </label>
                    </div>
                  </li>
                  <!-- ====================== links Posts Content Start store =============================================== -->
                  <li class="list-group-item d-flex px-3">
                    <div class="input-group">
                      <input value="<?php echo e($Post->excerpt); ?>" type="text" class="form-control" placeholder="excerpt" aria-label="excerpt" aria-describedby="basic-addon2" name="excerpt"> 
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-3">
                    <div class="input-group">
                      <input value="<?php echo e($Post->meta_description); ?>" type="text" class="form-control" placeholder="meta_description" aria-label="meta_description" aria-describedby="basic-addon2" 
                             name="meta_description"> 
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-3">
                    <div class="input-group">
                      <input value="<?php echo e($Post->meta_keywords); ?>" type="text" class="form-control" placeholder="meta_keywords" aria-label="meta_keywords" aria-describedby="basic-addon2" 
                             name="meta_keywords"> 
                    </div>
                  </li>
                </ul>
                <!-- ====================== links Posts Content Start store =============================================== -->
              </div>
            </div>
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Post Image</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="<?php echo asset($Post->image); ?>" alt="Post image">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="" value="<?php echo e($Post->image); ?>">
                    </label>
                  </div>
                </ul>
                </form>
              </div>
              <!-- ====================== links Posts Content Start store =============================================== -->
            </div>
            <!-- / Post Overview -->
          </div>
        </div>
      </div>
<!-- ===================================================== links Posts Content Start store =============================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('asso.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views\asso\dashboardPosts\edit.blade.php ENDPATH**/ ?>