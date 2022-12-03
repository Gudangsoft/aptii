<header class="header-style-1">
    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <?php
                        $config = \App\Models\Admin\Configuration::orderBy('created_at')->first();
                        $logo = asset('storage/images/logo').'/'.$config->logo;
                    ?>
                    <a href="/">
                        <img alt="" class="img-fluid" src="<?php echo e($logo); ?>" />
                    </a>
                </div>

                <div class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
                </div>

                <div class="header-category-menu d-none d-xl-block">
                </div>

                <nav class="site-navbar ms-auto">
                    <ul class="primary-menu">
                        <li class="current">
                            <a href="/">Home</a>
                        </li>
                        <li><a href="/posts">Berita</a></li>

                        <li>
                            <a href="/contact">Kontak</a>
                            
                        </li>
                        <?php if(Auth::check()): ?>
                            <li class="d-none d-sm-block d-md-block d-xl-none">
                                <a href="<?php echo e(route('dashboard')); ?>" class="login"><i class="fa fa-cog"></i> Dashboard</a>
                            </li>
                        <?php else: ?>
                            <li class="d-none d-sm-block d-md-block d-xl-none">
                                <a href="<?php echo e(route('login')); ?>" class="login">Login</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-xl-none">
                                <a href="<?php echo e(route('register')); ?>" class="login">Register</a>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>

                <div class="header-btn d-none d-xl-block">
                    <?php if(Auth::check()): ?>
                        
                        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-main-2 btn-sm-2 rounded"><i class="fa fa-cog"></i><span> DASHBOARD</span></a>

                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="login">Login</a>
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-main-2 btn-sm-2 rounded">Register</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/client/layouts/header.blade.php ENDPATH**/ ?>