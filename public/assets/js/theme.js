/*
 ===========================================================
 Table of Contents
 -----------------------------------------------------------
 ---------------------------------------------
 ** Js Index
 ---------------------------------------------
// Preloader
// Bootstrap Essentials
// Smooth Scrolling Effect
// Adjust Header Menu On Scroll Down
// On click hide collapse menu
// Adjust Call To Action Area
// Hero Section Slider
// countdown
// Event Section Slider
// about Section Slider
// jockey Section Slider
// Gallery Masonry Grid
// prettyPhoto js   
// Profile Item Tab Slider
// Video Item Tab Slider
//background grid main slider
//scrollReveal js Init
// Ajax Contact Form  
 ===========================================================
 ===========================================================
 */
$(window).on('load', function () {
    // Preloader
    $('.preloader-wrap').fadeOut('slow', function () {
        $(this).remove();
    });

    // Gallery Masonry Grid
    $('.gallery-masonry').masonry({
        itemSelector: '.gallery-item, .photo-gallery-item'
    });

    // Gallery Masonry Grid
    $('.contact-form').masonry({
        itemSelector: 'li , .contact-select'
    });

});
// Js Index
(function ($) {
    "use strict";
    /* jQuery MeanMenu */
    $('#mobile-menu-active').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu-area .mobile-menu",
    });

    // Bootstrap Essentials
    $(".embed-responsive iframe").addClass("embed-responsive-item");
    $(".carousel-inner .item:first-child").addClass("active");
    $(function () {
        $("[rel='tooltip']").tooltip();
    });
    

    // Smooth Scrolling Effect
    $('.smoothscroll').on('click', function (e) {
        e.preventDefault();
        var target = this.hash;

        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top - 50
        }, 1200);
    });

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

    // On click hide collapse menu

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

    // Adjust Call To Action Area
    var cta_height = $('.call-to-action').height() + 140;
    var cta_mt = -(cta_height / 2 + 45);
    $('.call-to-action').css('marginTop', cta_mt + 'px');
    $('.footer-area2').css('marginTop', (cta_height / 3) + 'px');


    // Hero Section Slider
    function hero_slider_carousel() {
        var owl = $("#hero-slider-screen");
        owl.owlCarousel({
            loop: true,
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
            $('.hero-caption-inner h1').addClass('animated').addClass('bounceInDown')
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

    // countdown
    $('[data-countdown]').each(function () {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hours</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min.</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec.</p></span>'));
        });
    });

    // Vedio PopUp 
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false
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


    // Event Section Slider
    function event_slider_carousel() {
        var owl = $("#event-slider-screen");
        owl.owlCarousel({
            loop: true,
            margin: 10,
            smartSpeed: 2000,
            center: true,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            items: 5,
            addClassActive: true,
            dots: false,
            autoplay: false,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1,
                },

                768: {
                    items: 3,
                },

                992: {
                    items: 5,
                }
            }
        });
    }

    event_slider_carousel();

    // about Section Slider
    function about_slider_carousel() {
        var owl = $("#about-slider-screen");
        owl.owlCarousel({
            loop: true,
            margin: 10,
            smartSpeed: 2000,
            responsiveClass: true,
            navigation: false,
            nav: false,
            items: 1,
            addClassActive: true,
            dots: true,
            autoplay: false,
            autoplayTimeout: 5000,
            responsive: {}
        });
    }

    about_slider_carousel();

    // jockey Section Slider
    function jockey_slider_carousel() {
        var owl = $("#jockey-slider-screen");
        owl.owlCarousel({
            loop: true,
            margin: 25,
            smartSpeed: 2000,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            items: 4,
            addClassActive: true,
            dots: false,
            autoplay: false,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1,
                },

                768: {
                    items: 3,
                },

                992: {
                    items: 4,
                }
            }
        });
    }

    jockey_slider_carousel();

    // Profile Item Tab Slider
    $('.profile-item-tab').on('click', function () {
        $('.profile-item-tab').removeClass('active');
        $(this).addClass('active');
    });

    // Video Item Tab Slider
    $('.video-tab').on('click', function () {
        $('.video-tab').removeClass('active');
        $(this).addClass('active');
    });

    //background grid main slider
    $('#ri-grid').gridrotator({
        rows: 2,
        columns: 6,
        maxStep: 2,
        interval: 2000, // manage interval for grid image rotation 
        w1024: {
            columns: 3
        },
        w480: {
            rows: 4,
            columns: 3
        }
    });

    //scrollReveal js Init
    window.sr = ScrollReveal({duration: 800});
    sr.reveal('.foo');
    sr.reveal('.bar');

    // Ajax Contact Form  

    $('.cf-msg').hide();
    $('form#cf button#submit').on('click', function () {
        const action = $('#cf').attr('action');
        let fname = $('#fname').val(),
            email = $('#email').val(),
            phone = $('#phone').val(),
            msg = $('#msg').val(),
            regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!regex.test(email)) {
            alert('Please enter valid email');
            return false;
        }

        fname = $.trim(fname);
        email = $.trim(email);
        phone = $.trim(phone);
        msg = $.trim(msg);

        if (fname !== '' && email !== '' && phone !== '' && msg !== '') {
            const values = "fname=" + fname + "&email=" + email + "&phone=" + phone + "&msg=" + msg;
            $.ajax({
                type: "POST",
                url: action,
                data: values,
                success: function () {
                    $('#fname').val('');
                    $('#email').val('');
                    $('#phone').val('');
                    $('#msg').val('');

                    $('.cf-msg').fadeIn().css('background-color', 'rgba(98, 181, 87, 0.7)').html('<p>Email has been sent successfully.</p>');
                    setTimeout(function () {
                        $('.cf-msg').fadeOut('slow');
                    }, 2000);
                }
            });
        } else {
            $('.cf-msg').fadeIn().css('background-color', 'rgba(181,62,75,0.7)').html('<p>Please fillup the informations correctly.</p>')
        }
        return false;
    });


}(jQuery));
