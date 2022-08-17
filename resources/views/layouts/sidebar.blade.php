<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                <h2 class="brand-text">PROSIDING</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
            </li>
            <li class="{{ request()->routeIs('prosiding.upload-naskah') ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('prosiding.upload-naskah') }}"><i data-feather="book"></i><span class="menu-title text-truncate" data-i18n="User">Naskah</span></a>
            </li>

            <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Services</span><i data-feather="more-horizontal"></i>
            </li>
            @role('admin|super admin|writer')
            <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Pages">Data Peserta</span></a>
                <ul class="menu-content">
                    <li class="{{ request()->routeIs('prosiding.pembayaran') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('prosiding.pembayaran') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Konfirmasi Bayar</span></a>
                    </li>
                    <li class="{{ request()->routeIs('prosiding.naskah') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('prosiding.naskah') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Naskah Peserta</span></a>
                    </li>
                    <li class="{{ request()->routeIs('prosiding.peserta') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('prosiding.peserta') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Peserta</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Artikel</span></a>
                <ul class="menu-content">
                    <li class="{{ request()->routeIs('articles.index') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('articles.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Berita</span></a>
                    </li>
                    <li class="{{ request()->routeIs('categories.index') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('categories.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Kategori Berita</span></a>
                    </li>
                    <li class="{{ request()->routeIs('tags.index') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('tags.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Tags</span></a>
                    </li>
                </ul>
            </li>

            @endrole

            @role('super admin')
            <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Admin</span><i data-feather="more-horizontal"></i>
            </li>
            <li class="{{ request()->routeIs('users.index') ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('users.index') }}"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="User">Users</span></a>
            </li>
            <li class="{{ request()->routeIs('role-permission.index') ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('role-permission.index') }}"><i data-feather="user-check"></i><span class="menu-title text-truncate" data-i18n="User">Manajemen User</span></a>
            </li>
            <li class="{{ request()->routeIs('configuration.index') ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('configuration.index') }}"><i data-feather="globe"></i><span class="menu-title text-truncate" data-i18n="Configuration">Web Setting</span></a>
            </li>
            @endrole

            {{-- <li class="nav-item"><a class="d-flex align-items-center" href="qrcode"><i data-feather="cpu"></i><span class="menu-title text-truncate" data-i18n="qrcode">QR Code Generator</span></a> --}}
            </li>
        </ul>
    </div>
</div>
