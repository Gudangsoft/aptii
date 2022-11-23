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
                        <a href="<?php echo e(route('upload-pembayaran.create')); ?>" class="btn-icon btn btn-primary btn-round"><i data-feather="plus-circle"></i> Upload Bukti Pembayaran</a>
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
                                    <th>Makalah</th>
                                    <th>Tanggal</th>
                                    <th>Bank</th>
                                    <th>Total</th>
                                    <th>Rekening Tujuan</th>
                                    <th>Keterangan</th>
                                    <th>Status Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="<?php echo e($row->id); ?>" wire:model="selectData" id="a">
                                        </td>
                                        <td><?php echo e($row->getUser->name); ?></td>
                                        <td><?php echo $row->naskah_id != null ? $row->getNaskah->judul : "<span class='badge badge-danger'>NON PEMAKALAH</span>"; ?></td>
                                        <td><?php echo e($row->tanggal_bayar); ?></td>
                                        <td><?php echo e($row->bank_pengirim); ?></td>
                                        <td>Rp <?php echo e(number_format($row->jumlah)); ?></td>
                                        <td><?php echo e($row->getRekeningTujuan->bank); ?> - <?php echo e($row->getRekeningTujuan->rekening); ?> -<?php echo e($row->getRekeningTujuan->nama); ?></td>
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
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/livewire/prosiding/bukti-pembayaran.blade.php ENDPATH**/ ?>