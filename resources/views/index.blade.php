<!DOCTYPE html>
<![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Welcome to Matreshka Show Club</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Mega  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    {{--    <link rel="stylesheet" href="assets/css/font-awesome.min.css">--}}
    <!--Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--magnific popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animated CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Theme CSS-->
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
</head>

<body data-spy="scroll" data-target="#scroll-menu" data-offset="65">

<!-- Preloader -->
<div class="preloader-wrap">
    <div class="preloader-inside">
        <div class="logo-loading animated bounce bounceIn">
            <img src="{{asset('storage/frontend/images/logos/logo-image.webp')}}" alt="responsive img">
        </div>
    </div>
</div>
<!-- End Preloader -->
<!-- Nav Section -->
<header class="header-area">
    <!-- Nav Section -->
    <nav class="navbar navbar-default navbar-fixed-top nav-area" id="scroll-menu">
        <!-- Header Top Section -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="d-none d-md-block col-xl-6 col-md-6">
                        <ul class="online">
                            {{--                            @foreach($contacts as $key => $contact)--}}
                            {{--                                <li><a href="tel:{{$item}}">{{$key}}:<span>{{$item}}</span></a></li>--}}
                            {{--                            @endforeach--}}
                            <li><a href="tel:+37412345678">Phone:<span>+374 12 345678</span></a></li>
                            <li><a href="#">Opening Hours:<span><small>Mon-Fri:</small>22:00 - 09:00</span></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <ul class="social-link">
                            @foreach($socials as $social)
                                <li>
                                    <a href="{{$social['href']}}"
                                       target="{{$social['target']}}">
                                        <i class="{{$social['iconClass']}}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Section -->
        <div class="container">
            <div class="logo-menu-wrap">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('storage/frontend/images/logos/logo-night-club.webp')}}"
                             alt="responsive img"
                             class="logo-image">
                    </a>
                </div>
                <div class="main-menu main-menu-mrg1">
                    <nav>
                        <ul>
                            @foreach($navigations as $navigation)
                                <li>
                                    <a href="{{$navigation['href']}}">{{$navigation['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            @foreach($navigations as $navigation)
                                <li>
                                    <a href="{{$navigation['href']}}">{{$navigation['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- End Nav Section -->
<!-- Hero Section -->
<div class="hero-area" id="home">
    <div id="hero-slider-screen" class="owl-carousel owl-theme hero-slider-inner">
        <div class="item">

            <img src="assets/images/webp/IMG_3386.webp" alt="responsive img" class="image-cover" loading="lazy">
            <div class="hero-caption">
                <div class="hero-caption-inner">
                    <h1 class="hero-caption-title animation-flicker">Матрёшка Show Club</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="assets/images/webp/Gheviphoto-137.webp" alt="responsive img" class="image-cover"  loading="lazy">
            <div class="hero-caption">
                <div class="hero-caption-inner">
                    <h1 class="hero-caption-title animation-flicker">Матрёшка Show Club</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="assets/images/webp/dancer.webp" alt="responsive img" class="image-cover"  loading="lazy">
            <div class="hero-caption">
                <div class="hero-caption-inner">
                    <h1 class="hero-caption-title animation-flicker">Матрёшка Show Club</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->
<!-- Service Section -->
<div class="service-area inner-padding2">
    <div class="container">
        <div class="row">
            <div class="col-12 foo">
                <div class="section-title-area">
                    <h2 class="section-title">Welcome To Our Club</h2>
                    {{--                    <div class="section-divider"></div>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <img src="assets/images/webp/Gheviphoto-13.webp" alt="responsive img">
                    <div class="caption">
                        <div class="caption-inner">
                            <div class="caption-content">
                                <i class="fa fa-glass"></i>
                                <h3 class="service-title">drink bar</h3>
                                <p>Lorem ipsum atea dolor amet sectetur adip isicing elit, sed do eiua intan olore magna
                                    athem offera. atuioUt enim ad minis nostr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <img src="assets/images/webp/Gheviphoto-23.webp" alt="responsive img">
                    <div class="caption">
                        <div class="caption-inner">
                            <div class="caption-content">
                                <i class="fa fa-cutlery"></i>
                                <h3 class="service-title">restaurant</h3>
                                <p>Lorem ipsum atea dolor amet sectetur adip isicing elit, sed do eiua intan olore magna
                                    athem offera. atuioUt enim ad minis nostr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item foo">
                    <img src="assets/images/webp/Gheviphoto-60.webp" alt="responsive img">
                    <div class="caption">
                        <div class="caption-inner">
                            <div class="caption-content">
                                <i class="fa fa-music"></i>
                                <h3 class="service-title">dj’s music</h3>
                                <p>Lorem ipsum atea dolor amet sectetur adip isicing elit, sed do eiua intan olore magna
                                    athem offera. atuioUt enim ad minis nostr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service Section -->
<!-- About Section -->
<div id="videos">
    <div
            class="carousel slide carousel-fade"
            data-mdb-ride="carousel"
    >
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <video class="img-fluid" autoplay loop muted>
                    <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4"/>
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>
                        Nulla vitae elit libero, a pharetra augue mollis interdum.
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <video class="img-fluid" autoplay loop muted>
                    <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4"/>
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <video class="img-fluid" autoplay loop>
                    <source
                            src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
                            type="video/mp4"
                    />
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                    </p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button
                class="carousel-control-prev"
                type="button"
                data-mdb-target="#carouselVideoExample"
                data-mdb-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
                class="carousel-control-next"
                type="button"
                data-mdb-target="#carouselVideoExample"
                data-mdb-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Event Section -->
{{--<div class="event-area inner-padding">--}}
{{--    <div class="event-area-inner">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 foo">--}}
{{--                    <div class="section-title-area-2">--}}
{{--                        <h2 class="section-title">Upcoming Event</h2>--}}
{{--                        --}}{{--                    <div class="section-divider"></div>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid dunt ut--}}
{{--                            labore et dolore ma.Ut enim ad minim veniam, quis nos</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="upcoming foo">--}}
{{--                        <span class="is-countdown"></span>--}}
{{--                        <div data-countdown="2022/04/01"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 foo">--}}
{{--                    <div id="event-slider-screen" class="owl-carousel owl-theme event-slider">--}}
{{--                        <div class="item">--}}
{{--                            <div class="event-fee">$300.00</div>--}}
{{--                            <div class="event-feature">--}}
{{--                                <img src="assets/img/event-1.png" alt="responsive img">--}}
{{--                                <div class="caption">--}}
{{--                                    <div class="caption-inner"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="event-fee">$300.00</div>--}}
{{--                            <div class="event-feature">--}}
{{--                                <img src="assets/img/event-4.png" alt="responsive img">--}}
{{--                                <div class="caption">--}}
{{--                                    <div class="caption-inner"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="event-fee">$300.00</div>--}}
{{--                            <div class="event-feature">--}}
{{--                                <img src="assets/img/event-3.png" alt="responsive img">--}}
{{--                                <div class="caption">--}}
{{--                                    <div class="caption-inner"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="event-fee">$300.00</div>--}}
{{--                            <div class="event-feature">--}}
{{--                                <img src="assets/img/event-3.png" alt="responsive img">--}}
{{--                                <div class="caption">--}}
{{--                                    <div class="caption-inner"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="event-fee">$300.00</div>--}}
{{--                            <div class="event-feature">--}}
{{--                                <img src="assets/img/event-2.png" alt="responsive img">--}}
{{--                                <div class="caption">--}}
{{--                                    <div class="caption-inner"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="event-fee">$300.00</div>--}}
{{--                            <div class="event-feature">--}}
{{--                                <img src="assets/img/event-3.png" alt="responsive img">--}}
{{--                                <div class="caption">--}}
{{--                                    <div class="caption-inner"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="event-btn">--}}
{{--                        <a href="event.html" class="btn btn-default btn-sm-field" role="button">View Moew</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="gallery-area inner-padding" id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-12 foo">
                <div class="section-title-area">
                    <h2 class="section-title">Show Club Gallery</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="gallery-masonry gallery">
                    <div class="gallery-item">
                        <img src="assets/images/webp/25.02.webp" alt="responsive img">
                    </div>
                    <div class="gallery-item">
                        <img src="assets/img/gallery-2.png" alt="responsive img">
                    </div>
                    <div class="gallery-item">
                        <img src="assets/img/gallery-3.png" alt="responsive img">
                        <div class="caption">
                            <div class="caption-inner">
                                <div class="caption-content">
                                    <ul>
                                        <li><a href="gallery-photos.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="assets/img/gallery-3.png"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/img/gallery-4.png" alt="responsive img">
                        <div class="caption">
                            <div class="caption-inner">
                                <div class="caption-content">
                                    <ul>
                                        <li><a href="gallery-photos.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="assets/img/gallery-4.png"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/img/gallery-5.png" alt="responsive img">
                        <div class="caption">
                            <div class="caption-inner">
                                <div class="caption-content">
                                    <ul>
                                        <li><a href="gallery-photos.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="assets/img/gallery-5.png"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/img/gallery-6.png" alt="responsive img">
                        <div class="caption">
                            <div class="caption-inner">
                                <div class="caption-content">
                                    <ul>
                                        <li><a href="gallery-photos.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="assets/img/gallery-6.png"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area inner-padding3" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-12 foo">
                <div class="section-title-area">
                    <h2 class="section-title">Our Instagram Blog</h2>
                    {{--                    <div class="section-divider"></div>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 foo">
                <div class="post-row">
                    <div class="post-header">
                        <div class="post-feature">
                            <img src="assets/img/post-feature-1.png" alt="responsive img">
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="post-caption">
                            <div class="post-caption-inner">
                                <div class="post-caption-content">
                                    <div class="post-link"><a href="blog-details-sidebar.html"
                                                              class="btn btn-default link-btn"><i
                                                    class="fa fa-link"></i></a></div>
                                    <div class="post-sticker hidden-xs"><i class="fa fa-clock-o"></i>Date : 26 oct 2021
                                    </div>
                                    <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post
                                            Dummy Title</a></h2>
                                    <p>Adipisicing elit, thsed do the an eiusmod tempor incidi dunt the at dipising elit
                                        ased eius mod tempor incidi dunt ipisi cing elit ased.</p>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="fa fa-user"></i>By A Mollik </a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i>20 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i>02 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="post-footer-caption">
                            <div class="footer-caption-inner">
                                <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post Dummy
                                        Title</a></h2>
                                <div class="post-sticker"><i class="fa fa-clock-o"></i>Date : 26 oct 2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 foo">
                <div class="post-row">
                    <div class="post-header">
                        <div class="post-feature">
                            <img src="assets/img/post-feature-2.png" alt="responsive img">
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="post-caption">
                            <div class="post-caption-inner">
                                <div class="post-caption-content">
                                    <div class="post-link"><a href="blog-details-sidebar.html"
                                                              class="btn btn-default link-btn"><i
                                                    class="fa fa-link"></i></a></div>
                                    <div class="post-sticker hidden-xs"><i class="fa fa-clock-o"></i>Date : 26 oct 2021
                                    </div>
                                    <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post
                                            Dummy Title</a></h2>
                                    <p>Adipisicing elit, thsed do the an eiusmod tempor incidi dunt the at dipising elit
                                        ased eius mod tempor incidi dunt ipisi cing elit ased.</p>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="fa fa-user"></i>By A Mollik </a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i>20 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i>02 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="post-footer-caption">
                            <div class="footer-caption-inner">
                                <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post Dummy
                                        Title</a></h2>
                                <div class="post-sticker"><i class="fa fa-clock-o"></i>Date : 26 oct 2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 foo hidden-sm">
                <div class="post-row">
                    <div class="post-header">
                        <div class="post-feature">
                            <img src="assets/img/post-feature-3.png" alt="responsive img">
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="post-caption">
                            <div class="post-caption-inner">
                                <div class="post-caption-content">
                                    <div class="post-link"><a href="blog-details-sidebar.html"
                                                              class="btn btn-default link-btn"><i
                                                    class="fa fa-link"></i></a></div>
                                    <div class="post-sticker hidden-xs"><i class="fa fa-clock-o"></i>Date : 26 oct 2021
                                    </div>
                                    <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post
                                            Dummy Title</a></h2>
                                    <p>Adipisicing elit, thsed do the an eiusmod tempor incidi dunt the at dipising elit
                                        ased eius mod tempor incidi dunt ipisi cing elit ased.</p>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="fa fa-user"></i>By A Mollik </a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i>20 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i>02 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="post-footer-caption">
                            <div class="footer-caption-inner">
                                <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post Dummy
                                        Title</a></h2>
                                <div class="post-sticker"><i class="fa fa-clock-o"></i>Date : 26 oct 2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Section  -->
<!-- Footer Section -->
<footer>
    <div class="footer-area foo" data-sr='bottom'>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="company-logo">
                        <a href="/">
                            <img class="" src="{{asset('storage/frontend/images/logos/logo-night-club.webp')}}" alt="responsive img">

                        </a>
                    </div>
                    <div class="footer-content">
                        <ul class="social-link">
                            <li>
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                </a>
                                <span class="address">{{$contacts['address']}}</span>
                            </li>
                        </ul>

                        <ul class="social-link">
                            @foreach($socials as $social)
                                <li>
                                    <a href="{{$social['href']}}"
                                       target="{{$social['target']}}">
                                        <i class="{{$social['iconClass']}}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <h4 class="footer-title">OPENING TIME</h4>
                    <div class="footer-content">
                        <div class="opening-time">
                            @foreach($contacts['opening_days'] as $day)
                                <p><strong>{{$day['day']}}: </strong><small>{{$day['time']}}</small></p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{url('/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{url('/assets/js/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{url('/assets/js/popper.js')}}"></script>
<script src="{{url('/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('/assets/js/scrollreveal.min.js')}}"></script>
<script src="{{url('/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{url('/assets/js/meanmenu.js')}}"></script>
<script src="{{url('/assets/js/countdown.js')}}"></script>
<script src="{{url('/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{url('/assets/js/isotope_custom.js')}}"></script>
<script src="{{url('/assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{url('/assets/js/modernizr-3.11.2.min.js')}}"></script>
<script src="{{url('/assets/js/jquery.gridrotator.js')}}"></script>
<script src="{{url('/assets/js/theme.js')}}"></script>
<script src="https://kit.fontawesome.com/57e89dc5d7.js" crossorigin="anonymous"></script>
</body>

</html>
