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
            <div class="content-header-left col-md-7 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Users</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/users">Users</a>
                                </li>
                                <li class="breadcrumb-item active">Recycle
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
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-trashed', [])->html();
} elseif ($_instance->childHasBeenRendered('CkdW78U')) {
    $componentId = $_instance->getRenderedChildComponentId('CkdW78U');
    $componentTag = $_instance->getRenderedChildComponentTagName('CkdW78U');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CkdW78U');
} else {
    $response = \Livewire\Livewire::mount('user-trashed', []);
    $html = $response->html();
    $_instance->logRenderedChild('CkdW78U', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:user-trashed>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('admin.modals.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->startPush('custom-scripts'); ?>
<script>
    window.addEventListener('confirmDeleteForever', event => {
        $("#confirm").modal('show');
        $("#message").html(event.detail.message);

    });
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
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/admin/users/trashed.blade.php ENDPATH**/ ?>