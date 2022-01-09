/*
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

        // $('.theiaStickySidebar', 'body').parent().theiaStickySidebar({
        //     additionalMarginTop: 30
        // });

        $(".signupbtn").click(function(){
            $('html, body').animate({scrollTop: $("#landing-wrapper").position().top}, "slow");
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
        $(document).on("click",".slideToggler1", function () {
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

    $('.gbd-nav .nav .menu-item-has-children').click(function () {
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


   


    var mobileCheck = function () {
        var userAgent = false;
        var mobileWidth = false;
        if (navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)
        ) {
        userAgent = true;
        }
        else {
        userAgent =  false;
        }
        if(window.innerWidth <= 767) {
        mobileWidth = true;
        } else {
        mobileWidth =  false;
        }
        return (userAgent || mobileWidth);
};

    jQuery("#gbd_opening_job").click(function(){
        jQuery(window).scrollTop(jQuery(".overview-career").offset().top - jQuery(".navbar-default").height());
    });

jQuery("ul#menu-main_menu_new > li").hover(function(){
jQuery("ul#menu-main_menu_new > li").removeClass("eci-menu-hover");
  jQuery(this).addClass("eci-menu-hover");
  }, function(){
  //$(this).css("background-color", "pink");
});

})(jQuery);


// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  if(document.getElementById("gbd-Bar"))
        document.getElementById("gbd-Bar").style.width = scrolled + "%";
}


   jQuery(document).ready(function () {
        jQuery('.search-toggle').click(function () {

            jQuery('.search-bar').toggle('slide');
            jQuery('.search-toggle i').toggle();
            setTimeout(function(){
                jQuery('.searchbox-input').focus();
            },1500);
            
        });      

    });

   jQuery(document).on("click",".suggestion_keyword",function(){
        jQuery('.searchbox-input').val(jQuery(this).text());
   })


jQuery.ajax({
        url: admin_ajax,
        type: 'get',
        data: { action: 'getCountry' },
        success: function(data) {
            //console.log(data);
            if(data.toLowerCase() !== "nepal" && window.location.href == "https://growbydata.com/"){
                var hubspotLiveChatsetTimeout = setTimeout(function(){
                    clearTimeout(hubspotLiveChatsetTimeout);
                    var script = document.createElement("script");
                    script.type = "text/javascript";
                    script.id = "hs-script-loader";
                    script.async = true;
                    script.src = '//js.hs-scripts.com/5372895.js';
                    document.body.appendChild(script);
                },3000);
            }
        }
    });


var successStoriesHTML = '<div class="gbd-success-stories"> <div class="container"> <div class="row"> <strong>Success stories</strong><div class="gbd-success-section"> <div class="testimonial col-md-6"> <div class="testi_content"> <p class="testi_description"> “We get 360 degree visibility on our competitive landscape across channels enabling us to drive better strategy.” </p></div><div class="testimonial-pic"> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial4-1.png.webp"> <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial4-1.png" alt="CEO"> </picture> </div><div class="testimonial-review"> <h3 class="testimonial-title">CEO </h3> <span>Multi-Category Apparel Retailer </span> </div></div><div class="testimonial col-md-6"> <div class="testi_content"> <p class="testi_description"> “Amazon sales literally grew 100% YoY, in 30 days, after upgrading from Amazon’s free repricer to GBD” </p></div><div class="testimonial-pic"> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial3-1.png.webp"> <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial3-1.png" alt="VP of Ecommerce, North America"> </picture> </div><div class="testimonial-review"> <h3 class="testimonial-title">VP of Ecommerce, North America </h3> <span>Leading Music Products Retailer </span> </div></div><div class="testimonial col-md-6"> <div class="testi_content"> <p class="testi_description"> “We learned we were underpriced by more than 8% on 30% of our catalog. We RAISED prices and boosted margins without impacting sales.” </p></div><div class="testimonial-pic"> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial2-2.png.webp"> <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial2-2.png" alt="CFO"> </picture> </div><div class="testimonial-review"> <h3 class="testimonial-title">CFO </h3> <span>Large B2B Equipment Retailer </span> </div></div><div class="testimonial col-md-6"> <div class="testi_content"> <p class="testi_description"> “After shifting Google Shopping budget to today’s “cheapest” items we saw an immediate 27% lift in RoAS” </p></div><div class="testimonial-pic"> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial1-2.png.webp"> <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial1-2.png" alt="VP of Marketing"> </picture> </div><div class="testimonial-review"> <h3 class="testimonial-title">VP of Marketing </h3> <span>Leading Apparel Brand </span> </div></div></div></div></div></div>';

var leaderHTML= '<div class="gbd-leaders"> <div class="container"> <div class="row"> <span class="gbd-allcaps gbd-niche slideToggler1 slideSign2">Trusted By Leading Online Retailers and Agencies</span> <section class="customer-logos slider"> <div class="slide"><div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/century-21-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/century-21-logo.png" alt="century-21-logo"/> </picture> </span></div></div><div class="slide"><div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/american-muscle-ford.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/american-muscle-ford.png" alt="american-muscle"/> </picture> </span></div></div><div class="slide"><div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/barneys-new-york-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/barneys-new-york-logo.png" alt="barneys-new-york-logo"/> </picture> </span></div></div><div class="slide"><div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/greek-gear.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/greek-gear.png" alt="totalretail"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/neiman-marcus-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/neiman-marcus-logo.png" alt="neiman-marcus"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/dollar-general-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/dollar-general-logo.png" alt="dollar-general-logo"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/skygeek-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/skygeek-logo.png" alt="skygeek-logo"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/rrs-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/rrs-logo.png" alt="rrs-logo"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/sourceorthologo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/sourceorthologo.png" alt="sourceortho"/> </picture> </span></div></div></section> </div></div></div>';
setTimeout(function(){
    jQuery("#GBDleaderBlock").html(leaderHTML);
    jQuery("#GBDSuccessStories").html(successStoriesHTML);
    var ll = new LazyLoad({
      elements_selector: ".lazyload img, .lazy"
    });
    jQuery('.customer-logos').on('afterChange',function(e){ll.update()});jQuery('.customer-logos').slick({slidesToShow:5,slidesToScroll:1,autoplay:!0,autoplaySpeed:1500,arrows:!1,dots:!1,pauseOnHover:!1,responsive:[{breakpoint:1030,settings:{slidesToShow:3,slidesToScroll:4,infinite:!0}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})
},3000);


// footer hotjar form load form on model open
 var data = {
                action: 'ad_intelligence_insights_form',
            };
jQuery('#ad-intelligence-insights').on('shown.bs.modal', function (e) {
    jQuery.get( admin_ajax, data,function( data ) {
        if(jQuery( "#Ad-Intelligence-Sign-up-Form" ).html().length == 0){
            jQuery( "#Ad-Intelligence-Sign-up-Form" ).html( data );
            jQuery("#ad-intelligence-insights-loading").remove();
        }
    });
})


// search functionality
var searchRequest = null;
jQuery('input[name="s"]').on("keyup", function(){
    var that = this;
    if (searchRequest != null) 
                searchRequest.abort();
    searchRequest =  jQuery.ajax({
        url: admin_ajax,
        type: 'GET',
        data: { action: "data_fetch", query: jQuery(this).val() },
        success: function(data) {
            var html_content="";
            var data = JSON.parse(data);
            // console.log(data);
            if(data.keywords){
                data.keywords.forEach(function(keyword){
                    html_content+='<li class="suggestion_keyword"><a href="javascript:void(0);">'+keyword.keyword+'</a></li>'

                })
            }
            if(data.posts){
                data.posts.forEach(function(post){
                    html_content+='<li class="suggestion_keyword"><a href="'+post.post_link+'">'+post.post_title+'</a></li>'
                })
            }        
        jQuery('#header_search_result').html( html_content );
        }
    });
});

jQuery(document).on("click", ".suggestion_keyword",function(){
    jQuery("#header_search_result").hide();
})


//homepage slider
// if(typeof homepageSliderDOM != "undefined"){
//     var slider = {
//         mobileCheck: function() {
//             var e = !1,
//                 i = !1;
//             return e = !!(navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)), i = window.innerWidth <= 800 && window.innerHeight <= 600, e || i
//         },
//         makechanges: function(e) {
//             e = e.replace(/<img .*?>/gi, "");
//             jQuery("#sliderHTML").html(e)
//         },
//         init: function() {
//             jQuery("#pagehone").remove();
//             this.mobileCheck() ? this.makechanges(homepageSliderDOM) : jQuery("#sliderHTML").html(homepageSliderDOM);
//         }
//     }.init();
    var e = jQuery("#sliderHTML");
    e.length && e.slick({
        dots: !0,
        infinite: !0,
        speed: 300,
        slidesToShow: 1,
        autoplay: !0,
        arrows: !0,
        autoplaySpeed: 3e3,
        adaptiveHeight: !0,
        prevArrow: '<span class="slider-prev"><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="slider-next"><i class="fa fa-angle-right"></i></span>'
    });
// }


//blog footer slider
if(jQuery('.slider-blog-post').length){
    var slider_single_image = jQuery('.slider-blog-post');
    if (slider_single_image.length) {
      //select box
        slider_single_image.slick({
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        autoplay: true,
        arrows: true,
        autoplaySpeed: 3000,
        adaptiveHeight: true    
    });
  }
}


//blog comments
if(isUserLogin){ 
    // console.log("userlog", isUserLogin);
    var validationRules = {
        author: {
            required: true,
            minlength: 2
        },
        email: {
            required: true,
            email: true
        },
        comment: {
            required: true,
            minlength: 1
        },
        comment_captcha_code: {
            required: true,
            minlength: 4
        }
    };
    var validationMessages = {
        author: "Please fill the required field",
        email: "Please enter a valid email address.",
        comment: "Please fill the required field"
    };
} else { 
    var validationRules = {
        comment: {
            required: true,
            minlength: 1
        }
    };
    var validationMessages = {
        comment: "Please fill the required field"
    };
} 
jQuery("#comment_captcha_code").focus(function(){
    jQuery("#incorrect_form_captcha").hide();
});
        var script = document.createElement("script");
                script.type = "text/javascript";
                script.charset = "utf-8";
                script.async = true;
                script.src = "https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js";
                script.onload = function(){
                    jQuery('#commentform').validate({
                        rules: validationRules,
                        messages: validationMessages,
                        submitHandler: function (form) {
                            //check if captcha is correct
                            jQuery.ajax({
                                url: admin_ajax,
                                type: 'post',
                                data: { 
                                        action: 'checkCommentCaptcha',
                                        comment_captcha_prefix: jQuery("#comment_captcha_prefix").val(),
                                        comment_captcha_code: jQuery("#comment_captcha_code").val()
                                    },
                                success: function(data) {
                                    if(data == "correct"){
                                        jQuery('#commentform input[type=submit]').prop("disabled",true);
                                        form.submit();    
                                    } else {
                                        jQuery("#incorrect_form_captcha").show();
                                    }
                                }
                            });
                        },
                        errorElement: "div",
                        errorPlacement: function (error, element) {
                            element.after(error);
                        }

                    });                    
                };
                document.body.appendChild(script);



        

//tweet simple quote
        if(jQuery('.simplePullQuote').length){
          jQuery('.simplePullQuote').each(function(){
            var blockQuote = jQuery(this).find('p').text().trim();
            var tweetLink = 'https://twitter.com/intent/tweet?text='+ encodeURIComponent(blockQuote)+'&via=GrowByData&url='+window.location.href;
            jQuery(this).append("<a href="+tweetLink+" target='_blank' class='tweeter-ad'>Tweet this</a>");
          });
        }


//pricing solution page
jQuery(".collapse.show").each(function(){
          jQuery(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        jQuery(".collapse").on('show.bs.collapse', function(){
          jQuery(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
          jQuery(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
        
   jQuery(document).on('click', '.accordion-toggle', function(event) {
          event.stopPropagation();
          var $this = jQuery(this);

          var parent = $this.data('parent');
          var actives = parent && jQuery(parent).find('.collapse.in');

          // From bootstrap itself
          if (actives && actives.length) {
              hasData = actives.data('collapse');
              //if (hasData && hasData.transitioning) return;
              actives.collapse('hide');
          }

          var target = $this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, ''); //strip for ie7

          jQuery(target).collapse('toggle');
        });




/* 
*
  Reports page slider 
*
*/
jQuery('.slider-single').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    adaptiveHeight: true,
    infinite: false,
    useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    arrows: false
});

 jQuery('.slider-nav')
    .on('init', function(event, slick) {
        jQuery('.slider-nav .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
        slidesToShow: 3,
        rows: 1,
        slidesToScroll: 1,
        dots: false,
        focusOnSelect: false,
        infinite: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        }, {
            breakpoint: 640,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        }, {
            breakpoint: 420,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
        }
        }]
    });

 jQuery('.slider-single').on('afterChange', function(event, slick, currentSlide) {
    jQuery('.slider-nav').slick('slickGoTo', currentSlide);
    var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
    jQuery('.slider-nav .slick-slide.is-active').removeClass('is-active');
    jQuery(currrentNavSlideElem).addClass('is-active');
 });

 jQuery('.slider-nav').on('click', '.slick-slide', function(event) {
    event.preventDefault();
    var goToSingleSlide = jQuery(this).data('slick-index');

    jQuery('.slider-single').slick('slickGoTo', goToSingleSlide);
 });
/* 
*
  Report page slider 
*
*/


/* 
*
template-repricing.php and template-why-us.php and template-cia.php
*
*/

  // Add minus icon for collapse element which is open by default
        jQuery(".collapse.show").each(function(){
          jQuery(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
      });
        
        // Toggle plus minus icon on show hide of collapse element
        jQuery(".collapse").on('show.bs.collapse', function(){
          jQuery(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
      }).on('hide.bs.collapse', function(){
          jQuery(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
      });

      jQuery(document).on('click', '.accordion-toggle', function(event) {
          event.stopPropagation();
          var $this = jQuery(this);

          var parent = $this.data('parent');
          var actives = parent && jQuery(parent).find('.collapse.in');

          // From bootstrap itself
          if (actives && actives.length) {
              hasData = actives.data('collapse');
              //if (hasData && hasData.transitioning) return;
              actives.collapse('hide');
          }

          var target = $this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, ''); //strip for ie7

          jQuery(target).collapse('toggle');
      });

/* 
*
repricing template
*
*/

/* 
*
template-our-pricing.php
*
*/
function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    var pricingDatas = [
      {'sku':1000,'Monthly':159,'Weekly':199,'Daily':699},
      {'sku':5000,'Monthly':349,'Weekly':399,'Daily':1299},
      {'sku':10000,'Monthly':549,'Weekly':649,'Daily':2699},
      {'sku':25000,'Monthly':1249, 'Weekly':1499,'Daily':5599},
      // {'sku':25000, 'Monthly':849,'Bi-Weekly':999,'Weekly':1399,'Daily':5599},
      // {'sku':100000, 'Monthly':1599,'Bi-Weekly':1999,'Weekly':2599,'Daily':10999},
    ]
    jQuery(document).ready(function($){
        $("#noSkus, #refreshFreq").change(function(){
            String.prototype.replaceAll = function(search, replacement) {
                var target = this;
                return target.split(search).join(replacement);
            };
            var sku = $("#noSkus").val().replaceAll(",","");
            if(sku == ">25000"){
              var html = '<div class="price-report-result gbd-custom-quote">' + 
                                '<div class="price-report-result-note">Please complete the <span>"Get a Free Quote"</span> form to <br> get a custom price quote customized to your needs.</div>'+
                              '</div>';   
                    $("#price-report-result-block").html(html);
            } else {
                var freq = $("#refreshFreq").val();
              if(freq != "Select One" && sku != "Select One"){
                for(var i = 0; i < pricingDatas.length; i++){
                  if(pricingDatas[i].sku == sku){
                    var price = pricingDatas[i][freq];
                    // console.log(price);
                    var html = '<div class="price-report-result">' + 
                                '<b>Your quick estimate:</b><br>' +
                                '<div class="price-report-result-price">$'+ numberWithCommas(price) +'/Month' +'</div>' +
                                '<div class="price-report-result-note">Please complete the "Get a Free Quote" form to <br> get a custom price quote customized to your needs.</div>'+
                              '</div>';   
                    $("#price-report-result-block").html(html);
                  }
                }
              } else {
                $("#price-report-result-block").html('<p style="text-align: center;">Indicate your requirements <br> above...</p>');
              }
            }
        });
    });
if(sessionStorage.getItem("hubspotsuccessMessage") != null){
jQuery("#get_free_quote").prepend("<div class='hubspotsuccessMessage'>"+sessionStorage.getItem("hubspotsuccessMessage")+"</div>");
sessionStorage.removeItem("hubspotsuccessMessage");
}
/* 
*
template-our-pricing.php
*/


/*
*
content-single-col1.php
*
*/
if(jQuery(".gbd-blog-article-titles").length){
    jQuery(window).scroll(function() {
       if(jQuery(window).scrollTop() > jQuery(".gbd-blog-article-titles").position().top){
          jQuery(".gbd-download-PDF").show();
       } else {
          jQuery(".gbd-download-PDF").hide();
       }
    });
}

/*
*
content-single-col1.php
*
*/