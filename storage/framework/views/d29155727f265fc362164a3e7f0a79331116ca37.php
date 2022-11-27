<div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">

    <form class="validate-form" action="<?php echo e(route('userssetting.update', auth()->user()->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <div class="media">
            <a href="javascript:void(0);" class="mr-25">
                <img src="<?php echo e(auth()->user()->profile_photo_path ? asset('storage/images/users').'/'.auth()->user()->profile_photo_path : asset('assets/images/portrait/small/avatar-s-11.jpg')); ?>" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
            </a>
            <div class="media-body mt-75 ml-1">
                <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload Image</label>
                <input type="file" name="image" id="account-upload" hidden accept="image/*" />
                <p>Allowed JPG, GIF or PNG. Max size of 1MB</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="account-username">Username</label>
                    <input type="text" class="form-control" id="account-username" name="username" placeholder="Username" value="<?php echo e(auth()->user()->username); ?>" />
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="account-name">Name</label>
                    <input type="text" class="form-control" id="account-name" name="name" placeholder="Name" value="<?php echo e(auth()->user()->name); ?>" />
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="account-e-mail">E-mail</label>
                    <input type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="<?php echo e(auth()->user()->email); ?>" />
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="account-company">Company</label>
                    <input type="text" class="form-control" id="account-company" name="company" placeholder="Company name" value="JCMS Technologies" />
                </div>
            </div>
            <div class="col-12 mt-75">
                <div class="alert alert-warning mb-50" role="alert">
                    <?php if(auth()->user()->hasVerifiedEmail() == false): ?>
                        <h4 class="alert-heading">Your email is not confirmed. Please check your inbox.</h4>
                        <div class="alert-body">
                            <a href="javascript: void(0);" class="alert-link">Resend confirmation</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
            </div>
        </div>
    </form>
</div>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/admin/users/settings/general.blade.php ENDPATH**/ ?>