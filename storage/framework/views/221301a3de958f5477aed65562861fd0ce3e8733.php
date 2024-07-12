<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(Setting()->SiteTitle); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/error/css/style.css')); ?>">
</head>
<body>
<?php echo $__env->yieldContent('error'); ?>
</body>
</html>
<?php /**PATH C:\Users\babs\Desktop\Charity\resources\views/layouts/error.blade.php ENDPATH**/ ?>