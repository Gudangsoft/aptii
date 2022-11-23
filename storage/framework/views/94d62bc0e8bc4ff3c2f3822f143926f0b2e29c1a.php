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
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('article.tags')->html();
} elseif ($_instance->childHasBeenRendered('AlSRhYC')) {
    $componentId = $_instance->getRenderedChildComponentId('AlSRhYC');
    $componentTag = $_instance->getRenderedChildComponentTagName('AlSRhYC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AlSRhYC');
} else {
    $response = \Livewire\Livewire::mount('article.tags');
    $html = $response->html();
    $_instance->logRenderedChild('AlSRhYC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e)): ?>
<?php $component = $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e; ?>
<?php unset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e); ?>
<?php endif; ?>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/admin/article/tags/index.blade.php ENDPATH**/ ?>