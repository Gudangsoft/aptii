<?php if (isset($component)) { $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MasterLayouts::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master-layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\MasterLayouts::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Profile Settings</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active"> Profile Settings
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- account setting page -->
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column nav-left">
                            <!-- general -->
                            <li class="nav-item">
                                <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i data-feather="user" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">General</span>
                                </a>
                            </li>
                            <!-- change password -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">Change Password</span>
                                </a>
                            </li>
                            <!-- information -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                    <i data-feather="info" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">Information</span>
                                </a>
                            </li>
                            <!-- social -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                    <i data-feather="link" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">Social</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ left menu section -->

                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">

                                    <?php echo $__env->make('admin.users.settings.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('admin.users.settings.change-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('admin.users.settings.information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('admin.users.settings.socialmedia', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>


<?php $__env->startPush('page-vendor'); ?>
<script src="<?php echo e(asset('assets')); ?>/vendors/js/pickers/pickadate/picker.js"></script>
<script src="<?php echo e(asset('assets')); ?>/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="<?php echo e(asset('assets')); ?>/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="<?php echo e(asset('assets')); ?>/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="<?php echo e(asset('assets')); ?>/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('custom-scripts'); ?>
<script>
    $('#password, #confirm-password').on('keyup', function () {
        if ($('#password').val() == $('#confirm-password').val()) {
            $('#message').html('Password sama').css('color', 'green');
            $(':input[type="submit"]').prop('disabled', false);
        }else{
            $('#message').html('Password tidak sama').css('color', 'red');
        }
    });

    document.getElementById('account-upload').onchange = function () {
        var src = URL.createObjectURL(this.files[0])
        document.getElementById('account-upload-img').src = src
    }
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('page-js'); ?>
<script src="<?php echo e(asset('assets')); ?>/js/scripts/forms/form-number-input.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/scripts/forms/pickers/form-pickers.js"></script>
<?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e)): ?>
<?php $component = $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e; ?>
<?php unset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e); ?>
<?php endif; ?>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/admin/users/settings/index.blade.php ENDPATH**/ ?>