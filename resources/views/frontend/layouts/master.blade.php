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

        @include('frontend.layouts.footer')


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
