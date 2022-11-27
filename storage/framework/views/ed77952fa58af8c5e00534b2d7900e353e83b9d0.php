<?php $__env->startSection('title'); ?>
    Upload Bukti Pembayaran -
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
                            <h2 class="content-header-title float-left mb-0">Upload Bukti Pembayaran</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="<?php echo e(route('asosiasi.bukti-pembayaran')); ?>">Bukti Pembayaran</a>
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
                                            <form action="<?php echo e(route('upload-pembayaran.store')); ?>" method="POST" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label><h5>Kategori Pembayaran</h5></label>
                                                        <select class="select2 form-control form-control-lg select2-hidden-accessible" id="category" name="category">
                                                            <option value="" disabled selected>--- Pilih ---</option>
                                                            <option value="1">Non Pemakalah</option>
                                                            <option value="2">Pemakalah</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" id="naskah">
                                                        <label><h5>Naskah</h5> Berikut adalah data naskah dengan status <b>Menunggu Pembayaran</b></label>
                                                        <select class="select2 form-control form-control-lg select2-hidden-accessible" name="naskah">
                                                            <option value="" disabled selected>--- Pilih ---</option>
                                                            <?php $__currentLoopData = $dataNaskah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->judul); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Nomor Transaksi</h5></label>
                                                        <input type="text" name="no_transaksi" class="form-control" placeholder="Nomor Transaksi Dari Bank" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Tanggal Bayar</h5></label>
                                                        <input type="date" name="tanggal_bayar" class="form-control" placeholder="Tanggal Bayar" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Jumlah Bayar RP</h5></label>
                                                        <input type="text" name="jumlah_bayar" class="form-control" placeholder="0" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Nama Pengirim</h5></label>
                                                        <input type="text" name="nama_pengirim" class="form-control" placeholder="Cth: Andi Mahendra" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Bank Pengirim</h5></label>
                                                        <input type="text" name="bank_pengirim" class="form-control" placeholder="Cth: Mandiri" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Rekening Tujuan</h5></label>
                                                        <select class="select2 form-control form-control-lg select2-hidden-accessible" name="rekening_tujuan">
                                                            <option value="" disabled selected>--- Pilih ---</option>
                                                            <?php $__currentLoopData = $dataRekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rekening): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($rekening->id); ?>"><?php echo e($rekening->bank); ?> - <?php echo e($rekening->rekening); ?> a/n <?php echo e($rekening->nama); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Keterangan</h5></label>
                                                        <textarea class="form-control" name="keterangan" placeholder="Cth: Biaya pendaftaran ..." rows=3" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Bukti Bayar</h5></label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="photo" id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih File</label>
                                                        </div>
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
                                <script>
                                    $('#naskah').hide();
                                    $('#category').on('change', function () {
                                        if (this.value == 2) {
                                            $('#naskah').show();
                                        }else{
                                            $('#naskah').hide();
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
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/admin/asosiasi/bukti-pembayaran/create.blade.php ENDPATH**/ ?>