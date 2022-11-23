<div>
    <form wire:submit.prevent="saveCategory">
        <div class="modal-body">
            <div class="col-12">
                <div class="form-group mb-2">
                    <label for="blog-edit-title">Name</label>
                    <input type="text" wire:model="name" id="title" class="form-control">
                    <?php $__errorArgs = ['name'];
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
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/livewire/article/category-form.blade.php ENDPATH**/ ?>