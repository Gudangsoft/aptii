<?php $__env->startSection('title'); ?>
    Edit Role Permission Setting -
<?php $__env->stopSection(); ?>
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
                <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-7">
                            <h2 class="content-header-title float-left mb-0">Edit Role Setting</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="<?php echo e(route('role-permission.index')); ?>">Role</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <form action="<?php echo e(route('role-permission.update', $role->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5>Name</h5>
                                    <input type="text" class="form-control mb-2" name="name" value="<?php echo e($role->name); ?>">
                                    <h5>Permission Access</h5>
                                    <select class="select2 form-control" name="permission[]" multiple>
                                        <optgroup label="Permission">
                                            <?php $__currentLoopData = $currentPermission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($permission->id); ?>" selected><?php echo e($permission->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $dataPermission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </optgroup>
                                    </select>
                                    <button type="submit" class="btn btn-primary mt-2">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <?php $__env->startPush('vendor-css'); ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/vendors/css/vendors.min.css">
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/vendors/css/forms/select/select2.min.css">
            <?php $__env->stopPush(); ?>

            <?php $__env->startPush('page-vendor'); ?>
            <script src="<?php echo e(asset('assets')); ?>/vendors/js/forms/select/select2.full.min.js"></script>
            <?php $__env->stopPush(); ?>

            <?php $__env->startPush('page-js'); ?>
            <script src="<?php echo e(asset('assets')); ?>/js/scripts/forms/form-select2.js"></script>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $('.ckeditor').ckeditor();
                    });
                </script>
            <?php $__env->stopPush(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e)): ?>
<?php $component = $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e; ?>
<?php unset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e); ?>
<?php endif; ?>

<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/admin/settings/edit-role-permission.blade.php ENDPATH**/ ?>