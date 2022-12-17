checkWindowSize();

// Check if the page has enough content or not. If not then fetch records
function checkWindowSize() {
    if ($(window).height() >= $(document).height()) {
        // Fetch records
        fetchData();
    }
}

// Fetch records
function fetchData() {

}

$(document).on('touchmove', onScroll); // for mobile

function onScroll() {

    if ($(window).scrollTop() > $(document).height() - $(window).height() - 100) {
        fetchData();
    }
}

$(window).scroll(function () {

    var position = $(window).scrollTop();
    var bottom = $(document).height() - $(window).height();

    if (position === bottom) {
        fetchData();
    }

});

function hero_slider_carousel() {
    var owl = $("#hero-slider-screen");
    owl.owlCarousel({
        lazyLoad: true,
        margin: 10,
        smartSpeed: 2000,
        responsiveClass: true,
        navigation: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        nav: true,
        items: 1,
        addClassActive: true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 3000,
        stopOnHover: true,
        responsive: {
            0: {
                dots: true,
                nav: false,
            },

            768: {
                dots: false,
                nav: true,
            }
        }
    });

    owl.on('change.owl.carousel', function (event) {
        $('.hero-caption-inner h1')
            .fadeOut(0);

        $('.hero-caption-inner p')
            .fadeOut(0)
    });

}


hero_slider_carousel();

$(window).on('load', function () {
    // Preloader


});

window.addEventListener('load', function (){
    $('.preloader-wrap').fadeOut('slow', function () {
        $(this).remove();
    });

    $('.gallery-masonry').masonry({
        itemSelector: '.gallery-item'
    });

    $('img.lazy').Lazy();


});

// Js Index
(function ($) {
    "use strict";
    /* jQuery MeanMenu */
    $('#mobile-menu-active').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu-area .mobile-menu",
        meanMenuOpen: "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"#fff \" d=\"M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z\"/></svg>",
        meanMenuClose: "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\"><path  fill=\"#fff \" d=\"M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z\"/></svg>"
    });

    $(".carousel-inner .item:first-child").addClass("active");

    // Adjust Header Menu On Scroll Down
    $(window).on('scroll', function () {

        var wScroll = $(this).scrollTop();
        var header_ht = $('.header-top').height() + 30;

        if (wScroll > header_ht) {
            $('.navbar-default').addClass('sticky');
            $('.header-top').css({marginTop: -header_ht + 'px'});
            $('.nav-area-4 .header-top').css({
                display: 'none'
            });

        } else {
            $('.navbar-default').removeClass('sticky');
            $('.header-top').css({marginTop: 0 + 'px'});
            $('.nav-area-4 .header-top').css({
                marginTop: 0 + 'px',
                display: 'block'
            });
        }

    });

    var navbarCollapse = $('.navbar-collapse');
    var navbarToggle = $('.navbar-toggle');

    $(".navbar-nav li a").on('click', function (event) {
        navbarCollapse.removeClass("collapse in").addClass("collapse").removeClass('open');
        navbarToggle.removeClass('open');

    });
    $(".dropdown-toggle").on('click', function (event) {
        navbarCollapse.addClass("collapse in").removeClass("collapse");
        navbarToggle.addClass('open');
    });
    navbarToggle.on('click', function () {
        $(this).toggleClass('open');
    });

    // Hero Section Slider
    function hero_slider_carousel() {
        var owl = $("#hero-slider-screen");
        owl.owlCarousel({
            loop: false,
            margin: 10,
            smartSpeed: 1500,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            items: 1,
            addClassActive: true,
            dots: false,
            autoplay: false,
            autoplayTimeout: 5000,
            stopOnHover: true,
            responsive: {
                0: {
                    dots: true,
                    nav: false,
                },

                768: {
                    dots: false,
                    nav: true,
                }
            }
        });
        owl.on('changed.owl.carousel', function (event) {
            $('.hero-caption-inner h1').addClass('animated').addClass('bounceIn')
                .delay(500)
                .fadeIn(900);

            $('.hero-caption-inner p').addClass('animated').addClass('zoomIn')
                .delay(600)
                .fadeIn(900);
        });
        owl.on('change.owl.carousel', function (event) {
            $('.hero-caption-inner h1')
                .fadeOut(0);

            $('.hero-caption-inner p')
                .fadeOut(0)
        });

    }

    hero_slider_carousel();

    let carouselVideo = $('#carouselVideo')
    carouselVideo.on('slide.bs.carousel', function (event) {
        document.getElementById(`video-player-${event.from}`).pause();
        document.getElementById(`video-player-${event.to}`).play();
    });

    // Gallery PopUp
    $('.gallery').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'li:last-child a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });

    //scrollReveal js Init
    window.sr = ScrollReveal({duration: 800});
    sr.reveal('.reveal');
    sr.reveal('.foo');
    sr.reveal('.bar');

}(jQuery));
