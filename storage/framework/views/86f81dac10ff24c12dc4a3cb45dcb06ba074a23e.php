<div>
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-7">
                    <h2 class="content-header-title float-left mb-0">Link Prosiding</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Prosiding
                            </li>
                            <li class="breadcrumb-item active">Link Prosiding
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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <button class="btn-icon btn btn-primary btn-round"  data-toggle="modal" data-target="#create-modal"><i data-feather="link-2"></i> Update Link</button>
                                <div wire:ignore.self class="modal fade text-left" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel16">Link Prosiding</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form wire:submit.prevent='createLinkProsiding' enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label><h5>link </h5></label>
                                                        <input type="url" wire:model.defer='url' class="form-control" placeholder="https://prosiding.com" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary"><i data-feather="save"></i> Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-sm-12 d-flex justify-content-end">

                            </div>
                            <div class="col-lg-2 col-sm-12 d-flex justify-content-end">

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Url</th>
                                    <th>Created By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bold"><?php echo e($row['url']); ?></span>
                                        </td>
                                        <td><?php echo e($row['created_by']); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="5" class="pt-2 pb-1"><strong>Data not found !</strong></td>
                                </tr>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('vendor-css'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/vendors/css/vendors.min.css">
    <?php $__env->stopPush(); ?>
    <?php $__env->startPush('page-js'); ?>
        <script src="<?php echo e(asset('assets')); ?>/ckeditorx/ckeditor.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
        <script>
            window.addEventListener('openCategoryModal', event => {
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
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/livewire/prosiding/link.blade.php ENDPATH**/ ?>