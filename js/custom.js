$ = jQuery;
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".header-widget");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $("header").addClass("light-skin");
        } else {
            $("header").removeClass("light-skin");
        }
    });

    $('.menu-button').click(function() {
        $(this).toggleClass('active');
        $('.menu').toggleClass('active');
        $('header').toggleClass('menu-activated');
    });
});