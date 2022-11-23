<div>
    <div class="content-body">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <a href="<?php echo e(route('rekening.index')); ?>" class="btn btn-primary">Setting Rekening</a>
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
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <?php if(count($selectData) > 0): ?>
                                <tr>
                                    <th colspan="10">
                                        <p class="card-text">
                                            <?php echo e(count($selectData)); ?> data selected, <button wire:click="unselectedJobs()" class="btn btn-sm btn-primary">Cancel</button>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(0)">Komfirmasi Belum Lunas</a>
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(1)">Konfirmasi Lunas</a>
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="deleteSelected()">Delete</a>
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
                                    <th>Tanggal</th>
                                    <th>Total</th>
                                    <th>Bank</th>
                                    <th>Keterangan</th>
                                    <th>Status Bayar</th>
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
                                        <td><?php echo $row->naskah_id != null ? $row->getNaskah->judul : "<span class='badge badge-danger'>NON PEMAKALAH</span>"; ?></td>
                                        <td><?php echo e($row->tanggal_bayar); ?></td>
                                        <td>Rp <?php echo e(number_format($row->jumlah)); ?></td>
                                        <td><?php echo e($row->bank_pengirim); ?></td>
                                        <td><?php echo e($row->keterangan); ?></td>
                                        <td class="text-center">
                                            <?php if($row->status == 1): ?>
                                                <span class="badge badge-glow badge-success">LUNAS</span>
                                            <?php elseif($row->status == 0): ?>
                                                <span class="badge badge-glow badge-secondary">MENUNGGU</span>
                                            <?php else: ?>
                                                <span class="badge badge-glow badge-danger">MENUNGGU</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit<?php echo e($row->id); ?>">KONFIRMASI</a></td>
                                        <div wire:ignore.self class="modal fade text-left" id="modal-edit<?php echo e($row->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel16">Konfirmasi Pembayaran Peserta</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <div class="row mb-3">
                                                                    <div class="col-6">
                                                                        <b>Peserta</b>
                                                                    </div>
                                                                    <div class="col-1">:</div>
                                                                    <div class="col-5 d-flex justify-content-right">
                                                                        <?php echo e($row->getUser->name); ?>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <b>Pembayaran Naskah</b>
                                                                    </div>
                                                                    <div class="col-1">:</div>
                                                                    <div class="col-5 d-flex justify-content-right">
                                                                        <?php echo $row->naskah_id != null ? $row->getNaskah->judul : "<span class='badge badge-danger'>NON PEMAKALAH</span>"; ?>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <b>Nomor Transaksi</b>
                                                                    </div>
                                                                    <div class="col-1">:</div>
                                                                    <div class="col-5 d-flex justify-content-right">
                                                                        <?php echo e($row->no_transaksi); ?>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <b>Tanggal Bayar</b>
                                                                    </div>
                                                                    <div class="col-1">:</div>
                                                                    <div class="col-5 d-flex justify-content-right">
                                                                        <?php echo e($row->tanggal_bayar); ?>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <b>Jumlah</b>
                                                                    </div>
                                                                    <div class="col-1">:</div>
                                                                    <div class="col-5 d-flex justify-content-right">
                                                                        Rp <?php echo e(number_format($row->jumlah)); ?>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <b>Dari Bank</b>
                                                                    </div>
                                                                    <div class="col-1">:</div>
                                                                    <div class="col-5 d-flex justify-content-right">
                                                                        <?php echo e($row->bank_pengirim); ?>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <b>Nama Pengirim</b>
                                                                    </div>
                                                                    <div class="col-1">:</div>
                                                                    <div class="col-5 d-flex justify-content-right">
                                                                        <?php echo e($row->nama_pengirim); ?>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <b>Rekening Tujuan</b>
                                                                    </div>
                                                                    <div class="col-1">:</div>
                                                                    <div class="col-5 d-flex justify-content-right">
                                                                        <?php echo e($row->rekening_tujuan); ?>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <b>Keterangan</b>
                                                                    </div>
                                                                    <div class="col-1">:</div>
                                                                    <div class="col-5 d-flex justify-content-right">
                                                                        <?php echo e($row->keterangan); ?>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Konfirmasi
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" href="javascript:void(0);"wire:click='updateStatusPembayaran(1, <?php echo e($row->id); ?>)'>Diterima</a>
                                                                            <a class="dropdown-item" href="javascript:void(0);"wire:click='updateStatusPembayaran(2, <?php echo e($row->id); ?>)'>Menunggu</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="card">
                                                                    <img src="<?php echo e(config('app.url').$row->photo); ?>" alt="bukti pembayaran" onclick="detailImage()">
                                                                    <script>
                                                                        function detailImage(){
                                                                            window.location.href = "<?php echo e(config('app.url').$row->photo); ?>";
                                                                        }
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <?php $__env->stopPush(); ?>
    <?php $__env->startPush('page-js'); ?>
        <script>
            window.addEventListener('openFormModal', event => {
                $("#create-modal").modal('show');
            })

            window.addEventListener('closeFormModal', event => {
                $("#create-modal").modal('hide');
            })

            window.addEventListener('closeEditModal', event => {
                let id = event.detail.id;
                $("#modal-edit"+id).modal('hide');
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
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/livewire/prosiding/data-pembayaran.blade.php ENDPATH**/ ?>