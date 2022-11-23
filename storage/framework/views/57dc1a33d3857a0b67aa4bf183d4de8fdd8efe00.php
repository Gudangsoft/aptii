<div>
    <div class="content-body">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 mt-1">
                                <div id="dialog-content" style="display:none;max-width:2500px;" class="rounded">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Institusi</th>
                                                    <th>HP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__empty_1 = true; $__currentLoopData = $pesertas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peserta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr>
                                                        <td><?php echo e($peserta->getUser->name); ?></td>
                                                        <td><?php echo e($peserta->getUser->email); ?></td>
                                                        <td><?php echo e($peserta->getUser->company); ?></td>
                                                        <td><?php echo e($peserta->getUser->phone); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="9" class="pt-2 pb-1 text-center"><h4>Data tidak ditemukan !</h5></td>
                                                </tr>
                                                <?php endif; ?>

                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                <button data-fancybox="dialog" data-src="#dialog-content" class="btn btn-sm btn-primary">Peserta = <?php echo e($pesertas->count()); ?></button>
                                <button class="btn btn-sm btn-dark">Naskah = <?php echo e($totalNaskah); ?></button>
                            </div>
                            <div class="col-lg-4 col-sm-12 d-flex justify-content-end mt-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon-search1"><i data-feather="search"></i></span>
                                    </div>
                                    <input type="text" wire:model="search" class="form-control" placeholder="Cari Judul Naskah" aria-label="Search..." aria-describedby="basic-addon-search1" />
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12 d-flex justify-content-end mt-1">
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
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <?php if(count($selectData) > 0): ?>
                                <tr>
                                    <th colspan="7">
                                        <p class="card-text">
                                            <?php echo e(count($selectData)); ?> data selected, <button wire:click="unselectedJobs()" class="btn btn-sm btn-primary">Cancel</button>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(1)">Diterima</a>
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(2)">Naskah tidak ada</a>
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(3)">Naskah tidak sesuai, perbaiki</a>
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(4)">Naskah tidak sesuai, ditolak</a>
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="deleteSelected()">Hapus</a>
                                                </div>
                                            </div>
                                        </p>
                                    </th>
                                </tr>
                                <?php endif; ?>
                                <tr>
                                    <th><input type="checkbox" wire:click="selectAll()" wire:model="selectAll"></th>
                                    <th>Nama</th>
                                    <th>Institusi</th>
                                    <th>Judul</th>
                                    <th>Bidang Ilmu</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="<?php echo e($row->id); ?>" wire:model="selectData" id="a">
                                        </td>
                                        <td><?php echo e($row->getUser->name); ?></td>
                                        <td><?php echo e($row->getUser->company); ?></td>
                                        <td><?php echo e($row->judul); ?></td>
                                        <td><?php echo e($row->getBidangIlmu->judul); ?></td>
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
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Pilih
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="<?php echo e($row->document); ?>">Detail File</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0);"wire:click='updateStatusSingle(5, <?php echo e($row->id); ?>)'>Menunggu Pembayaran</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"wire:click='updateStatusSingle(1, <?php echo e($row->id); ?>)'>Diterima</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"wire:click='updateStatusSingle(2, <?php echo e($row->id); ?>)'>Naskah tidak ada</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"wire:click='updateStatusSingle(3, <?php echo e($row->id); ?>)'>Tidak sesuai, silakan perbaiki</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"wire:click='updateStatusSingle(4, <?php echo e($row->id); ?>)'>Tidak sesuai, ditolak</a>
                                                </div>
                                            </div>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <?php $__env->stopPush(); ?>
    <?php $__env->startPush('page-js'); ?>
        <script>
            window.addEventListener('openFormModal', event => {
                $("#create-modal").modal('show');
            })

            window.addEventListener('closeFormModal', event => {
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
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <?php $__env->stopPush(); ?>

</div>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/livewire/prosiding/data-naskah.blade.php ENDPATH**/ ?>