<!DOCTYPE html>
<html lang="fa">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Css -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-box-1"></div>
        <div class="loader-box-2"></div>
    </div>
</div>
<!-- Preloader End -->

@include('client.includes.header')

@yield('main-content')

@include('client.includes.footer')

<!-- JS Files -->
<a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>


<script data-cfasync="false" src="{{asset('assets/js/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}" ></script>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}" ></script>
<script src="{{asset('assets/js/modernizr.min.js')}}" ></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" ></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}" ></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}" ></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}" ></script>
<script src="{{asset('assets/js/jquery.appear.min.js')}}" ></script>
<script src="{{asset('assets/js/jquery.easing.min.js')}}" ></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}" ></script>
<script src="{{asset('assets/js/counter-up.js')}}" ></script>
<script src="{{asset('assets/js/wow.min.js')}}" ></script>
<script src="{{asset('assets/js/main.js')}}" ></script>
</body>
</html>
