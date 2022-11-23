<?php if (isset($component)) { $__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FrontendMaster::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FrontendMaster::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php echo $__env->make('frontend.widget.headline-slider', ['data' => $headline, 'limit' => 4], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.sections.second-line', [
            'agenda' => $agenda,
            'prosidingInfo' => $prosidingInfo,
            'cutomerCare' => $customerCare
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.widget.seminar', ['data' => $events, 'title' => 'SEMINAR', 'limit' => 6], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.widget.artikel', ['data' => $news, 'title' => 'BERITA', 'limit' => 6], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286)): ?>
<?php $component = $__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286; ?>
<?php unset($__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286); ?>
<?php endif; ?>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/frontend/home.blade.php ENDPATH**/ ?>