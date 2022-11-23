<div class="col-md-4 col-lg-4 col-sm-12">
    <h3>
        <?php echo e($title); ?>

    </h2>
    <div class="small-border sm-left"></div>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="sm-icon mb30">
            <i class="bg-color fa fa-calendar-check-o"></i>
            <div class="si-inner">
                <a href="<?php echo e($row->url); ?>" class=" text-dark">
                    <strong><?php echo e(\Illuminate\Support\Str::words($row->title, 15)); ?></strong>
                </a>
                <span class="p-title invert"><?php echo e($row->dateFormat); ?></span>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/frontend/widget/agenda.blade.php ENDPATH**/ ?>