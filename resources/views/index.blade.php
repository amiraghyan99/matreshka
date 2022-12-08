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
        <div class="logo-loading animated bounce zoomIn">
            <img src="{{asset('assets/images/logos/logo-image.webp')}}" alt="Matreshka Show Club">
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
                            @include('partials/language_switcher')
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Header Top Section -->
        <div class="container">
            <div class="logo-menu-wrap">
                <div class="logo">
                    <a href="{{route('home', app()->currentLocale())}}">
                        <img src="{{asset('assets/images/logos/logo-night-club.webp')}}"
                             alt="responsive img"
                             class="logo-image"
                             loading="lazy"
                        >
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
            <img src="assets/images/webp/Gheviphoto-137.webp" alt="responsive img" class="image-cover" loading="lazy">
            <div class="hero-caption">
                <div class="hero-caption-inner">
                    <h1 class="hero-caption-title animation-flicker">Матрёшка Show Club</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="assets/images/webp/dancer.webp" alt="responsive img" class="image-cover" loading="lazy">
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
                    <h2 class="section-title">Welcome To Our Show Club</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <img src="assets/images/webp/Gheviphoto-13.webp" alt="responsive img" loading="lazy">
                    <div class="caption">
                        <div class="caption-inner">
                            <div class="caption-content">
                                <svg version="1.1" class="my-svg" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                     xml:space="preserve">
<g>
    <g>
        <path d="M436.774,32.417c-0.35-4.634-4.389-8.108-9.024-7.757c-4.633,0.35-8.107,4.39-7.757,9.024
			c1.795,23.766-0.748,58.43-23.058,88.606c-22.341,30.219-54.028,40.732-71.052,46.381c-25.21,8.363-48.352,10.542-69.817,9.979
			c1.881-4.059,2.939-8.576,2.939-13.337c0-14.823-10.186-27.312-23.925-30.836v-10.971h44.928
			c17.013,0,30.853-13.841,30.853-30.853v-8.975c0-4.648-3.767-8.414-8.414-8.414h-40.949l16.837-54.309
			c1.537-4.958,0.653-10.199-2.427-14.377c-3.08-4.178-7.823-6.574-13.014-6.574h-44.643c-4.647,0-8.414,3.766-8.414,8.414
			c0,4.648,3.767,8.414,8.414,8.414h43.744l-18.115,58.433h-34.692l-24.79-69.67c-1.557-4.378-6.372-6.66-10.748-5.107
			c-4.379,1.558-6.664,6.371-5.107,10.749l22.783,64.026H151.55c-4.647,0-8.414,3.766-8.414,8.414v8.975
			c0,17.012,13.84,30.853,30.853,30.853h44.264v11.26c-13.218,3.868-22.905,16.095-22.905,30.548c0,2.343,0.261,4.625,0.745,6.825
			c-33.415-4.715-62.472-7.003-86.439,15.173c-6.523,6.037-21.919,22.699-23.986,46.974c-0.14,1.644-3.061,40.486,28.382,61.555
			c12.524,8.392,25.511,10.719,36.061,10.719c4.212,0,8.032-0.371,11.281-0.875c2.441,7.023,7.351,12.896,13.687,16.582
			c-31.123,17.28-52.237,50.487-52.237,88.538c0,18.833,5.246,37.127,14.972,52.956h-23.671c-21.723,0-39.396,17.674-39.396,39.396
			v0.432c0,4.648,3.767,8.414,8.414,8.414h287.676c4.647,0,8.414-3.766,8.414-8.414v-0.432c0-21.723-17.672-39.396-39.396-39.396
			H158.359c-12.076-14.965-18.689-33.624-18.689-52.956c0-46.521,37.848-84.369,84.369-84.369c46.521,0,84.37,37.848,84.37,84.369
			c0,8.859-1.364,17.581-4.056,25.923c-1.426,4.422,1.003,9.164,5.426,10.59c4.424,1.427,9.164-1.003,10.591-5.426
			c3.229-10.014,4.867-20.474,4.867-31.088c0-36.91-19.866-69.262-49.463-86.941c10.899-4.765,18.539-15.645,18.539-28.281
			c0-13.885-9.222-25.654-21.862-29.512c-2.152-13.881-10.537-25.722-22.192-32.585c5.115-5.65,8.235-13.137,8.235-21.34
			c0-6.15-1.758-11.895-4.792-16.768c23.5,0.765,49.414-1.422,77.478-10.732c17.455-5.791,53.774-17.842,79.285-52.348
			C437.19,96.149,438.42,54.202,436.774,32.417z M154.351,480.586c0.036,0,0.071,0.006,0.107,0.006c0.042,0,0.083-0.004,0.125-0.006
			h185.274c9.634,0,17.878,6.068,21.109,14.585H93.034c3.231-8.516,11.475-14.585,21.109-14.585H154.351z M173.988,106.677
			c-7.732,0-14.024-6.292-14.024-14.024v-0.561h43.287h46.83h43.952v0.561c0,7.733-6.291,14.024-14.024,14.024H173.988z
			 M225.083,150.474c0.514,0.098,1.042,0.154,1.584,0.154c0.682,0,1.342-0.09,1.978-0.243c7.584,0.74,13.533,7.15,13.533,14.927
			c0,4.954-2.426,9.342-6.139,12.075c-6.957-0.669-13.732-1.526-20.343-2.441c-2.192-2.608-3.519-5.968-3.519-9.634
			C212.176,157.752,217.802,151.498,225.083,150.474z M226.667,197.14c8.272,0,15.001,6.729,15.001,15.001
			c0,8.271-6.729,15-15.001,15c-8.271,0.001-15-6.729-15-15C211.667,203.87,218.396,197.14,226.667,197.14z M160.454,288.755
			c-8.067,1.47-23.181,2.386-37.036-6.898c-23.294-15.609-21.008-45.845-20.982-46.149c1.566-18.411,13.563-31.344,18.647-36.048
			c20.028-18.533,45.548-14.818,80.869-9.68c0.552,0.081,1.112,0.162,1.668,0.242c-5.436,5.713-8.782,13.43-8.782,21.919
			c0,8.326,3.217,15.911,8.467,21.588c-11.431,6.899-19.634,18.625-21.76,32.336C171.041,269.272,162.905,277.945,160.454,288.755z
			 M263.461,281.556c7.733,0,14.024,6.291,14.024,14.024s-6.291,14.024-14.024,14.024h-72.925c-7.733,0-14.024-6.291-14.024-14.024
			s6.291-14.024,14.024-14.024H263.461z M254.927,264.727h-55.855c3.62-11.996,14.768-20.756,27.927-20.756
			S251.305,252.733,254.927,264.727z"/>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
</svg>
                                <h3 class="service-title">Hookah</h3>
                                <p>Lorem ipsum atea dolor amet sectetur adip isicing elit, sed do eiua intan olore magna
                                    athem offera. atuioUt enim ad minis nostr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <img src="assets/images/webp/Gheviphoto-23.webp" alt="responsive img" loading="lazy">
                    <div class="caption">
                        <div class="caption-inner">
                            <div class="caption-content">
                                <svg class="my-svg" viewBox="-2 0 160 160" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M155.491 33.0349C155.313 32.587 155.169 32.1266 155.062 31.6569C153.921 25.7382 150.752 20.4023 146.101 16.5681C137.236 9.1397 124.47 8.33851 112.784 14.4805C106.243 17.9276 101.117 23.5587 98.299 30.3942L58.7093 31.2473L53.383 23.8961C48.6416 17.3531 44.0429 11.0063 39.4236 4.67458C38.5741 3.39473 37.3688 2.39099 35.9567 1.78643C34.5446 1.18187 32.9869 1.00308 31.4745 1.27175C30.3355 1.39325 29.1882 1.41496 28.0454 1.33712C27.6548 1.32334 27.2648 1.30908 26.8769 1.30187C23.9207 1.24673 20.9635 1.18878 18.0061 1.12753C14.1118 1.04877 10.2177 0.973031 6.3234 0.901271C6.19213 0.901271 6.05427 0.893718 5.91447 0.887811C5.12681 0.766525 4.32104 0.902896 3.61729 1.27687C2.01779 2.4189 1.23544 3.39346 1.15602 4.34384C1.0556 5.55413 2.26079 7.13958 3.36475 7.69156C4.75666 8.26657 6.24738 8.5656 7.75337 8.57223L7.85851 8.57925C14.8971 9.06823 21.9143 9.5081 28.7133 9.88615C29.3834 9.89679 30.0383 10.0864 30.6105 10.4355C31.1827 10.7845 31.6514 11.2807 31.9674 11.8718C33.9745 14.9428 36.0908 18.01 38.1372 20.9773C39.2989 22.6621 40.4613 24.3474 41.6092 26.0408C42.5019 27.3535 43.3632 28.7045 44.3609 30.266C44.6726 30.7523 44.9976 31.261 45.3415 31.7972C44.9477 31.7972 44.5788 31.7922 44.2218 31.7895C42.8435 31.7803 41.6546 31.7713 40.485 31.8107L37.3347 31.9126C32.846 32.0563 28.2042 32.2054 23.642 32.483C20.9563 32.6451 18.8891 34.0098 17.9702 36.2243C16.9758 38.6225 18.4519 40.4636 19.6373 41.9416L19.92 42.2967C20.1307 42.5592 20.3577 42.8002 20.5763 43.03L20.6366 43.0953C22.0367 44.5634 23.4388 46.0293 24.8438 47.4929C27.8124 50.5856 30.8821 53.7839 33.8396 56.981C39.005 62.5638 44.1608 68.1568 49.3064 73.7586C55.4347 80.4198 61.7718 87.3067 68.0326 94.0565C68.5459 94.5724 68.9233 95.2071 69.1313 95.9041C69.3394 96.6018 69.3709 97.3395 69.2239 98.0523C68.6752 102.397 68.3483 105.917 68.1941 109.128C67.8482 116.351 67.5436 123.695 67.2489 130.798C67.0612 135.313 66.8696 139.828 66.6753 144.343C66.6346 145.27 66.5127 146.197 66.3841 147.178C66.3473 147.454 66.3112 147.734 66.2757 148.016H64.0863C61.8094 148.011 59.6521 148.007 57.4941 148.03C56.4336 148 55.3738 148.095 54.3354 148.313C51.7442 148.958 51.1395 150.624 51.089 151.907C51.0135 153.815 52.0079 155.161 53.9573 155.8C54.7487 156.068 55.5678 156.246 56.3993 156.33C66.2614 157.212 74.5422 157.94 82.898 158.627C83.0214 158.637 83.1468 158.641 83.2715 158.641C84.126 158.607 84.9714 158.453 85.7826 158.182C86.8669 157.923 87.8291 157.299 88.5077 156.414C89.187 155.53 89.5415 154.44 89.5126 153.325C89.5552 152.196 89.1765 151.09 88.4487 150.226C87.7214 149.361 86.6976 148.798 85.5772 148.648C84.1759 148.439 82.7628 148.323 81.3458 148.3L80.8253 148.281C79.846 148.24 78.8773 148.25 77.8488 148.26L77.1885 148.265C77.2824 147.438 77.3854 146.639 77.4813 145.862C77.7438 143.766 77.9958 141.787 78.0496 139.803C78.3929 127.19 78.7716 112.303 78.9469 97.4996C78.9029 96.4941 79.0834 95.4919 79.4765 94.5652C79.869 93.6391 80.4637 92.8121 81.2165 92.1446C87.1891 86.4016 93.213 80.4132 99.1128 74.3467C102.464 70.9002 105.788 67.2897 109.001 63.7994C110.309 62.3765 111.625 60.9508 112.949 59.5217C118.768 64.7941 125.807 66.2494 134.45 63.9725C146.167 60.8877 153.129 53.8183 155.144 42.9697C155.219 42.669 155.332 42.3787 155.48 42.1064C155.561 41.9377 155.643 41.7693 155.714 41.5987C155.748 41.5154 155.765 41.4259 155.765 41.3359V33.9483C155.765 33.8767 155.754 33.8054 155.732 33.7374C155.661 33.5037 155.576 33.2706 155.491 33.0349ZM119.002 38.9189C113.976 45.7677 81.9601 78.5262 73.6633 85.1946L30.4925 40.0297L119.002 38.9189ZM122.946 48.148C124.719 46.0477 126.493 43.9414 128.268 41.8288C128.477 41.5807 128.691 41.3346 128.905 41.0898C129.535 40.4012 130.114 39.6687 130.64 38.8977C131.093 38.2533 131.403 37.5189 131.548 36.7447C131.694 35.9706 131.672 35.1747 131.484 34.4098C131.287 33.7387 130.947 33.1185 130.486 32.5926C130.025 32.0668 129.455 31.6475 128.815 31.3645C126.814 30.4791 124.655 30.0014 122.466 29.9589C118.973 29.8277 115.519 29.852 111.859 29.8775C110.737 29.8854 109.602 29.892 108.453 29.8968C109.799 27.7142 111.552 25.8108 113.617 24.2903C116.18 22.2365 119.173 20.7875 122.374 20.0524C125.575 19.3172 128.901 19.3143 132.104 20.044C140.263 21.761 145.198 28.8968 144.677 38.2247C144.579 40.4112 144.03 42.5539 143.066 44.5189C142.102 46.4838 140.743 48.229 139.074 49.6453C137.369 51.0704 135.389 52.129 133.256 52.7545C131.124 53.38 128.885 53.5591 126.68 53.2807C124.573 53.0412 122.931 52.2476 120.97 50.4933L122.946 48.148Z"
                                              fill="black"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="154.896" height="158.834" fill="white"
                                                  transform="translate(0.917725 0.463379)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <h3 class="service-title">Drink Bar</h3>
                                <p>Lorem ipsum atea dolor amet sectetur adip isicing elit, sed do eiua intan olore magna
                                    athem offera. atuioUt enim ad minis nostr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item foo">
                    <img src="assets/images/webp/Gheviphoto-60.webp" alt="responsive img" loading="lazy">
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
<div id="videos" class="container">
    <div id="carouselVideo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner videoSection">
            <div class="carousel-item active">
                <video class="d-block w-100 video" autoplay muted controls loop preload="auto">
                    <source src="assets/videos/IMG_2222.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="carousel-item">
                <video class="d-block w-100 video" autoplay muted controls loop preload="auto">
                    <source src="assets/videos/IMG_2222.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="carousel-item">
                <video class="d-block w-100 video" autoplay muted controls loop preload="auto">
                    <source src="assets/videos/IMG_2222.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselVideo" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselVideo" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

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
                    @foreach($galleries as $gallery)
                        <div class="gallery-item">
                            <img src="{{ $gallery }}" alt="Gallery" loading="lazy">
                            <div class="caption">
                                <div class="caption-inner">
                                    <div class="caption-content">
                                        <ul>
                                            <li><a href="{{ $gallery }}"><i
                                                            class="fa-solid fa-magnifying-glass"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 foo">
                <div class="post-row">
                    <div class="post-header">
                        <div class="post-feature">
                            <img src="assets/img/post-feature-1.png" alt="responsive img" loading="lazy">
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="post-caption">
                            <div class="post-caption-inner">
                                <div class="post-caption-content">
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
                            <img src="assets/img/post-feature-2.png" alt="responsive img" loading="lazy">
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
                            <img src="assets/img/post-feature-3.png" alt="responsive img" loading="lazy">
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

<div class="map-area inner-padding3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="map-contacts">
                    <iframe class="googleMap"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12190.027326087957!2d44.58260142432861!3d40.19778747631633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbf605c39da28501a!2sMatreshka%20Show%20Club!5e0!3m2!1sru!2s!4v1670416611552!5m2!1sru!2s"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="footer-area foo" data-sr='bottom'>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="company-logo">
                        <a href="{{route('home', app()->currentLocale())}}">
                            <img src="{{asset('assets/images/logos/logo-night-club.webp')}}"
                                 alt="responsive img" loading="lazy">
                        </a>
                    </div>
                    <div class="footer-content">
                        <ul class="social-link">
                            <li>
                                <a href="https://www.google.com/maps/place/Matreshka+Show+Club/@40.1987449,44.5817158,17z/data=!3m1!4b1!4m5!3m4!1s0x406aa37f3f0decb1:0xbf605c39da28501a!8m2!3d40.1987112!4d44.5839217"
                                   target="_blank">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="address">{{$contacts['address']}}</span>
                                </a>
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
<script src="{{asset('/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script src="{{asset('/assets/js/scrollreveal.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/meanmenu.js')}}"></script>
<script src="{{asset('/assets/js/countdown.js')}}"></script>
<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/isotope_custom.js')}}"></script>
<script src="{{asset('/assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.gridrotator.js')}}"></script>
<script src="{{asset('/assets/js/theme.js')}}"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
{{--<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>--}}

<script src="https://kit.fontawesome.com/57e89dc5d7.js" crossorigin="anonymous"></script>
<script src="{{asset('/assets/js/custom.js')}}"></script>

</body>

</html>
