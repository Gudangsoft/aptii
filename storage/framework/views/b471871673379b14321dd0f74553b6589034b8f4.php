<!-- footer begin -->
<footer class="footer-light">
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            <?php
                                $config = \App\Models\Admin\Configuration::orderBy('created_at')->first();
                                $logo = asset('storage/images/logo').'/'.$config->logo;
                            ?>
                            <a href="/">
                                <img alt="" class="f-logo" src="<?php echo e($logo); ?>" /><span class="copy">&copy; Copyright 2022 - <?php echo e(config('app.name')); ?></span>
                            </a>
                        </div>
                        <div class="de-flex-col">
                            <div class="social-icons">
                                <a href="<?php echo e($config->facebook); ?>"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="<?php echo e($config->twitter); ?>"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="<?php echo e($config->instagram); ?>"><i class="fa fa-instagram fa-lg"></i></a>
                                <a href="<?php echo e($config->tiktok); ?>"><i class="fa fa-music fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer close -->
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/frontend/layouts/footer.blade.php ENDPATH**/ ?>