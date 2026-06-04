<?php echo $__env->make('themes.default.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('themes.default.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('scripts'); ?><?php /**PATH C:\xampp\htdocs\Lhakpa_june\resources\views/themes/default/common/master.blade.php ENDPATH**/ ?>