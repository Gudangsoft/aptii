<div class="card card-developer-meetup">
    <div class="meetup-img-wrapper rounded-top text-center">
        <img src="<?php echo e(asset('assets')); ?>/images/illustration/email.svg" alt="Meeting Pic" height="170" />
    </div>
    <div class="card-body p-0">
        <div class="card">
            <div class="card-body">
                <div class="media mb-1">
                    <div class="avatar bg-light-primary rounded mr-1">
                        <div class="avatar-content">
                            <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h6 class="mb-0"><?php echo e($data['date']); ?></h6>
                        <small><?php echo e($data['time']); ?></small>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Agenda Informasi</h4>
            </div>
            <div class="card-body">
                <div class="list-group">
                    <?php $__empty_1 = true; $__currentLoopData = $agendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e($agenda->url); ?>" class="list-group-item list-group-item-action <?php echo e($loop->index == 0 ? 'active' : ''); ?>">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 <?php echo e($loop->index == 0 ? 'text-white' : 'text-dark'); ?>"><?php echo e($agenda->title); ?></h5>
                        </div>
                        <span class="badge badge-dark"><small class="<?php echo e($loop->index == 0 ? 'text-secondary' : ''); ?>"><?php echo e($agenda->dateFormat); ?></small></span>
                        <p class="card-text">
                            <?php echo e(\Illuminate\Support\Str::words($agenda->title, 15)); ?>

                        </p>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h5>Agenda tidak tersedia</h5>
                    <?php endif; ?>
                    </div>
                </div>
        </div>

    </div>
</div>

<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/admin/widget/home.blade.php ENDPATH**/ ?>