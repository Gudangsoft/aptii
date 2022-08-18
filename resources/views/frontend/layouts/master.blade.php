<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>PROSIDING APP</title>
    <link rel="icon" href="{{ asset('frontend') }}/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="CoSpace - Coworking Space Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('frontend') }}/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('frontend') }}/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link id="mdb" href="{{ asset('frontend') }}/css/mdb.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('frontend') }}/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
        @include('frontend.layouts.header')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            {{ $slot }}
        </div>

        <!-- content close -->
        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Plans</h5>
                            <ul>
                                <li><a href="#">Private Office</a></li>
                                <li><a href="#">Coworking Space</a></li>
                                <li><a href="#">Virtual Office</a></li>
                                <li><a href="#">Meeting Room</a></li>
                                <li><a href="#">Dedicated Desk</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Franchise</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Events</h5>
                            <ul>
                                <li><a href="#">Jump Start Your Bussines</a></li>
                                <li><a href="#">Web Development Meet Up</a></li>
                                <li><a href="#">Envato Summer Meet Up</a></li>
                                <li><a href="#">Dribbble Meet Up Sydney</a></li>
                                <li><a href="#">International Education Expo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        <img alt="" class="f-logo" src="{{ asset('frontend') }}/images/logo.png" /><span class="copy">&copy; Copyright 2021 - CoSpace by Designesia</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.isotope.min.js"></script>
    <script src="{{ asset('frontend') }}/js/easing.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.js"></script>
    <script src="{{ asset('frontend') }}/js/validation.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/enquire.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.plugin.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.countTo.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.countdown.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.lazy.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.lazy.plugins.min.js"></script>
    <script src="{{ asset('frontend') }}/js/mdb.min.js"></script>
    <script src="{{ asset('frontend') }}/js/designesia.js"></script>


</body>

</html>
