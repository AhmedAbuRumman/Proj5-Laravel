<!DOCTYPE html>
<html>

<!-- Mirrored from askbootstrap.com/preview/miver/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Oct 2020 08:14:33 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Gurdeep singh osahan">
<meta name="author" content="Gurdeep singh osahan">
<title>jobs website</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="icon" type="image/png" href="images/fav.svg">

<link href="{{asset('public_theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('public_theme/vendor/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">

<link href="{{asset('public_theme/vendor/icons/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css">

<link href="{{asset('public_theme/vendor/slick-master/slick/slick.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('public_theme/vendor/lightgallery-master/dist/css/lightgallery.min.css')}}" rel="stylesheet">

<link href="{{asset('public_theme/vendor/select2/css/select2-bootstrap.css')}}" />
<link href="{{asset('public_theme/vendor/select2/css/select2.min.css')}}" rel="stylesheet">

<link href="{{asset('public_theme/css/style.css')}}" rel="stylesheet">
</head>
<body>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            {{-- <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a> --}}
            <a class="navbar-brand" href="http://127.0.0.1:8000/"><img src="{{asset('public_theme/images/logo.png')}}" width='150px' height='60px' ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
{{--            @if(Auth::guard('web')->user())--}}
{{--                {{'yes'}}--}}
{{--            @else--}}
{{--                {{'no'}}--}}
{{--            @endif--}}
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/welcome_login">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/welcome_register">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
{{--****** start check if it user or recruiter *****--}}
        @if(Auth::guard('web')->user())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}  <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/user_profile/{{Auth::user()->id}}">
                                    Profile
                                    </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/job_post">
                                        Add Job Post
                                    </a>
                                    <a class="dropdown-item" href="/user_profile/{{Auth::user()->id}}">
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        @endif
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm ">
        <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link" href="http://127.0.0.1:8000/" id="navbarDropdownPortfolio"  aria-haspopup="true" aria-expanded="false">
        Home
        </a>
        
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="http://127.0.0.1:8000/categories"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
            </a>
            </li>
        <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/about">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/contactus">Contact</a>
        </li>
        
        </ul>
        </div>
        
        </div>
        </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>



{{--    --}}{{-- //navbar --}}

{{--<nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">--}}
{{--<div class="container">--}}
{{--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--<span class="navbar-toggler-icon"></span>--}}
{{--</button>--}}
{{--<div class="collapse navbar-collapse" id="navbarResponsive">--}}
{{--<ul class="navbar-nav">--}}
{{--<li class="nav-item dropdown">--}}
{{--<a class="nav-link" href="http://127.0.0.1:8000/" id="navbarDropdownPortfolio"  aria-haspopup="true" aria-expanded="false">--}}
{{--Home--}}
{{--</a>--}}

{{--</li>--}}
{{--<li class="nav-item ">--}}
{{--    <a class="nav-link " href="http://127.0.0.1:8000/categories"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--    Categories--}}
{{--    </a>--}}
{{--    <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">--}}
{{--    <a class="dropdown-item" href="product.html">Product List</a>--}}
{{--    <a class="dropdown-item" href="product2.html">Product List 2</a>--}}
{{--    <a class="dropdown-item" href="product-detail.html">List Detail</a>--}}
{{--    <a class="dropdown-item" href="profile.html">Profile</a>--}}
{{--    <a class="dropdown-item" href="company-profile.html">Company Profile</a>--}}
{{--    <a class="dropdown-item" href="alerts.html">Alerts</a>--}}
{{--    <a class="dropdown-item" href="messages.html">Messages</a>--}}
{{--    </div>--}}
{{--    </li>--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="http://127.0.0.1:8000/about">About</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="http://127.0.0.1:8000/contactus">Contact</a>--}}
{{--</li>--}}

{{--</ul>--}}
{{--</div>--}}
{{--<ul class="navbar-nav ml-auto">--}}
{{--<li class="nav-item">--}}
{{--    <a href="http://127.0.0.1:8000/login" >--}}
{{--        <button class="btn  btn-lg btn-success" type="button"> Logout</button> </a>--}}
{{--    </li>--}}
{{--   --}}
{{--</ul>--}}
{{--</div>--}}
{{--</nav>--}}

{{--  --}}{{-- //endnavbar --}}

@yield('section1')


@yield('section2')

@yield('section3')

@yield('section4')








<footer class="bg-white">
<div class="container">
<div class="d-flex justify-content-between">
<div class="footer-list">
<h2>Categories</h2>
<ul class="list">
<li><a href="#">Graphics &amp; Design</a></li>
<li><a href="#">Digital Marketing</a></li>
<li><a href="#">Writing &amp; Translation</a></li>
<li><a href="#">Video &amp; Animation</a></li>
<li><a href="#">Music &amp; Audio</a></li>
<li><a href="#">Programming &amp; Tech</a></li>
<li><a href="#">Business</a></li>
<li><a href="#">Lifestyle</a></li>
<li><a href="#">Sitemap</a></li>
</ul>
</div>
<div class="footer-list">
<h2>About</h2>
<ul class="list">
<li><a href="#">Careers</a></li>
<li><a href="#">Press &amp; News</a></li>
<li><a href="#">Partnerships</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms of Service</a></li>
<li><a href="#">Intellectual Property Claims</a></li>
<li><a href="#" target="_blank">Investor Relations</a></li>
</ul>
</div>
<div class="footer-list">
<h2>Support</h2>
<ul class="list">
<li><a href="#">Help &amp; Support</a></li>
<li><a href="#">Trust &amp; Safety</a></li>
<li><a href="#">Selling on Miver
</a>
</li>
<li><a href="#">Buying on Miver
</a>
</li>
</ul>
</div>
<div class="footer-list">
<h2>Community</h2>
<ul class="list">
<li><a href="#">Events</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Forum</a></li>
<li><a href="#">Community Standards</a></li>
<li><a href="#">Podcast</a></li>
<li><a href="#">Affiliates</a></li>
<li><a href="#">Invite a Friend</a></li>
<li><a href="#">Become a Seller</a></li>
<li><a href="#">Miver
Elevate<small>Exclusive Benefits</small></a>
</li>
</ul>
</div>
</div>
<div class="copyright">
<div class="logo">
<a href="index-2.html">
<img src="{{asset('public_theme/images/logo.svg')}}">
</a>
</div>
<p>© Copyright 2020 Miver. All Rights Reserved
</p>
<ul class="social">
<li>
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</li>
</ul>
</div>
</div>
</footer>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery.min.js" type="ecb7038e94e4af7c30850274-text/javascript"></script>
<script src="{{asset('public_theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>


<script src="https://askbootstrap.com/" type="ecb7038e94e4af7c30850274-text/javascript"></script>
<script src="https://askbootstrap.com/" type="ecb7038e94e4af7c30850274-text/javascript"></script>

<script src="{{asset('public_theme/vendor/slick-master/slick/slick.js')}}" type="ecb7038e94e4af7c30850274-text/javascript" charset="utf-8"></script>

<script src="{{asset('public_theme/vendor/lightgallery-master/dist/js/lightgallery-all.min.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>

<script src="{{asset('public_theme/vendor/select2/js/select2.min.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>

<script src="{{asset('public_theme/js/custom.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>
<script src="{{asset('public_theme/../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="ecb7038e94e4af7c30850274-|49" defer=""></script></body>

<!-- Mirrored from askbootstrap.com/preview/miver/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Oct 2020 08:14:55 GMT -->
</html>
