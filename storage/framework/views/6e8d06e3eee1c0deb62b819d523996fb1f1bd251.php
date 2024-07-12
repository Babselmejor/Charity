<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
<!--================ Start top-section Area =================-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c6996ef6095508f"></script>
<!-- ===============================  Post image ======================================== -->
<style type="text/css">
    .banner-area{background:url('<?php echo e(asset($Post->image)); ?>') no-repeat;background-size:cover}
</style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-8">
                    <!-- ===============================  Post ======================================== -->
                    <h1 class="text-white"><?php echo $Post->Title_en; ?></h1>
                    <!-- ===============================  Post  ======================================== -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->
  <!--================Blog Area =================-->
  <section class="blog_area single-post-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 posts-list">
          <div class="single-post">
            <div class="feature-img">
              <!-- ===============================  Post  ======================================== -->
              <img class="img-fluid" src="<?php echo e(asset($Post->image)); ?>" alt="">
            </div>
            <div class="blog_details">
              <!-- ===============================  Post  ======================================== -->
              <h2><?php echo $Post->Title_en; ?></h2>
              <ul class="blog-info-link mt-3 mb-4">
                <!-- ===============================  Post  ======================================== -->
                <?php if(isset($Post->Category->title)): ?>
                <li><a><i class="icon-material-outline-assignment"></i> <?php echo e($Post->Category->title); ?></a></li>
                <?php else: ?>
                <li><a><i class="icon-material-outline-assignment"></i> No Category</a></li>
                <?php endif; ?>
                <?php if(isset($Comments)): ?> 
                 <li><a><i class="fa fa-comment-o"></i> <?php echo e(count($Comments)); ?> Commentaires</a></li>
                 <?php else: ?>
                 <li><a><i class="fa fa-comment-o"></i> 0 Commentaires</a></li>
                 <?php endif; ?>
                <!-- ===============================  Post  ======================================== -->
              </ul>
              <p class="excert">
                <!-- ===============================  Post  ======================================== -->
                <?php echo $Post->body_en; ?>

                <!-- ===============================  Post  ======================================== -->
              </p>
            </div>
          </div>
          <div class="navigation-top">
            <div class="d-sm-flex justify-content-between">
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            </div>
          </div>
          <div class="comments-area">
            <!-- ===============================  Post  ======================================== -->
            <?php if(isset($Comments)): ?> 
             <h4><?php echo e(count($Comments)); ?> Commentaires</h4>
             <?php else: ?>
             <h4>0 Commentaires</h4>
             <?php endif; ?>
             <!-- ===============================  Post  ======================================== -->
              <!-- =========================================== Post Comments ============================ -->
              <?php $__currentLoopData = $Comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <!-- ===============================  Post  ======================================== -->
                    <img src="<?php echo e(asset($comment->User->avatar)); ?>" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      <!-- ===============================  Post  ======================================== -->
                      <?php echo e($comment->Comment); ?>

                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <!-- ===============================  Post  ======================================== -->
                          <a><?php echo e($comment->User->name); ?></a>
                        </h5>
                        <!-- ===============================  Post  ======================================== -->
                        <p class="date"><?php echo e(date('M j, Y', strtotime($comment->created_at))); ?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- =========================================== Post Comments ============================ -->
          </div>
          <div class="comment-form">
            <!--   ================  Bed Messagge ================  -->
        <?php if(session('Messagge')): ?>
        <div class="alert alert-success" role="alert">
          Toutes nos félicitations. Votre commentaire a été envoyé avec succès
        </div>
        <?php endif; ?>
        <!--   ================  Messagge ================  -->
            <h4>Laisser une réponse</h4>
            <form class="form-contact comment_form" method="post" action="<?php echo e(route('Comments.store')); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <input type="text" name="Post_id" hidden="" value="<?php echo $Post->id; ?>">
                    <textarea class="form-control w-100" name="Comment" cols="30" rows="9" placeholder="Écrire un commentaire"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="button button-contactForm primary-btn">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
					<div class="blog_right_sidebar">
					  <aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title">Post récent</h3>
						<?php $__currentLoopData = $RentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $RentPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="media post_item">
						  <!-- Appliquer la classe img-fluid pour rendre l'image réactive -->
						  <img class="img-fluid" src="<?php echo asset($RentPost->image); ?>" alt="post">
						  <div class="media-body">
							<a href="<?php echo url('Posts'); ?>/<?php echo $RentPost->slug; ?>">
							  <h3><?php echo substr($RentPost->Title_en, 0, 190); ?></h3>
							</a>
							<p><?php echo e(date('M j, Y', strtotime($RentPost->created_at))); ?></p>
						  </div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  </aside>
					</div>
				</div>  
      </div>
    </div>
  </section>
  <!--================Blog Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('english.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views\english\Posts\show.blade.php ENDPATH**/ ?>