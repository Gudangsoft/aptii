<!-- header begin -->
<header class="transparent scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <?php
                                    $config = \App\Models\Admin\Configuration::orderBy('created_at')->first();
                                    $logo = asset('storage/images/logo').'/'.$config->logo;
                                ?>
                                <a href="/">
                                    <img alt="" class="logo" src="<?php echo e($logo); ?>" />
                                    <img alt="" class="logo-2" src="<?php echo e($logo); ?>" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a href="/">Home<span></span></a>
                            </li>
                            <li>
                                <a href="/posts">Berita<span></span></a>
                            </li>
                            <li>
                                <?php
                                    $document       = file_get_contents('JSON/template.json');
                                    $documentArray  = json_decode($document, true);
                                ?>
                                <a href="/storage/files/template/<?php echo e($documentArray['data']['data'][0]['name']); ?>">Template<span></span></a>
                            </li>
                            <li>
                                <a href="/contact">Kontak<span></span></a>
                            </li>
                            <li>
                                <a href="#">Seminar<span></span></a>
                                <ul>
                                    <li><a href="/seminar-nasional">Seminar Nasional</a></li>
                                    <li><a href="/seminar-internasional">Seminar Internasional</a></li>
                                </ul>
                            </li>
                            <li>
                                <?php
                                    $json = file_get_contents('JSON/link-prosiding.json');
                                    $linkprosiding = json_decode($json, true);
                                ?>
                                <a href="<?php echo e($linkprosiding['data']['group'][0]['url']); ?>">Prosiding Nasional<span></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        <?php if(Auth::check()): ?>
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="menu_side_area">
                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();this.closest('form').submit();" class="btn-main"><i class="fa fa-sign-out"></i><span>LOGOUT</span></a>
                                </div>
                            </form>

                            <div class="menu_side_area">
                                <a href="<?php echo e(route('dashboard')); ?>" class="btn-main"><i class="fa fa-cog"></i><span>DASHBOARD</span></a>
                            </div>
                        <?php else: ?>
                            <div class="menu_side_area">
                                <a href="<?php echo e(route('login')); ?>" class="btn-main"><i class="fa fa-sign-in"></i><span>LOGIN</span></a>
                            </div>
                            <div class="menu_side_area">
                                <a href="<?php echo e(route('register')); ?>" class="btn-main"><i class="fa fa-user-plus"></i><span>REGISTRASI</span></a>
                            </div>
                        <?php endif; ?>
                        <div class="menu_side_area">
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/frontend/layouts/header.blade.php ENDPATH**/ ?>