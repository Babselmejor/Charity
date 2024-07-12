<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dashboardassets/styles/icons.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('auth/css/util.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('auth/css/main.css')); ?>">
<!--===============================================================================================-->
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/layouts/auth.blade.php ENDPATH**/ ?>