define(["jquery","bootstrap","lazyload","slickslider","matchheight","jqueryvalidate"],function(e,t,s){function o(){var e=document.body.scrollTop||document.documentElement.scrollTop,t=document.documentElement.scrollHeight-document.documentElement.clientHeight,s=e/t*100;document.getElementById("gbd-Bar")&&(document.getElementById("gbd-Bar").style.width=s+"%")}function l(e){return e.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}!function(t){t(document).ready(function(){t(".data-bg").each(function(e){t(this).attr("data-background")&&t(this).css("background-image","url("+t(this).data("background")+")")}),t(".background-src").each(function(){var e=t(this).children("img").attr("src");t(this).css("background-image","url("+e+")").children("img").hide()}),t(".background").each(function(){var e=t(this).children("img").attr("src");t(this).css("background-image","url("+e+")").children("img").hide()}),t("#freeTrial, #careerContactform, #gbdCareer").on("show.bs.modal",function(e){t("body").addClass("pad0")}),t(".main-slider").slick({slidesToShow:4,slidesToScroll:1,autoplay:!0,autoplaySpeed:8e3,infinite:!0,nextArrow:'<i class="navcontrol-icon slide-next la la-angle-right"></i>',prevArrow:'<i class="navcontrol-icon slide-prev la la-angle-left"></i>',dots:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:2}},{breakpoint:767,settings:{slidesToShow:1,arrows:!1}}]}),t(".gallery-columns-1").each(function(){t(this).slick({slidesToShow:1,slidesToScroll:1,fade:!0,autoplay:!0,autoplaySpeed:8e3,infinite:!0,nextArrow:'<i class="navcontrol-icon slide-next la la-angle-right"></i>',prevArrow:'<i class="navcontrol-icon slide-prev la la-angle-left"></i>',dots:!0})}),t('a[href*="scroll-down"]').bind("click",function(){var t=e("div.container a#scroll-down"),s=e("html,body"),o=t.offset().top-s.offset().top;if(!navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i))var o=t.offset().top-s.offset().top-130;s.animate({scrollTop:o,scrollLeft:0},600)}),t(".signupbtn").click(function(){t("html, body").animate({scrollTop:t("#landing-wrapper").position().top},"slow")})}),window.matchMedia("(max-width: 767px)").matches&&(t(".slideToggler2").click(function(){return t(".slideContent2").slideToggle("slow"),t(this).toggleClass("slideSign2"),!1}),t(".collaps2").click(function(){return t(".slideContent2").slideToggle("slow"),t(".slideToggler2").toggleClass("slideSign2"),!1}),t(document).on("click",".slideToggler1",function(){return t(".slideContent1").slideToggle("slow"),t(this).toggleClass("slideSign2"),!1}),t(".collaps2").click(function(){return t(".slideContent1").slideToggle("slow"),t(".slideToggler1").toggleClass("slideSign2"),!1})),t(".gbd-top-btn").click(function(){t(this).toggleClass("active")}),t(".gbd-nav .nav .menu-item-has-children").click(function(){t(this).toggleClass("active")}),t(window).scroll(function(){t(".amazon-sale .container div, .cat-block .info-box.greek-logo, .gbd-inti .btm-content .info-box.schuler-logo").each(function(){t(this).offset().top<t(window).scrollTop()+700&&t(this).addClass("slideLeft")}),t(".google-sale .container div, .cat-block .info-box.schuler-logo, .gbd-inti .btm-content .info-box.greek-logo ").each(function(){t(this).offset().top<t(window).scrollTop()+700&&t(this).addClass("slideRight")}),t(".gbd-data-serv .btm-content .data-case").each(function(){t(this).offset().top<t(window).scrollTop()+700&&t(this).addClass("slideExpandUp")}),t(document).scrollTop()>50?(t(".navbar-default").addClass("shrink"),t("header").next().removeClass("gbd-space")):(t(".navbar-default").removeClass("shrink"),t("header").next().addClass("gbd-space"))});e("#gbd_opening_job").click(function(){e(window).scrollTop(e(".overview-career").offset().top-e(".navbar-default").height())}),e("ul#menu-main_menu_new > li").hover(function(){e("ul#menu-main_menu_new > li").removeClass("eci-menu-hover"),e(this).addClass("eci-menu-hover")},function(){})}(e),window.onscroll=function(){o()},e(document).ready(function(){e(".search-toggle").click(function(){e(".search-bar").toggle("slide"),e(".search-toggle i").toggle(),setTimeout(function(){e(".searchbox-input").focus()},1500)})}),e(document).on("click",".suggestion_keyword",function(){e(".searchbox-input").val(e(this).text())}),e.ajax({url:admin_ajax,type:"get",data:{action:"getCountry"},success:function(e){if("nepal"!==e.toLowerCase()&&"https://growbydata.com/"==window.location.href)var t=setTimeout(function(){clearTimeout(t);var e=document.createElement("script");e.type="text/javascript",e.id="hs-script-loader",e.async=!0,e.src="//js.hs-scripts.com/5372895.js",document.body.appendChild(e)},3e3)}});setTimeout(function(){e("#GBDleaderBlock").html('<div class="gbd-leaders"> <div class="container"> <div class="row"> <span class="gbd-allcaps gbd-niche slideToggler1 slideSign2">Trusted By Leading Online Retailers and Agencies</span> <section class="customer-logos slider"> <div class="slide"><div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/century-21-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/century-21-logo.png" alt="century-21-logo"/> </picture> </span></div></div><div class="slide"><div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/american-muscle-ford.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/american-muscle-ford.png" alt="american-muscle"/> </picture> </span></div></div><div class="slide"><div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/barneys-new-york-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/barneys-new-york-logo.png" alt="barneys-new-york-logo"/> </picture> </span></div></div><div class="slide"><div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/greek-gear.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/greek-gear.png" alt="totalretail"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/neiman-marcus-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/neiman-marcus-logo.png" alt="neiman-marcus"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/dollar-general-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/dollar-general-logo.png" alt="dollar-general-logo"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/skygeek-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/skygeek-logo.png" alt="skygeek-logo"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/rrs-logo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/rrs-logo.png" alt="rrs-logo"/> </picture> </span></div></div><div class="slide"> <div class="slide-item"><span> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/sourceorthologo.png.webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png"/> <img src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/07/logo_gbd_placeholder.png" data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2020/06/sourceorthologo.png" alt="sourceortho"/> </picture> </span></div></div></section> </div></div></div>'),e("#GBDSuccessStories").html('<div class="gbd-success-stories"> <div class="container"> <div class="row"> <strong>Success stories</strong><div class="gbd-success-section"> <div class="testimonial col-md-6"> <div class="testi_content"> <p class="testi_description"> “We get 360 degree visibility on our competitive landscape across channels enabling us to drive better strategy.” </p></div><div class="testimonial-pic"> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial4-1.png.webp"> <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial4-1.png" alt="CEO"> </picture> </div><div class="testimonial-review"> <h3 class="testimonial-title">CEO </h3> <span>Multi-Category Apparel Retailer </span> </div></div><div class="testimonial col-md-6"> <div class="testi_content"> <p class="testi_description"> “Amazon sales literally grew 100% YoY, in 30 days, after upgrading from Amazon’s free repricer to GBD” </p></div><div class="testimonial-pic"> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial3-1.png.webp"> <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial3-1.png" alt="VP of Ecommerce, North America"> </picture> </div><div class="testimonial-review"> <h3 class="testimonial-title">VP of Ecommerce, North America </h3> <span>Leading Music Products Retailer </span> </div></div><div class="testimonial col-md-6"> <div class="testi_content"> <p class="testi_description"> “We learned we were underpriced by more than 8% on 30% of our catalog. We RAISED prices and boosted margins without impacting sales.” </p></div><div class="testimonial-pic"> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial2-2.png.webp"> <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial2-2.png" alt="CFO"> </picture> </div><div class="testimonial-review"> <h3 class="testimonial-title">CFO </h3> <span>Large B2B Equipment Retailer </span> </div></div><div class="testimonial col-md-6"> <div class="testi_content"> <p class="testi_description"> “After shifting Google Shopping budget to today’s “cheapest” items we saw an immediate 27% lift in RoAS” </p></div><div class="testimonial-pic"> <picture class="lazyload"> <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial1-2.png.webp"> <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/uploads/2019/05/testimonial1-2.png" alt="VP of Marketing"> </picture> </div><div class="testimonial-review"> <h3 class="testimonial-title">VP of Marketing </h3> <span>Leading Apparel Brand </span> </div></div></div></div></div></div>');var t=new s({elements_selector:".lazyload img, .lazy"});e(".customer-logos").on("afterChange",function(e){t.update()}),e(".customer-logos").slick({slidesToShow:5,slidesToScroll:1,autoplay:!0,autoplaySpeed:1500,arrows:!1,dots:!1,pauseOnHover:!1,responsive:[{breakpoint:1030,settings:{slidesToShow:3,slidesToScroll:4,infinite:!0}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})},3e3);var i={action:"ad_intelligence_insights_form"};e("#ad-intelligence-insights").on("shown.bs.modal",function(t){e.get(admin_ajax,i,function(t){0==e("#Ad-Intelligence-Sign-up-Form").html().length&&(e("#Ad-Intelligence-Sign-up-Form").html(t),e("#ad-intelligence-insights-loading").remove())})});var a=null;e('input[name="s"]').on("keyup",function(){null!=a&&a.abort(),a=e.ajax({url:admin_ajax,type:"GET",data:{action:"data_fetch",query:e(this).val()},success:function(t){var s="",t=JSON.parse(t);t.keywords&&t.keywords.forEach(function(e){s+='<li class="suggestion_keyword"><a href="javascript:void(0);">'+e.keyword+"</a></li>"}),t.posts&&t.posts.forEach(function(e){s+='<li class="suggestion_keyword"><a href="'+e.post_link+'">'+e.post_title+"</a></li>"}),e("#header_search_result").html(s)}})}),e(document).on("click",".suggestion_keyword",function(){e("#header_search_result").hide()});var n=e("#sliderHTML");if(n.length&&n.slick({dots:!0,infinite:!0,speed:300,slidesToShow:1,autoplay:!0,arrows:!0,autoplaySpeed:3e3,adaptiveHeight:!0,prevArrow:'<span class="slider-prev"><i class="fa fa-angle-left"></i></span>',nextArrow:'<span class="slider-next"><i class="fa fa-angle-right"></i></span>'}),e(".slider-blog-post").length){var c=e(".slider-blog-post");c.length&&c.slick({infinite:!0,speed:1e3,slidesToShow:1,autoplay:!0,arrows:!0,autoplaySpeed:3e3,adaptiveHeight:!0})}if(isUserLogin)var r={author:{required:!0,minlength:2},email:{required:!0,email:!0},comment:{required:!0,minlength:1},comment_captcha_code:{required:!0,minlength:4}},d={author:"Please fill the required field",email:"Please enter a valid email address.",comment:"Please fill the required field"};else var r={comment:{required:!0,minlength:1}},d={comment:"Please fill the required field"};e("#comment_captcha_code").focus(function(){e("#incorrect_form_captcha").hide()}),e("#commentform").validate({rules:r,messages:d,submitHandler:function(t){e.ajax({url:admin_ajax,type:"post",data:{action:"checkCommentCaptcha",comment_captcha_prefix:e("#comment_captcha_prefix").val(),comment_captcha_code:e("#comment_captcha_code").val()},success:function(s){"correct"==s?(e("#commentform input[type=submit]").prop("disabled",!0),t.submit()):e("#incorrect_form_captcha").show()}})},errorElement:"div",errorPlacement:function(e,t){t.after(e)}}),e(".simplePullQuote").length&&e(".simplePullQuote").each(function(){var t=e(this).find("p").text().trim(),s="https://twitter.com/intent/tweet?text="+encodeURIComponent(t)+"&via=GrowByData&url="+window.location.href;e(this).append("<a href="+s+" target='_blank' class='tweeter-ad'>Tweet this</a>")}),e(".collapse.show").each(function(){e(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus")}),e(".collapse").on("show.bs.collapse",function(){e(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus")}).on("hide.bs.collapse",function(){e(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus")}),e(document).on("click",".accordion-toggle",function(t){t.stopPropagation();var s=e(this),o=s.data("parent"),l=o&&e(o).find(".collapse.in");l&&l.length&&(hasData=l.data("collapse"),l.collapse("hide"));var i=s.attr("data-target")||(href=s.attr("href"))&&href.replace(/.*(?=#[^\s]+$)/,"");e(i).collapse("toggle")}),e(".slider-single").slick({slidesToShow:1,slidesToScroll:1,arrows:!0,fade:!1,adaptiveHeight:!0,infinite:!1,useTransform:!0,speed:400,cssEase:"cubic-bezier(0.77, 0, 0.18, 1)",arrows:!1}),e(".slider-nav").on("init",function(t,s){e(".slider-nav .slick-slide.slick-current").addClass("is-active")}).slick({slidesToShow:3,rows:1,slidesToScroll:1,dots:!1,focusOnSelect:!1,infinite:!1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:640,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:420,settings:{slidesToShow:1,slidesToScroll:1}}]}),e(".slider-single").on("afterChange",function(t,s,o){e(".slider-nav").slick("slickGoTo",o);var l='.slider-nav .slick-slide[data-slick-index="'+o+'"]';e(".slider-nav .slick-slide.is-active").removeClass("is-active"),e(l).addClass("is-active")}),e(".slider-nav").on("click",".slick-slide",function(t){t.preventDefault();var s=e(this).data("slick-index");e(".slider-single").slick("slickGoTo",s)}),e(".collapse.show").each(function(){e(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus")}),e(".collapse").on("show.bs.collapse",function(){e(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus")}).on("hide.bs.collapse",function(){e(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus")}),e(document).on("click",".accordion-toggle",function(t){t.stopPropagation();var s=e(this),o=s.data("parent"),l=o&&e(o).find(".collapse.in");l&&l.length&&(hasData=l.data("collapse"),l.collapse("hide"));var i=s.attr("data-target")||(href=s.attr("href"))&&href.replace(/.*(?=#[^\s]+$)/,"");e(i).collapse("toggle")});var p=[{sku:1e3,Monthly:159,Weekly:199,Daily:699},{sku:5e3,Monthly:349,Weekly:399,Daily:1299},{sku:1e4,Monthly:549,Weekly:649,Daily:2699},{sku:25e3,Monthly:1249,Weekly:1499,Daily:5599}];e(document).ready(function(e){e("#noSkus, #refreshFreq").change(function(){String.prototype.replaceAll=function(e,t){return this.split(e).join(t)};var t=e("#noSkus").val().replaceAll(",","");if(">25000"==t){var s='<div class="price-report-result gbd-custom-quote"><div class="price-report-result-note">Please complete the <span>"Get a Free Quote"</span> form to <br> get a custom price quote customized to your needs.</div></div>';e("#price-report-result-block").html(s)}else{var o=e("#refreshFreq").val();if("Select One"!=o&&"Select One"!=t){for(var i=0;i<p.length;i++)if(p[i].sku==t){var a=p[i][o],s='<div class="price-report-result"><b>Your quick estimate:</b><br><div class="price-report-result-price">$'+l(a)+'/Month</div><div class="price-report-result-note">Please complete the "Get a Free Quote" form to <br> get a custom price quote customized to your needs.</div></div>';e("#price-report-result-block").html(s)}}else e("#price-report-result-block").html('<p style="text-align: center;">Indicate your requirements <br> above...</p>')}})}),null!=sessionStorage.getItem("hubspotsuccessMessage")&&(e("#get_free_quote").prepend("<div class='hubspotsuccessMessage'>"+sessionStorage.getItem("hubspotsuccessMessage")+"</div>"),sessionStorage.removeItem("hubspotsuccessMessage")),e(".gbd-blog-article-titles").length&&e(window).scroll(function(){e(window).scrollTop()>e(".gbd-blog-article-titles").position().top?e(".gbd-download-PDF").show():e(".gbd-download-PDF").hide()});new s({elements_selector:".lazyload img, .lazy"})});