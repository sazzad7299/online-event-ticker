<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ticket Fair- Event and Conference Hall</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox.css') }}" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

  </head>
  <body>

    @include('layouts.front_header')
	
    @yield('content')
	

	@include('layouts.front_footer')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>