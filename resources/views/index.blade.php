@include('partials/language_switcher')
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@lang('main.page-title')</title>
    @foreach(__('meta') as $name => $content)
        <meta name="{{$name}}" content="{{$content}}">
    @endforeach
    <meta property="og:title" name="title" content="Matreshka Show Club"/>
    <meta property="og:description" name="description" content="Matreshka Show Club">

    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://matreshka.am"/>
    <meta property="og:image" content="/assets/img/logos/logo-night-club.PNG"/>
    <link rel="apple-touch-icon" href="/assets/img/logos/light-logo.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Mega  -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">{{--    <link rel="stylesheet" href="assets/css/font-awesome.min.css">--}}
    <!--Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--magnific popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animated CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Theme CSS-->
    <link rel="stylesheet" href="assets/css/default.min.css">
    <link rel="stylesheet" href="assets/css/typography.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="stylesheet" href="assets/css/custom.min.css">
    <link rel="stylesheet" href="assets/css/custom-menu.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logos/light-logo.png">
</head>

<body data-spy="scroll" data-target="#scroll-menu" data-offset="65">
<div class="preloader-wrap">
    <div class="preloader-inside">
        <div class="logo-loading animated bounce zoomIn">
            <img src="{{asset('assets/img/logos/logo-image.webp')}}" alt="Matreshka Show Club">
        </div>
    </div>
</div>
<x-header :$socials :$navigations/>
<x-intro :$intros/>
<x-service-area :$services/>
<x-gallery :$galleries/>
<x-videos :$videos/>
{{--<x-instagram-area :$videos />--}}
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

<x-footer :$socials/>


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
{{--<script src="{{asset('/assets/js/countdown.js')}}"></script>--}}
<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/isotope_custom.js')}}"></script>
<script src="{{asset('/assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/modernizr-3.11.2.min.js')}}"></script>
{{--<script src="{{asset('/assets/js/jquery.gridrotator.js')}}"></script>--}}
<script src="{{asset('/assets/js/theme.js')}}"></script>


<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.plugins.min.js"></script>
<script src="https://kit.fontawesome.com/57e89dc5d7.js" crossorigin="anonymous"></script>
<script src="{{asset('/assets/js/custom.js')}}"></script>

</body>

</html>
