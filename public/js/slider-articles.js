$(document).ready(function () {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        autoplayTimeout: 5000,
        autoplaySpeed: 5000,
        loop: true,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        autoplay: true
    });
});