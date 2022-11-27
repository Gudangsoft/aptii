<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/dashboard"><span class="brand-logo">
                <h2 class="brand-text">APTII</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('dashboard')); ?>"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
            </li>

            <?php if(auth()->check() && auth()->user()->hasRole('anggota|admin|super admin')): ?>
                <?php
                    $paymentCheck = \App\Models\Prosiding\ProsidingPembayaran::where('user_id', auth()->user()->id)->latest()->first();
                ?>
                <?php if(isset($paymentCheck)): ?>
                    <?php if($paymentCheck->status == 1): ?>
                        <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Layanan</span><i data-feather="more-horizontal"></i>
                        </li>
                        <li class="<?php echo e(request()->routeIs('asosiasi.info') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('asosiasi.info')); ?>"><i data-feather="radio"></i><span class="menu-title text-truncate" data-i18n="User">Info Asosiasi</span></a>
                        </li>
                        <?php
                            $json = file_get_contents('JSON/link-prosiding.json');
                            $linkasosiasi = json_decode($json, true);
                        ?>
                        <li class="nav-item"><a class="d-flex align-items-center" href="<?php echo e($linkasosiasi['data']['group'][0]['url']); ?>" target="_blank"><i data-feather="external-link"></i><span class="menu-title text-truncate" data-i18n="User">Jurnal Asosiasi</span></a>
                        </li>
                        <li class="<?php echo e(request()->routeIs('asosiasi.upload-naskah') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('asosiasi.upload-naskah')); ?>"><i data-feather="book"></i><span class="menu-title text-truncate" data-i18n="User">Naskah</span></a>
                        </li>
                        <li class="<?php echo e(request()->routeIs('asosiasi.seminar') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('asosiasi.seminar')); ?>"><i data-feather="repeat"></i><span class="menu-title text-truncate" data-i18n="User">Kerjasama</span></a>
                        </li>
                        <li class="<?php echo e(request()->routeIs('asosiasi.sertifikat') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('asosiasi.sertifikat')); ?>"><i data-feather="file"></i><span class="menu-title text-truncate" data-i18n="User">Sertifikat</span></a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            <li class="<?php echo e(request()->routeIs('asosiasi.bukti-pembayaran') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('asosiasi.bukti-pembayaran')); ?>"><i data-feather="credit-card"></i><span class="menu-title text-truncate" data-i18n="User">Data Pembayaran</span></a>
            </li>
            <?php endif; ?>

            <?php if(auth()->check() && auth()->user()->hasRole('admin|super admin|writer')): ?>
            <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Data</span><i data-feather="more-horizontal"></i>
            </li>
            <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Pages">Data Asosiasi</span></a>
                <ul class="menu-content">
                    <li class="<?php echo e(request()->routeIs('asosiasi.naskah') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('asosiasi.naskah')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Naskah</span></a>
                    </li>
                    <li class="<?php echo e(request()->routeIs('bidang-ilmu.index') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('bidang-ilmu.index')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Bidang Ilmu</span></a>
                    </li>
                    <li class="<?php echo e(request()->routeIs('asosiasi.template') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('asosiasi.template')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Template</span></a>
                    </li>
                    <li class="<?php echo e(request()->routeIs('asosiasi.pembayaran') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('asosiasi.pembayaran')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Pembayaran</span></a>
                    </li>
                    <li class="<?php echo e(request()->routeIs('customer-care.index') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('customer-care.index')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Kontak Narahubung</span></a>
                    </li>
                    <li class="<?php echo e(request()->routeIs('asosiasi.nasional') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('asosiasi.nasional')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Link Jurnal Asosiasi</span></a>
                    </li>
                    <li class="<?php echo e(request()->routeIs('certificate.index') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('certificate.index')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Data Sertifikat</span></a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo e(request()->routeIs('event.index') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('event.index')); ?>"><i data-feather="repeat"></i><span class="menu-title text-truncate" data-i18n="Pages">Kerjasama Lembaga</span></a>
            </li>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit articles')): ?>
            <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Posts</span></a>
                <ul class="menu-content">
                    <li class="<?php echo e(request()->routeIs('articles.index') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('articles.index')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Info Asosiasi</span></a>
                    </li>
                    <li class="<?php echo e(request()->routeIs('categories.index') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('categories.index')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Kategori</span></a>
                    </li>
                    <li class="<?php echo e(request()->routeIs('tags.index') ? 'active' : ''); ?>"><a class="d-flex align-items-center" href="<?php echo e(route('tags.index')); ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Tags</span></a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>

            <li class="<?php echo e(request()->routeIs('agenda.index') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('agenda.index')); ?>"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Pages">Agenda</span></a>
            </li>

            <?php endif; ?>

            <?php if(auth()->check() && auth()->user()->hasRole('super admin')): ?>
            <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Admin</span><i data-feather="more-horizontal"></i>
            </li>
            <li class="<?php echo e(request()->routeIs('users.index') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('users.index')); ?>"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="User">Users</span></a>
            </li>
            <li class="<?php echo e(request()->routeIs('role-permission.index') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('role-permission.index')); ?>"><i data-feather="user-check"></i><span class="menu-title text-truncate" data-i18n="User">Manajemen User</span></a>
            </li>
            <li class="<?php echo e(request()->routeIs('configuration.index') ? 'active' : ''); ?> nav-item"><a class="d-flex align-items-center" href="<?php echo e(route('configuration.index')); ?>"><i data-feather="globe"></i><span class="menu-title text-truncate" data-i18n="Configuration">Web Setting</span></a>
            </li>
            <?php endif; ?>

            
            </li>
        </ul>
    </div>
</div>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>