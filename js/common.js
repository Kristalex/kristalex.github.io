$(document).ready(function() {
    $("[data-menu-burger]").click(function(){
        $("html").toggleClass("menu-burger__html-overlay");
    });

    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".header").addClass("header__scroll");
        } else {
            $(".header").removeClass("header__scroll");
        }
    });
});