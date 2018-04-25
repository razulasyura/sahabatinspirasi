<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Sahabat Inspirasi - Tumbuh Bersama Untuk Bersama</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700" rel="stylesheet">

		<link rel="icon" type="image/png" href="{{ Theme::asset('favicon.ico') }}">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="{{ Theme::asset('apple-touch-icon.png') }}">

		<link rel="stylesheet" href="{{ Theme::asset('assets/css/font-awesome.min.css') }}">
		
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/xsIcon.css') }}">
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/isotope.css') }}">
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/animate.css') }}">
		

		<!--For Plugins external css-->
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/plugins.css') }}" />

		<!--Theme custom css -->
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/style.css') }}">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{ Theme::asset('assets/css/responsive.css') }}" />
	</head>
	<body>
	<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- #preloader -->

	<div id="preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			{{-- <div class="double-bounce2"></div> --}}
		</div>
	</div>
	
	@include('partials.header')
	@yield('content')
	@include('partials.footer')


	<script src="{{ Theme::asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ Theme::asset('assets/js/plugins.js') }}"></script>
	<script src="{{ Theme::asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ Theme::asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ Theme::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ Theme::asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ Theme::asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ Theme::asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ Theme::asset('assets/js/spectragram.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>

	<script src="{{ Theme::asset('assets/js/main.js') }}"></script>
	</body>
</html>
<!-- footer section end -->