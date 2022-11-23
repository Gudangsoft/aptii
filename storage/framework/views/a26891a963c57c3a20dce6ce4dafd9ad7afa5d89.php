<section id="section-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2><?php echo e($title); ?></h2>
                    <div class="small-border bg-color-2"></div>
                </div>
            </div>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->index <= $limit): ?>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <a href="/post/<?php echo e($row->slug); ?>" class="de-card">
                        <div class="de-image">
                            <img src="<?php echo e(asset('storage/pictures').'/post/4_3/mid/'.$row->image); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="text">
                            <h4><?php echo e($row->title); ?></h4>
                            <p><?php echo \Illuminate\Support\Str::words($row->content, 10); ?></p>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/frontend/widget/artikel.blade.php ENDPATH**/ ?>