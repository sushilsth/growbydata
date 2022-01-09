/**
 * Custom js
 */

(function ($) {
    $(document).ready(function () {
        var pageSection = $(".data-bg");

        pageSection.each(function (indx) {
            if ($(this).attr("data-background")) {
                $(this).css("background-image", "url(" + $(this).data("background") + ")");
            }
        });

        $('.background-src').each(function () {
            var src = $(this).children('img').attr('src');
            $(this).css('background-image', 'url(' + src + ')').children('img').hide();
        });

        $('.background').each(function () {
            var src = $(this).children('img').attr('src');
            $(this).css('background-image', 'url(' + src + ')').children('img').hide();
        });

        $('#freeTrial, #careerContactform, #gbdCareer').on('show.bs.modal', function (e) {
            $('body').addClass('pad0');
        });

        $(".main-slider").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 8000,
            infinite: true,
            nextArrow: '<i class="navcontrol-icon slide-next la la-angle-right"></i>',
            prevArrow: '<i class="navcontrol-icon slide-prev la la-angle-left"></i>',
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                    }
                }
            ]
        });

        $(".gallery-columns-1").each(function () {
            $(this).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                autoplay: true,
                autoplaySpeed: 8000,
                infinite: true,
                nextArrow: '<i class="navcontrol-icon slide-next la la-angle-right"></i>',
                prevArrow: '<i class="navcontrol-icon slide-prev la la-angle-left"></i>',
                dots: true
            });
        });


        $('a[href*="scroll-down"]').bind("click", function () {
            var scrollTo = jQuery('div.container a#scroll-down');
            var container = jQuery("html,body");
            var scroll_height = (scrollTo.offset().top - container.offset().top);
            var ismobile = navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i)

            if (!ismobile) var scroll_height = (scrollTo.offset().top - container.offset().top - 130);

            container.animate({scrollTop: scroll_height, scrollLeft: 0}, 600);
        });

        $('.theiaStickySidebar', 'body').parent().theiaStickySidebar({
            additionalMarginTop: 30
        });
    });


    if (window.matchMedia('(max-width: 767px)').matches) {
        $('.slideToggler2').click(function () {
            $('.slideContent2').slideToggle('slow');
            $(this).toggleClass('slideSign2');
            return false;
        });
        $('.collaps2').click(function () {
            $('.slideContent2').slideToggle('slow');
            $('.slideToggler2').toggleClass('slideSign2');
            return false;
        });
        $('.slideToggler1').click(function () {
            $('.slideContent1').slideToggle('slow');
            $(this).toggleClass('slideSign2');
            return false;
        });
        $('.collaps2').click(function () {
            $('.slideContent1').slideToggle('slow');
            $('.slideToggler1').toggleClass('slideSign2');
            return false;
        });

    }




    $('.gbd-top-btn').click(function () {
        $(this).toggleClass("active");
    });

    $('.gbd-nav .nav .gbd-menu-haschild').click(function () {
        $(this).toggleClass("active");
    });

    $(window).scroll(function () {
        $('.amazon-sale .container div, .cat-block .info-box.greek-logo, .gbd-inti .btm-content .info-box.schuler-logo').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+700) {
                $(this).addClass("slideLeft");
            }
        });
        $('.google-sale .container div, .cat-block .info-box.schuler-logo, .gbd-inti .btm-content .info-box.greek-logo ').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+700) {
                $(this).addClass("slideRight");
            }
        });

        $('.gbd-data-serv .btm-content .data-case').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+700) {
                $(this).addClass("slideExpandUp");
            }
        });

        if ($(document).scrollTop() > 50) {
            $('.navbar-default').addClass('shrink');
            $("header").next().removeClass('gbd-space');
        } else {
            $('.navbar-default').removeClass('shrink');
            $("header").next().addClass('gbd-space');
        }
    });
})(jQuery);