<div>
    <div class="content-body">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">

                            </div>
                            <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon-search1"><i data-feather="search"></i></span>
                                    </div>
                                    <input type="text" wire:model="search" class="form-control" placeholder="Cari nama" aria-label="Search..." aria-describedby="basic-addon-search1" />
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12 d-flex justify-content-end">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon-search1">Page</i></span>
                                    </div>
                                    <select class="form-control" wire:model="changeLimitPage" id="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="<?php echo e(route('upload-naskah.create')); ?>" class="btn-icon btn btn-primary btn-round"><i data-feather="plus-circle"></i> Tambah Naskah</a>
                        
                        <a href="https://regprosiding.stekom.ac.id/images/template.doc" class="btn-icon btn btn-secondary btn-round"><i data-feather="book"></i> Format Naskah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <?php if(count($selectData) > 0): ?>
                                    <th colspan="6">
                                        <p class="card-text">
                                            <?php echo e(count($selectData)); ?> data selected, <button wire:click="unselectedJobs()" class="btn btn-sm btn-primary">Cancel</button>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="deleteSelected()">Hapus</a>
                                                </div>
                                            </div>
                                        </p>
                                    </th>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <th><input type="checkbox" wire:click="selectAll()" wire:model="selectAll"></th>
                                    
                                    
                                    <th>Judul</th>
                                    <th>Bidang Ilmu</th>
                                    <th>Tanggal Submit</th>
                                    <th>Dokumen</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="<?php echo e($row->id); ?>" wire:model="selectData" id="a">
                                        </td>
                                        
                                        
                                        <td><?php echo e($row->judul); ?></td>
                                        <td><?php echo e($row->getBidangIlmu->judul); ?></td>
                                        <td><?php echo e($row->tanggalSubmit); ?></td>
                                        <td><a href="<?php echo e($row->document); ?>" class="badge badge-glow badge-primary"> FILE NASKAH</a></td>
                                        <td>
                                            <?php if($row->status == 1): ?>
                                                <span class="badge badge-glow badge-success">Diterima</span>
                                            <?php elseif($row->status == 2): ?>
                                                <span class="badge badge-glow badge-warning">Tidak ada naskah</span>
                                            <?php elseif($row->status == 3): ?>
                                                <span class="badge badge-glow badge-dark">Tidak sesuai</span>
                                            <?php elseif($row->status == 4): ?>
                                                <span class="badge badge-glow badge-danger">Ditolak</span>
                                            <?php elseif($row->status == 5): ?>
                                                <span class="badge badge-glow badge-primary">Menunggu Pembayaran</span>
                                            <?php elseif($row->status == 0): ?>
                                                <span class="badge badge-glow badge-secondary">Menunggu</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="9" class="pt-2 pb-1 text-center"><h4>Data tidak ditemukan !</h5></td>
                                </tr>
                                <?php endif; ?>

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            <?php echo e($data->links()); ?>

                        </div>
                    </div>
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
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/livewire/prosiding/upload-naskah.blade.php ENDPATH**/ ?>