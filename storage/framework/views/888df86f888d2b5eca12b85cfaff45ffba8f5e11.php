<section id="section-studio-type">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2><?php echo e($title); ?></h2>
                    <div class="small-border bg-color-2"></div>
                </div>
            </div>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->index < $limit): ?>
                    <div class="col-md-4">
                        <div class="de-image-text">
                            <a href="/seminar/<?php echo e($event->slug); ?>" class="d-text">
                                <h3><span class="id-color">0<?php echo e($loop->index + 1); ?></span> <?php echo e($event->judul); ?></h3>
                                <p><?php echo Illuminate\Support\Str::words($event->keterangan, 7); ?></p>
                            </a>
                            <img src="<?php echo e(asset('storage/pictures').'/event/4_3/mid/'.$event->image); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/frontend/widget/seminar.blade.php ENDPATH**/ ?>