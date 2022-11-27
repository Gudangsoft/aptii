<?php $__env->startSection('title'); ?>
    <?php echo e($data->judul); ?> -
<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MasterLayouts::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master-layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\MasterLayouts::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Kerjasama Lembaga Jurnal dengan Asosiasi</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="<?php echo e(route('asosiasi.seminar')); ?>">Seminar</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-5 col-12">

                </div>
            </div>
            <div class="content-body">
                <!-- Blog Detail -->
                <div class="blog-detail-wrapper">
                    <div class="row">
                        <!-- Blog -->
                        <div class="col-12">
                            <div class="card">
                                <img src="<?php echo e($data->image ? asset('storage/pictures').'/event/4_3/mid/'.$data->image : asset('assets').'/images/banner/banner-12.jpg'); ?>" class="img-fluid card-img-top" alt="Blog Detail Pic" />
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $data->judul; ?></h4>
                                    <div class="media">
                                        <div class="avatar mr-50">
                                            <img src="<?php echo e(asset('storage/images/users').'/'.$data->getUser->profile_photo_path); ?>" alt="Avatar" width="24" height="24" />
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted mr-25">by</small>
                                            <small><a href="javascript:void(0);" class="text-body"><?php echo e($data->getUser->name); ?></a></small>
                                            <span class="text-muted ml-50 mr-25">|</span>
                                            <small class="text-muted"><?php echo e(\Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y | H:m')); ?></small>
                                        </div>
                                    </div>
                                    <div class="my-1 py-25">
                                        <a href="#">
                                            <?php if($data->type == 1): ?>
                                                <span class="badge badge-light-success">nasional</span>
                                            <?php elseif($data->type == 2): ?>
                                                <span class="badge badge-light-danger">internasional</span>
                                            <?php else: ?>
                                                <span class="badge badge-light-dark">lainnya</span>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <p class="card-text mb-2">
                                        <?php echo $data->keterangan; ?>

                                    </p>

                                    <hr class="my-2" />
                                    
                                </div>
                            </div>
                        </div>
                        <!--/ Blog -->
                    </div>
                </div>
                <!--/ Blog Detail -->

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e)): ?>
<?php $component = $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e; ?>
<?php unset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e); ?>
<?php endif; ?>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/admin/event/detail.blade.php ENDPATH**/ ?>