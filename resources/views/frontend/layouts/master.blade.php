<!DOCTYPE html>
<html lang="en">
<head>

    {!! Meta::toHtml() !!}

	<link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="{{ asset('frontend') }}/assets/images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('frontend') }}/assets/images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('frontend') }}/assets/images/apple-touch-icon-57x57-precomposed.png">

	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Bentham|Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:400,700|Noto+Serif:400,400i,700,700i|Oswald:200,300,400,500,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<!-- Library -->
    <link href="{{ asset('frontend') }}/assets/css/lib.css" rel="stylesheet">

	<!-- Custom - Common CSS -->
	<link href="{{ asset('frontend') }}/assets/css/plugins.css" rel="stylesheet">
	<link href="{{ asset('frontend') }}/assets/css/elements.css" rel="stylesheet">
	<link href="{{ asset('frontend') }}/assets/css/rtl.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style.css">

    @method('css')

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- Loader -->
	{{-- <div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div> --}}
    <!-- Loader /- -->

	@include('frontend.layouts.header')

	{{ $slot }}

	@include('frontend.layouts.footer')


	<!-- JQuery v1.12.4 -->
	<script src="{{ asset('frontend') }}/assets/js/jquery-1.12.4.min.js"></script>

	<!-- Library - Js -->
	<script src="{{ asset('frontend') }}/assets/js/lib.js"></script>

	<!-- Library - Theme JS -->
	<script src="{{ asset('frontend') }}/assets/js/functions.js"></script>

    @stack('scripts')

</body>
</html>
