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
                                <a href="index.html">
                                    <img alt="" class="logo" src="{{ asset('frontend') }}/images/logo-light.png" />
                                    <img alt="" class="logo-2" src="{{ asset('frontend') }}/images/logo.png" />
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
                                <a href="/posts">Artikel<span></span></a>
                            </li>
                            <li>
                                <a href="/posts">Template<span></span></a>
                            </li>
                            <li>
                                <a href="/posts">Kontak<span></span></a>
                            </li>
                            <li>
                                <a href="#">Seminar<span></span></a>
                                <ul>
                                    <li><a href="/seminar-nasional">Seminar Nasional</a></li>
                                    <li><a href="/seminar-internasional">Seminar Internasional</a></li>
                                </ul>
                            </li>
                            <li>
                                @php
                                    $json = file_get_contents('JSON/link-prosiding.json');
                                    $linkprosiding = json_decode($json, true);
                                @endphp
                                <a href="{{ $linkprosiding['data']['group'][0]['url'] }}">Prosiding Nasional<span></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        @if (Auth::check())
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="menu_side_area">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="btn-main"><span>LOGOUT</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                            </form>

                            <div class="menu_side_area">
                                <a href="{{ route('dashboard') }}" class="btn-main"><span>DASHBOARD</span></a>
                                <span id="menu-btn"></span>
                            </div>
                        @else
                            <div class="menu_side_area">
                                <a href="{{ route('login') }}" class="btn-main"><span>LOGIN</span></a>
                                <span id="menu-btn"></span>
                            </div>
                            <div class="menu_side_area">
                                <a href="{{ route('register') }}" class="btn-main"><span>REGISTRASI</span></a>
                                <span id="menu-btn"></span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
