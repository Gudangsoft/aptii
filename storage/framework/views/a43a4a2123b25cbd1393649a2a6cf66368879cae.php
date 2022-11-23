<script src="<?php echo e(asset('assets')); ?>/vendors/js/vendors.min.js"></script>
<?php echo $__env->yieldPushContent('page-vendor'); ?>

<?php echo $__env->yieldPushContent('custom-scripts'); ?>


<script src="<?php echo e(asset('assets')); ?>/js/core/app-menu.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/core/app.js"></script>

<?php echo $__env->yieldPushContent('page-js'); ?>

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/layouts/scripts.blade.php ENDPATH**/ ?>