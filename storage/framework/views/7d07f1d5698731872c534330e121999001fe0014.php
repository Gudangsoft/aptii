<!DOCTYPE html>
<html lang="zxx">

<head>
    <link rel="icon" href="<?php echo e(asset('frontend')); ?>/images/icon.png" type="image/gif" sizes="16x16">
    <?php echo Meta::toHtml(); ?>

    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="<?php echo e(asset('frontend')); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="<?php echo e(asset('frontend')); ?>/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="<?php echo e(asset('frontend')); ?>/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend')); ?>/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend')); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend')); ?>/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend')); ?>/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend')); ?>/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend')); ?>/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link id="mdb" href="<?php echo e(asset('frontend')); ?>/css/mdb.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend')); ?>/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="<?php echo e(asset('frontend')); ?>/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend')); ?>/css/coloring.css" rel="stylesheet" type="text/css" />
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
    <div id="wrapper">
        
        <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <?php echo e($slot); ?>

        </div>

        <!-- content close -->
        <a href="#" id="back-to-top"></a>

        <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    </div>


    <!-- Javascript Files
    ================================================== -->
    <?php echo \Livewire\Livewire::scripts(); ?>


    <script src="<?php echo e(asset('frontend')); ?>/js/jquery.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/wow.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/easing.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/validation.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/enquire.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/jquery.plugin.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/jquery.countTo.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/jquery.countdown.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/jquery.lazy.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/jquery.lazy.plugins.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/mdb.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/js/designesia.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</body>

</html>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/frontend/layouts/master.blade.php ENDPATH**/ ?>