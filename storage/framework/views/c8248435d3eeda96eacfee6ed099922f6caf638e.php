<div class="col-md-4 col-lg-4 col-sm-12">
    <h3>
        Kontak
    </h3>
    <div class="small-border sm-left"></div>
    <div class="padding40 box-rounded mb30" data-bgcolor="#F2F6FE">
        <?php $__currentLoopData = $customerCare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3><?php echo e($row->getUser->name); ?></h3>
            <address class="s1">
                <span><i class="id-color fa fa-phone fa-lg"></i><?php echo e($row->getUser->phone); ?></span>
                <span><i class="id-color fa fa-whatsapp fa-lg"></i><a href="https://wa.me/<?php echo e($row->getUser->phone); ?>">Whatsapp</a></span>
            </address>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/frontend/widget/contact.blade.php ENDPATH**/ ?>