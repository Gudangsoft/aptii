<header class="header-style-1">
    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    @php
                        $config = \App\Models\Admin\Configuration::orderBy('created_at')->first();
                        $logo = asset('storage/images/logo').'/'.$config->logo;
                    @endphp
                    <a href="/">
                        <img alt="" class="img-fluid" src="{{ $logo }}" />
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
                            {{-- <ul class="submenu">
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="courses-2.html">Course Grid 2 </a></li>
                                <li><a href="courses-3.html">Course Grid 3</a></li>
                                <li><a href="courses-4.html">Course Grid 4</a></li>
                                <li><a href="courses-5-list.html">Course List</a></li>
                                <li>
                                    <a href="#">Single Layout</a>
                                    <ul class="submenu">
                                        <li><a href="course-single.html">Course Single 1</a></li>
                                        <li><a href="course-single-2.html">Course Single 2</a></li>
                                        <li><a href="course-single-3.html">Course Single 3</a></li>
                                        <li><a href="course-single-4.html">Course Single 4</a></li>
                                        <li><a href="course-single-5.html">Course Single 5</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>

                    </ul>

                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>

                <div class="header-btn d-none d-xl-block">
                    @if (Auth::check())
                        {{-- <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="login"><i class="fa fa-sign-out"></i><span>LOGOUT</span></a>
                        </form> --}}
                        <a href="{{ route('dashboard') }}" class="btn btn-main-2 btn-sm-2 rounded"><i class="fa fa-cog"></i><span> DASHBOARD</span></a>

                    @else
                        <a href="{{ route('login') }}" class="login">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-main-2 btn-sm-2 rounded">Sign up</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
