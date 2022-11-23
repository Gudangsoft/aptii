<div>
    <div class="row">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item">
                    <div class="post-content">
                        <div class="post-image">
                            <img alt="" src="<?php echo e($row->imageFull); ?>" class="lazy">
                        </div>
                        <div class="post-text">
                            <span class="p-tagline"><?php echo e($row->getCategory->name); ?></span>
                            <span class="p-date"><?php echo e(\Carbon\Carbon::parse($row->created_at)->isoFormat('dddd, d MMMM Y')); ?></span>
                            <h4><a href="/post/<?php echo e($row->slug); ?>"><?php echo e($row->title); ?><span></span></a></h4>
                            <p><?php echo Illuminate\Support\Str::words($row->content, 20); ?></p>
                            <a class="btn-main" href="/post/<?php echo e($row->slug); ?>">Baca Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="spacer-single"></div>

        <?php echo e($data->onEachSide(5)->links()); ?>


    </div>
</div>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/livewire/frontend/articles.blade.php ENDPATH**/ ?>