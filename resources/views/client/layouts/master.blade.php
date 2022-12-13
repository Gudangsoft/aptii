<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Edumel- Education Html Template by dreambuzz">
  <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
  <meta name="author" content="dreambuzz">

  <title>Asosiasi Jurnal</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/bootstrap/bootstrap.css">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/flaticon/flaticon.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/gilroy/font-gilroy.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/magnific-popup/magnific-popup.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/animate-css/animate.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/animated-headline/animated-headline.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl/assets/owl.theme.default.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/woocomerce.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">

</head>

<body id="top-header">



@include('client.layouts.header')

{{ $slot }}

@include('client.layouts.footer')





    <!-- Main jQuery -->
    <script src="{{ asset('frontend') }}/vendors/jquery/jquery.js"></script>
    <!-- Bootstrap 5:0 -->
    <script src="{{ asset('frontend') }}/vendors/bootstrap/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    {{-- <script src="{{ asset('frontend') }}/vendors/counterup/waypoint.js"></script>
    <script src="{{ asset('frontend') }}/vendors/counterup/jquery.counterup.min.js"></script>
    <!--  Owl Carousel -->
    <script src="{{ asset('frontend') }}/vendors/owl/owl.carousel.min.js"></script>
    <!-- Isotope -->
    <script src="{{ asset('frontend') }}/vendors/isotope/jquery.isotope.js"></script>
    <script src="{{ asset('frontend') }}/vendors/isotope/imagelaoded.min.js"></script>
    <!-- Animated Headline -->
    <script src="{{ asset('frontend') }}/vendors/animated-headline/animated-headline.js"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend') }}/vendors/magnific-popup/jquery.magnific-popup.min.js"></script> --}}

    <script src="{{ asset('frontend') }}/js/script.js"></script>


  </body>
  </html>
