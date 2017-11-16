<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>โรงพยาบาลค่ายกฤษณ์สีวะรา | Fort Krit SiWara Hospital</title>

    <!-- Styles -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Themefisher Font -->
    <link href="{{asset('plugins/themefisher-font/style.css')}}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset('plugins/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet" media="screen">
    <!-- Owl Carousel Theme -->
    <link href="{{asset('plugins/owl-carousel/assets/owl.theme.green.min.css')}}" rel="stylesheet" media="screen">
    <!-- Fancy Box -->
    <link href="{{asset('plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- FAVICON -->
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon">
    @yield('styles')
</head>
<body class="body-wrapper">

    @include('_includes.nav.home')

    <div id="app">
      @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>
    <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('plugins/popper/popper.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('plugins/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
    <script src="{{asset('plugins/syotimer/jquery.syotimer.min.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>
    @yield('scripts')
</body>
</html>
