<!-- Main Content -->
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo trans('laravel-user-verification::user-verification.verification_error_header'); ?></div>
                <div class="panel-body">
                    <span class="help-block">
                        <strong><?php echo trans('laravel-user-verification::user-verification.verification_error_message'); ?></strong>
                    </span>
                    <div class="form-group">
                        <div class="col-md-12">
                            <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">
                                <?php echo trans('laravel-user-verification::user-verification.verification_error_back_button'); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\vendor\jrean\laravel-user-verification\src\resources\views\user-verification.blade.php ENDPATH**/ ?>