$(document).ready(function () {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        // itemsDesktop: [1000, 1],
        // itemsDesktopSmall: [979, 1],
        // itemsTablet: [767, 1],
        // pagination: false,
        loop: true,
        transitionStyle: "fade",
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        autoPlay: true
    });
});