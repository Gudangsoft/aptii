<?php if (isset($component)) { $__componentOriginal3a8ee1d14b88091a863c419e0a198fac173e0286 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FrontendMaster::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FrontendMaster::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section id="subheader" class="text-light" data-bgimage="url(<?php echo e(asset('frontend/images')); ?>/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h1><?php echo e($data->title); ?></h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-read">

                    <img alt="" src="<?php echo e($data->imageFull); ?>" class="img-fullwidth rounded">

                    <div class="post-text">
                        <span class="post-date"><?php echo e($data->dateFormat); ?></span>
                        <span class="post-like"><?php echo e($data->counter ?? 0); ?> pembaca</span><br>
                        <?php echo $data->content; ?>


                    </div>

                </div>

                <div class="spacer-single"></div>

            </div>

            <div id="sidebar" class="col-md-4">
                <div class="widget widget-post">
                    <h4>Populer</h4>
                    <div class="small-border"></div>
                    <ul>
                        <?php $__empty_1 = true; $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li><span class="date"><?php echo e(\Carbon\Carbon::parse($row->created_at)->format('d M')); ?></span><a href="/post/<?php echo e($row->slug); ?>"><?php echo e($row->title); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li><span class="date">22 Jun</span><a href="#">Experts Web Design Tips</a></li>
                        <?php endif; ?>

                    </ul>
                </div>

                <div class="widget widget-post">

                <h4>Agenda</h4>
                <div class="small-border"></div>
                    <div class="de-box mb25">
                        <?php $__currentLoopData = $agendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="sm-icon mb30">
                                <i class="bg-color fa fa-calendar-check-o"></i>
                                <div class="si-inner">
                                    <h6><?php echo e($agenda->title); ?></h5>
                                    <?php echo e($agenda->dateFormat); ?>

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="widget widget_tags">
                    <h4>Tags</h4>
                    <div class="small-border"></div>
                    <ul>
                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="/tag/<?php echo e($tag->slug); ?>"><?php echo e($tag->title); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

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
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/frontend/articles/detail.blade.php ENDPATH**/ ?>