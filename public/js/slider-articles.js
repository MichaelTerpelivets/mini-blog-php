$(document).ready(function () {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        autoplayTimeout: 1000,
        loop: true,
        transitionStyle: "fade",
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        autoPlay: true
    });
});