(function (jQuery) {
    "use strict";

    var browserWindow = jQuery(window);

    // :: 1.0 Preloader Active Code
    browserWindow.on("load", function () {
        jQuery("#preloader").fadeOut("slow", function () {
            jQuery(this).remove();
        });
    });

    // :: 2.0 Slides Active Code
    if (jQuery.fn.owlCarousel) {

        var heroSlide = jQuery(".hero-slides");
        heroSlide.owlCarousel({
            items: 3,
            margin: 30,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });

        var welcomeSlide = jQuery(".welcome-slides");
        welcomeSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 8000,
            smartSpeed: 1000,
            autoplayHoverPause: true
        });

        welcomeSlide.on("translate.owl.carousel", function () {
            var slideLayer = jQuery("[data-animation]");
            slideLayer.each(function () {
                var anim_name = jQuery(this).data('animation');
                jQuery(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        welcomeSlide.on('translated.owl.carousel', function () {
            var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = jQuery(this).data('animation');
                jQuery(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        jQuery("[data-delay]").each(function () {
            var anim_del = jQuery(this).data('delay');
            jQuery(this).css('animation-delay', anim_del);
        });

        jQuery("[data-duration]").each(function () {
            var anim_dur = jQuery(this).data('duration');
            jQuery(this).css('animation-duration', anim_dur);
        });
    }

    // :: 3.0 Newsticker Active Code
    if (jQuery.fn.simpleTicker) {
        jQuery.simpleTicker(jQuery("#breakingNewsTicker"), {
            speed: 1000,
            delay: 3000,
            easing: 'swing',
            effectType: 'roll'
        });
    }
    // :: 4.0 Nav Active Code
    if (jQuery.fn.classyNav) {
        jQuery('#viralnewsNav').classyNav();
    }

    // :: 5.0 Gallery Active Code
    if (jQuery.fn.magnificPopup) {
        jQuery('.videoPlayer').magnificPopup({
            type: 'iframe'
        });
    }

    // :: 6.0 ScrollUp Active Code
    if (jQuery.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up"></i>'
        });
    }

    // :: 7.0 CouterUp Active Code
    if (jQuery.fn.counterUp) {
        jQuery('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // :: 8.0 Sticky Active Code
    if (jQuery.fn.sticky) {
        jQuery("#stickyMenu").sticky({
            topSpacing: 0
        });
    }

    // :: 9.0 wow Active Code
    if (browserWindow.width() > 767) {
        new WOW().init();
    }

    // :: 10.0 prevent default a click
    jQuery('a[href="#"]').on('click', function (jQuery) {
        jQuery.preventDefault();
    });

    // :: 11.0 Search Form Active Code
    var searchbtn = jQuery('#searchbtn');
    var viral_search_form = jQuery('.viral-search-form');
    var navbar_toggler = jQuery('.classy-navbar-toggler');

    searchbtn.on('click', function () {
        jQuery(this).toggleClass('fa-close');
        viral_search_form.toggleClass('active');
    });
    navbar_toggler.on('click', function () {
        viral_search_form.removeClass('active');
    });
    navbar_toggler.on('click', function () {
        searchbtn.removeClass('fa-close');
    });

})(jQuery);