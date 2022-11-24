<div class="card">
    <div class="card-body">
        <h4 class="text-primary">Kontak Narahubung</h4>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="d-flex justify-content-start align-items-center mt-2">
                <div class="avatar mr-75">
                    <img src="<?php echo e(asset('storage/images/users').'/'.$row->getUser->profile_photo_path); ?>" alt="avatar" height="40" width="40" />
                </div>
                <div class="profile-user-info">
                    <h6 class="mb-0"><?php echo e($row->getUser->name); ?></h6>
                    <small class="text-muted"><?php echo e($row->getUser->phone); ?></small>
                </div>
                <a href="https://wa.me/<?php echo e($row->getUser->phone); ?>" target="_blank" class="btn btn-success btn-icon btn-sm ml-auto">
                    <i data-feather="message-circle"></i>
                </a>
            </div>

            <?php if($loop->depth == 8): ?>
                <?php break; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php
        $json = file_get_contents('JSON/group-cs.json');
        $group = json_decode($json, true);
    ?>
    <?php if($group != null): ?>
    <div class="card-body">
        <h4 class="text-primary">
            Link Group :
            <a href="<?php echo e($group['data']['group'][0]['url']); ?>" class="badge badge-primary">
                Gabung Sekarang
            </a>
        </h4>
    </div>
    <?php endif; ?>
    <?php if($config->address != null): ?>
        <div class="card-body">
            <h4 class="text-primary">Kantor</h4>
            <div class="d-flex justify-content-start align-items-center mt-2">
                <?php echo e($config->address); ?>

            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/admin/widget/customer-care.blade.php ENDPATH**/ ?>