<?php $__env->startSection('title'); ?>
    Upload Sertifikat -
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
                            <h2 class="content-header-title float-left mb-0">Upload Sertifikat</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Prosiding
                                    </li>
                                    <li class="breadcrumb-item active"><a href="<?php echo e(route('certificate.index')); ?>">Sertifikat</a>
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
                                            <form action="<?php echo e(route('certificate.store')); ?>" method="POST" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <label><h5>Penerima Sertifikat</h5></label>
                                                        <select class="select2 form-control form-control-lg select2-hidden-accessible" name="user_id" id="user_id">
                                                            <option selected>--- Pilih ---</option>
                                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($item->id); ?>"><?php echo e(ucwords($item->name)); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Model</h5></label>
                                                        <select class="form-control form-control-lg" name="model" id="model">
                                                            <option selected>--- Pilih ---</option>
                                                            <option value="naskah">Makalah/Naskah</option>
                                                            <option value="seminar">Seminar</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" id="naskah">
                                                        <label><h5>Makalah/Naskah</h5></label>
                                                        <select class="select2 form-control form-control-lg select2-hidden-accessible" name="naskah">
                                                            <option selected>--- Pilih ---</option>
                                                            <?php $__currentLoopData = \App\Models\Prosiding\ProsidingNaskah::where('status',true)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($item->id); ?>"><?php echo e(ucwords($item->judul)); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" id="seminar">
                                                        <label><h5>Seminar</h5></label>
                                                        <select class="select2 form-control form-control-lg select2-hidden-accessible" name="naskah">
                                                            <option selected>--- Pilih ---</option>
                                                            <?php $__currentLoopData = \App\Models\Prosiding\Event::where('status',true)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($item->id); ?>"><?php echo e(ucwords($item->judul)); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Sertifikat Peserta (Tipe File PDF)</h5></label>
                                                        <input type="file" name="document" accept=".pdf" class="form-control">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2"><i data-feather="save"></i> SIMPAN</button>
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
                                window.addEventListener('addSertifikat', event => {
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
                            <script>
                                $('#seminar').hide();
                                $('#model').on('change', function () {
                                    if (this.value == 'seminar') {
                                        $('#naskah').hide();
                                        $('#seminar').show();
                                    } else if(this.value == 'naskah') {
                                        $('#naskah').show();
                                        $('#seminar').hide();
                                    }
                                });
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
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/admin/prosiding/certificate/create.blade.php ENDPATH**/ ?>