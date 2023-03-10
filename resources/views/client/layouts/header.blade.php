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

                <div class="header-category-menu d-none">
                    <ul>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-th me-2"></i>Categories</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#">Design</a>
                                    <ul class="submenu">
                                        <li><a href="#">Design Tools</a></li>
                                        <li><a href="#">Photoshop mastering</a></li>
                                        <li><a href="#">Adobe Xd Deisgn</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Developemnt</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Freelancing</a></li>
                            </ul>
                        </li>
                    </ul>
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