<header class="header_s header_s1">
    <div id="slidepanel">
        <div class="container-fluid no-right-padding no-left-padding top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-3 top-menu">
                        <a href="#"><i class="icon_menu"></i> more</a>
                        <ul>
                            <li><a href="aboutus.html" title="About">About</a></li>
                            <li><a href="about-author.html" title="Author">Author</a></li>
                            <li><a href="contactus.html" title="Contact">Contact</a></li>
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
                </div>
            </div>
        </div>

        @include('frontend.layouts.banner-top')

    </div>

    <nav class="navbar ownavigation">
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
                    </li>
                    <li><a href="aboutus.html" title="About Us">Article</a></li>
                    <li><a href="aboutus.html" title="About Us">About Us</a></li>
                    <li><a href="about-author.html" title="About Author">About Author</a></li>
                    <li><a href="contactus.html" title="Contact Us">Contact Us</a></li>
                </ul>
            </div>
            <div id="loginpanel" class="desktop-hide">
                <div class="right" id="toggle">
                    <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                    <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
                </div>
            </div>
        </div>
    </nav>

</header>
