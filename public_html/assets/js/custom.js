// $(window).on('load', function () {
//     $('.carousel').carousel();
// })
function openMenu() {
    $('.js-menu').toggleClass('active');
    $('.js-nav').toggleClass('open');
    $('.js-nav__list').toggleClass('show');
    $('.js-nav_social').toggleClass('mobile-social-links');
}

function closeMenu() {
    $('.js-menu').removeClass('active');
    $('.js-nav').removeClass('open');
    $('.js-nav__list').removeClass('show');
    $('.js-nav_social').removeClass('mobile-social-links');
}

$(function () {
    $('.menu').on('click', () => {
        openMenu();
    });

    $('.nav__item').on('click', () => {
        closeMenu();
    });

    $('.nav').on('click', () => {
        closeMenu();
    });

    $('#load-more-gallery').on('click', () => {
        console.log($(this).data())
        // loadMoreGalleries()
    });

    function loadMoreGalleries(id = "", _token) {
        $.ajax({
            url: "{{ route('loadmore.load_data') }}",
            method: "POST",
            data: {id: id, _token: _token},
            success: function (data) {
                $('#load_more_button').remove();
                $('#post_data').append(data);
            }
        })
    }

})