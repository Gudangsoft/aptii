<?php if (isset($component)) { $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MasterLayouts::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master-layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\MasterLayouts::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Create New Users</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('users.index')); ?>">List User</a>
                                </li>
                                <li class="breadcrumb-item active">Create
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header row">
            <div>
                <?php if(session()->has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="content-body">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card p-1">
                        <section id="basic-horizontal-layouts">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form form-horizontal" action="<?php echo e(route('users.store')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 col-form-label">
                                                                <label for="first-name">Full Name</label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="first-name" class="form-control" name="name" placeholder="First Name" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 col-form-label">
                                                                <label for="email-id">Email</label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="email" id="email-id" class="form-control" name="email" placeholder="Email" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 col-form-label">
                                                                <label for="email-id">Role</label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <select class="form-control mb-1" id="selectDefault" name="role">
                                                                    <option value="0" selected>-- SELECT ROLES --</option>
                                                                    <?php $__currentLoopData = $data['roles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($role->name); ?>"><?php echo e(strtoupper($role->name)); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9 offset-sm-3">
                                                        <button type="submit" class="btn btn-primary mr-1">Create</button>
                                                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('admin.modals.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->startPush('custom-scripts'); ?>
<script>
    window.addEventListener('success', event => {
        $("#successAlert").modal('show');
        $("#message").html(event.detail.message);

    });
</script>
<?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e)): ?>
<?php $component = $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e; ?>
<?php unset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e); ?>
<?php endif; ?>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/admin/users/create.blade.php ENDPATH**/ ?>