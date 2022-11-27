<?php $__env->startSection('title'); ?>
    Upload Naskah -
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
                            <h2 class="content-header-title float-left mb-0">Upload Naskah Asosiasi</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Asosiasi
                                    </li>
                                    <li class="breadcrumb-item active"><a href="<?php echo e(route('asosiasi.upload-naskah')); ?>">Naskah</a>
                                    </li>
                                    <li class="breadcrumb-item active">Upload
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card p-1">
                            <div class="content-body">
                                <div class="row" id="basic-table">
                                    <div class="col-12">
                                        <div class="card">
                                            <form action="<?php echo e(route('upload-naskah.store')); ?>" method="POST" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label><h5>Bidang Ilmu</h5></label>
                                                        <select class="select2 form-control form-control-lg select2-hidden-accessible" name="bidang_ilmu">
                                                            <option selected>--- Pilih ---</option>
                                                            <?php $__currentLoopData = $bidangIlmu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->judul); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Judul</h5></label>
                                                        <input type="text" name="judul" class="form-control" placeholder="Judul Naskah" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Abstrak</h5></label>
                                                        <textarea class="form-control" name="abstrak" placeholder="Abstrak Naskah" rows="5" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Naskah Peserta (Tipe File doc/docx)</h5></label>
                                                        <input type="file" name="document" accept=".doc,.docx,.pdf" class="form-control">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2"><i data-feather="arrow-up-circle"></i> UPLOAD</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $__env->startPush('vendor-css'); ?>
                            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/vendors/css/vendors.min.css">
                            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/vendors/css/forms/select/select2.min.css">
                            <?php $__env->stopPush(); ?>
                            <?php $__env->startPush('page-vendor'); ?>
                            <script src="<?php echo e(asset('assets')); ?>/vendors/js/forms/select/select2.full.min.js"></script>
                            <?php $__env->stopPush(); ?>
                            <?php $__env->startPush('page-js'); ?>
                            <script src="<?php echo e(asset('assets')); ?>/js/scripts/forms/form-select2.js"></script>

                                <script>
                                    window.addEventListener('addNaskah', event => {
                                        $("#create-modal").modal('show');
                                    })

                                    window.addEventListener('closeModal', event => {
                                        $("#create-modal").modal('hide');
                                    })

                                    window.addEventListener('iconLoad', event => {
                                        if (feather) {
                                            feather.replace({
                                                width: 14,
                                                height: 14
                                            });
                                        }
                                    })
                                </script>
                            <?php $__env->stopPush(); ?>
                        </div>
                    </div>
                </div>
                <?php echo $__env->make('admin.modals.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e)): ?>
<?php $component = $__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e; ?>
<?php unset($__componentOriginal6d37cff2410bd73b1917b54c645d2cccbed85e3e); ?>
<?php endif; ?>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/admin/asosiasi/upload-naskah/index.blade.php ENDPATH**/ ?>