<?php if (isset($component)) { $__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FrontendMaster::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FrontendMaster::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section id="subheader" class="text-light" data-bgimage="url(<?php echo e(asset('frontend')); ?>/images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h1>ARTIKEL</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section">
        <div class="container">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.articles', ['tag' => $slug])->html();
} elseif ($_instance->childHasBeenRendered('sc0FapU')) {
    $componentId = $_instance->getRenderedChildComponentId('sc0FapU');
    $componentTag = $_instance->getRenderedChildComponentTagName('sc0FapU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sc0FapU');
} else {
    $response = \Livewire\Livewire::mount('frontend.articles', ['tag' => $slug]);
    $html = $response->html();
    $_instance->logRenderedChild('sc0FapU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </section>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286)): ?>
<?php $component = $__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286; ?>
<?php unset($__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286); ?>
<?php endif; ?>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/frontend/tags/index.blade.php ENDPATH**/ ?>