<div>
    <div class="row">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-12">
                <div class="card">
                    <a href="<?php echo e(route('prosiding.seminar-detail', $item->slug)); ?>">
                        <img class="card-img-top img-fluid" src="<?php echo e($item->image ? asset('storage/pictures').'/event/4_3/mid/'.$item->image : asset('assets').'/images/slider/03.jpg'); ?>" alt="Blog Post pic" />
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="<?php echo e(route('prosiding.seminar-detail', $item->slug)); ?>" class="blog-title-truncate text-body-heading"><?php echo e($item->judul); ?></a>
                        </h4>
                        <div class="media">
                            <div class="avatar mr-50">
                                <img src="<?php echo e(asset('storage/images/users').'/'.$item->getUser->profile_photo_path); ?>" alt="Avatar" width="24" height="24" />
                            </div>
                            <div class="media-body">
                                <small class="text-muted mr-25">oleh</small>
                                <small><a href="javascript:void(0);" class="text-body"><?php echo e($item->getUser->name); ?></a></small>
                                <span class="text-muted ml-50 mr-25">|</span>
                                <small class="text-muted"><?php echo e(\Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y')); ?></small>
                            </div>
                        </div>
                        <div class="my-1 py-25">
                            <a href="#">
                                <?php if($item->type == 1): ?>
                                    <span class="badge badge-light-success">nasional</span>
                                <?php elseif($item->type == 2): ?>
                                    <span class="badge badge-light-danger">internasional</span>
                                <?php else: ?>
                                    <span class="badge badge-light-dark">lainnya</span>
                                <?php endif; ?>
                            </a>
                        </div>
                        <p class="card-text blog-content-truncate">
                            <?php echo \Illuminate\Support\Str::words($item->keterangan, 20, '...'); ?>

                        </p>
                        <hr />
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?php echo e(route('prosiding.seminar-detail', $item->slug)); ?>" class="font-weight-bold">Baca Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 d-flex justify-content-center">
            <?php echo e($data->links()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/livewire/prosiding/seminar.blade.php ENDPATH**/ ?>