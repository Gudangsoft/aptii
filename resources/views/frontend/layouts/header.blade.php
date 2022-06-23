<!-- Header Section -->
<header class="header_s header_s1">
    <!-- SidePanel -->
    <div id="slidepanel">
        <!-- Top Header -->
        <div class="container-fluid no-right-padding no-left-padding top-header">
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-3 top-menu">
                        <a href="#"><i class="icon_menu"></i> more</a>
                        <ul>
                            <li><a href="aboutus.html" title="About">About</a></li>
                            <li><a href="about-author.html" title="Author">Author</a></li>
                            <li><a href="contactus.html" title="Contact">Contact</a></li>
                            <li><a href="404.html" title="404">404</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-3 top-social">
                        <a href="#"><i class="social_share"></i></a>
                        <ul>
                            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 top-search">
                        <form method="get" class="searchform" action="#">
                            <div class="input-group">
                                <input placeholder="Search" class="form-control" required="" type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div><!-- Row /- -->
            </div><!-- Container /- -->
        </div><!-- Top Header /- -->

        @include('frontend.layouts.banner-top')

    </div><!-- SidePanel /- -->

    <!-- Ownavigation -->
    <nav class="navbar ownavigation">
        <!-- Container -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend') }}/assets/images/logo-2.png" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a href="index.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <li><a href="index.html" title="Home 1">Home 1</a></li>
                            <li><a href="index2.html" title="Home 2">Home 2</a></li>
                            <li><a href="index3.html" title="Home 3">Home 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" title="Mega Menu">Mega Menu</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <div class="dropdown-menu megamenu">
                            <div class="col-md-2 col-sm-12 megamenu-categories">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#iphone-ipad" role="tab" data-toggle="tab" title="Iphone & ipad">Iphone & ipad</a></li>
                                    <li role="presentation"><a href="#android" role="tab" data-toggle="tab" title="Android">Android</a></li>
                                    <li role="presentation"><a href="#design" role="tab" data-toggle="tab" title="Design Patterns">Design Patterns</a></li>
                                    <li role="presentation"><a href="#apps" role="tab" data-toggle="tab" title="Apps">Apps</a></li>
                                    <li role="presentation"><a href="#games" role="tab" data-toggle="tab" title="Games">Games</a></li>
                                    <li role="presentation"><a href="#software" role="tab" data-toggle="tab" title="Software">Software</a></li>
                                </ul>
                            </div>
                            <div class="col-md-10 col-sm-12 col-xs-12 megamenu-post tab-content">
                                <div role="tabpanel" class="tab-pane active" id="iphone-ipad">
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post1.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Intex Aqua Style X Android 4.4 KitKat handset found listed</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post2.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Samsung will invest more in India's 4G mobile market</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post3.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Goddesses in demand shower blessings on e-tailers</a></h3>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="android">
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post1.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Samsung will invest more in India's 4G mobile market</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post2.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Goddesses in demand shower blessings on e-tailers</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post3.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Intex Aqua Style X Android 4.4 KitKat handset found listed</a></h3>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="design">
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post2.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Goddesses in demand shower blessings on e-tailers</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post3.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Intex Aqua Style X Android 4.4 KitKat handset found listed</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post1.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Samsung will invest more in India's 4G mobile market</a></h3>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="apps">
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post2.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Goddesses in demand shower blessings on e-tailers</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post1.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Samsung will invest more in India's 4G mobile market</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post3.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Intex Aqua Style X Android 4.4 KitKat handset found listed</a></h3>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="games">
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post3.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Intex Aqua Style X Android 4.4 KitKat handset found listed</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post2.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Goddesses in demand shower blessings on e-tailers</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post1.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Samsung will invest more in India's 4G mobile market</a></h3>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="software">
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post3.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Samsung will invest more in India's 4G mobile market</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post2.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Intex Aqua Style X Android 4.4 KitKat handset found listed</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <div class="type-post">
                                            <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/megamenu-post1.jpg" alt="Post" /></a></div>
                                            <h3 class="entry-title"><a href="#">Goddesses in demand shower blessings on e-tailers</a></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li><a href="aboutus.html" title="About Us">About Us</a></li>
                    <li><a href="about-author.html" title="About Author">About Author</a></li>
                    <li class="dropdown">
                        <a href="blog-single-page.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog Single</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <li><a href="blog-single-page.html" title="Blog Single Page">Blog Single Page</a></li>
                            <li><a href="blog-single-audio.html" title="Blog Single Audio">Blog Single audio</a></li>
                            <li><a href="blog-single-video.html" title="Blog Single Video">Blog Single Video</a></li>
                        </ul>
                    </li>
                    <li><a href="contactus.html" title="Contact Us">Contact Us</a></li>
                    <li><a href="404.html" title="404">404</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <li><a href="blog-single-page.html" title="Blog Single Page">Blog Single Page</a></li>
                            <li><a href="blog-single-audio.html" title="Blog Single Audio">Blog Single audio</a></li>
                            <li><a href="blog-single-video.html" title="Blog Single Video">Blog Single Video</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="loginpanel" class="desktop-hide">
                <div class="right" id="toggle">
                    <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                    <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
                </div>
            </div>
        </div><!-- Container /- -->
    </nav><!-- Ownavigation /- -->

</header>
<!-- Header Section /- -->
