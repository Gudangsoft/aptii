<div class="col-md-4 col-lg-4 col-sm-12">
    <h3>
        <?php echo e($title); ?>

    </h3>
    <div class="small-border sm-left"></div>
    <div class="widget widget-post">
        <ul>
            
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li><span class="date"><?php echo e(\Carbon\Carbon::parse($row->created_at)->format('d M')); ?></span><a href="/post/<?php echo e($row->slug); ?>"><?php echo e($row->title); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li><strong>Konten belum tersedia</strong></li>
            <?php endif; ?>

        </ul>
    </div>
</div>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/frontend/widget/info-prosiding.blade.php ENDPATH**/ ?>