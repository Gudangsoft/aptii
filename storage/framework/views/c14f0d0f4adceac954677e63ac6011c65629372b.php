<div wire:ignore.self class="modal fade modal-primary" id="edit-tags" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel160">New Tags</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label for="blog-edit-title">Name</label>
                            <input type="text" wire:model.defer="title" id="title" class="form-control">
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" wire:click='saveEditTags(<?php echo e($tagId); ?>)' class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/livewire/article/edit-modal.blade.php ENDPATH**/ ?>