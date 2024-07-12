
<?php $__env->startSection('error'); ?>
<!-- ===============================  CONTENT ======================================== -->
<div class="overlay"></div>
<div class="terminal">
	<h1>Error <span class="errorcode">404</span></h1>
	<p class="output">The page you are looking for might have been removed, had its name changed or is temporarily unavailable</ü>
		<p class="output">Please try 
			<a href="<?php echo e(url('/')); ?>">Home</a>
		</p>
		<p class="output">Good luck</p>
	</div>
	<!-- ========================== CONTENT : END ============================================== -->
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babs\Desktop\Charity\resources\views\errors\404.blade.php ENDPATH**/ ?>