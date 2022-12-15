<header class="header-style-1">
    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    @php
                        $config = \App\Models\Admin\Configuration::orderBy('created_at')->first();
                    @endphp
                    <a href="/">
                        <img alt="" class="img-fluid" src="{{ asset('storage') }}/assets/{{ $config->logo }}" />
                    </a>
                </div>

                <div class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
                </div>

                <div class="header-category-menu d-none d-xl-block">
                </div>

                <nav class="site-navbar ms-auto">
                        @php
                            $menu = \App\Models\Menu::where('status', 1)->orderBy('order', 'ASC')->get();
                        @endphp
                    <ul class="primary-menu">
                        @foreach ($menu as $item)
                            @if ($item->parent_id == 0 && $item->category_id == 1)
                                <li>
                                    <a href="{{ $item->slug }}">
                                        {{ $item->name }}
                                    </a>
                                @if ($item->type == 1)
                                    <ul class="submenu">
                                        @foreach ($menu as $value)
                                            @if($value->parent_id == $item->id)
                                                <li><a href="{{ $value->slug }}">{{ $value->name }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                            @endif
                        @endforeach
                        @if (Auth::check())
                            <li class="d-none d-sm-block d-md-block d-xl-none">
                                <a href="{{ route('dashboard') }}" class="login"><i class="fa fa-cog"></i> Dashboard</a>
                            </li>
                        @else
                            <li class="d-none d-sm-block d-md-block d-xl-none">
                                <a href="{{ route('login') }}" class="login">Login</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-xl-none">
                                <a href="{{ route('register') }}" class="login">Register</a>
                            </li>
                        @endif
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
                        <a href="{{ route('register') }}" class="btn btn-main-2 btn-sm-2 rounded">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
