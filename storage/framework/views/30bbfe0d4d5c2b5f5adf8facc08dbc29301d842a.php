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
                        <h1>Kontak</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <section aria-label="section">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-sm-30">
                    <h3>Lokasi</h3>
                    <div class="de-map-wrapper">
                        <?php
                            $config = \App\Models\Admin\Configuration::orderBy('created_at')->first();
                        ?>
                        <iframe src="<?php echo e($config->address_map); ?>"  allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h3>Narahubung</h3>
                    <?php echo $__env->make('frontend.widget.contact', ['title' => 'Kontak', 'limit' => 3], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>

            </div>
        </div>

    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286)): ?>
<?php $component = $__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286; ?>
<?php unset($__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286); ?>
<?php endif; ?>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/frontend/sections/contact.blade.php ENDPATH**/ ?>