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
            <div class="content-header-left col-md-7 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Users</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">All User
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-5 col-12">
                <div class="form-group">
                <a href="<?php echo e(route('users.create')); ?>" class="btn-icon btn btn-primary btn-round"><i data-feather="plus-circle"></i> Create New User</a>
                    <a href="<?php echo e(route('usershowTrashed')); ?>" class="btn-icon btn btn-dark btn-round"><i data-feather="trash"></i> Recycle</a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card p-1">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-table', [])->html();
} elseif ($_instance->childHasBeenRendered('i4SM8bo')) {
    $componentId = $_instance->getRenderedChildComponentId('i4SM8bo');
    $componentTag = $_instance->getRenderedChildComponentTagName('i4SM8bo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('i4SM8bo');
} else {
    $response = \Livewire\Livewire::mount('user-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('i4SM8bo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:user-table>
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

    document.addEventListener("DOMContentLoaded", () => {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        Livewire.hook('message.processed', (message, component) => {
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        })
    });

    window.addEventListener('openModalDelete', event => {
        $("#delete-modal").modal('show');
    });

    window.addEventListener('closeModalDelete', event => {
        $("#delete-modal").modal('hide');
    });
</script>
<?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e)): ?>
<?php $component = $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e; ?>
<?php unset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e); ?>
<?php endif; ?>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/admin/users/index.blade.php ENDPATH**/ ?>