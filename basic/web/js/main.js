$(document).ready(function () {
    const navOffset = $('#nav').offset().top;
    $(window).scroll(function () {

        const scrolled = $(this).scrollTop();

        if (scrolled > navOffset) {
            $('#nav').addClass('nav-fixed');
            $('#header').addClass('nav-marginFixed');
        } else if (scrolled < navOffset) {
            $('#nav').removeClass('nav-fixed');
            $('#header').removeClass('nav-marginFixed');
        }

    });
});