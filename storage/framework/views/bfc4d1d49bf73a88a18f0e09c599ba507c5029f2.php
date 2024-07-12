<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
<div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo asset(Setting()->HomePicture); ?>');">
            <div class="wrap-login100">
                <form method="POST" action="<?php echo e(route('login')); ?>" class="login100-form validate-form">
                <?php echo csrf_field(); ?>
                    <span class="login100-form-logo">
                        
                        <a class="zmdi zmdi-landscape" href="<?php echo url('/'); ?>"><img src="<?php echo e(asset(Setting()->LogoPicture)); ?>" alt="logo-image"></a>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        <?php echo e(__('Login')); ?>

                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter E-Mail">
                        <input id="email" type="email" class="input100<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>"       required autofocus placeholder="E-Mail Address">
                        <span class="focus-input100"></span>
                         <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Password">
                        <input id="password" type="password" class="input100<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required 
                               placeholder="Password">
                               <span class="focus-input100"></span>
                        <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input id="ckb1" class="input-checkbox100" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label class="label-checkbox100" for="ckb1">
                            <?php echo e(__('Remember Me')); ?>

                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            <?php echo e(__('Login')); ?>

                        </button>
                    </div>
                      
                    <div class="text-center p-t-90">
                        <?php if(Route::has('password.request')): ?>
                        <a class="txt1" href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Forgot Your Password?')); ?> 
                            
                        </a>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- ============================================================= Content end ============================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views\auth\login.blade.php ENDPATH**/ ?>