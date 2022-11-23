<div>
    <form wire:submit.prevent="submit" class="validate-form">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="accountTextarea"bio>Bio</label>
                    <textarea class="form-control" wire:model.defer='bio' id="accountTextarea" rows="4"><?php echo e(auth()->user()->bio); ?></textarea>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="accountSelect">Jenis Kelamin</label>
                    <select class="form-control" id="accountSelect" wire:model.defer="gender">
                        <option value="l" <?php echo e($gender == 'l' ? 'selected' : ''); ?>>Laki-Laki</option>
                        <option value="p" <?php echo e($gender == 'p' ? 'selected' : ''); ?>>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="pd-months-year">Date of birth</label>
                    <input type="text" wire:model.defer="dateofbirth" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="account-website">Age</label>
                    
                    <input type="number" wire:model.defer="age" class="form-control"/>
                    <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="account-phone">Phone</label>
                    <input type="number" wire:model.defer="phone" class="form-control" id="account-phone" placeholder="Phone number" value="(+656) 254 2568"  />
                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="accountTextarea">Address</label>
                    <textarea class="form-control" wire:model.defer="address" id="accountTextarea" rows="2" placeholder="Your address..."></textarea>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-1 mr-1">Save changes</button>
            </div>
        </div>
    </form>
</div>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/livewire/user/information.blade.php ENDPATH**/ ?>