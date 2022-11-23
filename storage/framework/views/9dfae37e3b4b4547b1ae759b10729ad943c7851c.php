<?php $__env->startSection('title'); ?>
    Info Prosiding -
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
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Info Prosiding</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Prosiding
                                    </li>
                                    <li class="breadcrumb-item active"><a href="<?php echo e(route('prosiding.info')); ?>">Info</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-5 col-12">

                </div>
            </div>
            <div class="content-body">
                <!-- Blog List -->
                <div class="blog-list-wrapper">
                    <!-- Blog List Items -->
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('prosiding.info-prosiding')->html();
} elseif ($_instance->childHasBeenRendered('ukeFU1m')) {
    $componentId = $_instance->getRenderedChildComponentId('ukeFU1m');
    $componentTag = $_instance->getRenderedChildComponentTagName('ukeFU1m');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ukeFU1m');
} else {
    $response = \Livewire\Livewire::mount('prosiding.info-prosiding');
    $html = $response->html();
    $_instance->logRenderedChild('ukeFU1m', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <!--/ Blog List Items -->

                </div>
                <!--/ Blog List -->

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e)): ?>
<?php $component = $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e; ?>
<?php unset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e); ?>
<?php endif; ?>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/admin/prosiding/info/index.blade.php ENDPATH**/ ?>