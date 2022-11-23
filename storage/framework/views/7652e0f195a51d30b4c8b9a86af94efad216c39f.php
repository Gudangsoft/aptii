<div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.information', ['user' => $user])->html();
} elseif ($_instance->childHasBeenRendered('EV8IZt3')) {
    $componentId = $_instance->getRenderedChildComponentId('EV8IZt3');
    $componentTag = $_instance->getRenderedChildComponentTagName('EV8IZt3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EV8IZt3');
} else {
    $response = \Livewire\Livewire::mount('user.information', ['user' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild('EV8IZt3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

<?php $__env->startPush('vendor-css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/vendors/css/pickers/flatpickr/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page-css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/plugins/forms/pickers/form-flat-pickr.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/plugins/forms/pickers/form-pickadate.css">
<?php $__env->stopPush(); ?>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/admin/users/settings/information.blade.php ENDPATH**/ ?>