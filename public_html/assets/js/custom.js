// $(window).on('load', function () {
//     $('.carousel').carousel();
// })
function openMenu() {
    $('.js-menu').toggleClass('active');
    $('.js-nav').toggleClass('open');
    $('.js-nav__list').toggleClass('show');
}

function closeMenu() {
    $('.js-menu').removeClass('active');
    $('.js-nav').removeClass('open');
    $('.js-nav__list').removeClass('show');
}

$(function () {
    $('.menu').on('click', () => {
        openMenu();
    });

    $('.nav__item').on('click', () => {
        closeMenu();
    });

    $('.nav').on('click', () => {
        console.log(1123);
        closeMenu();
    });
})