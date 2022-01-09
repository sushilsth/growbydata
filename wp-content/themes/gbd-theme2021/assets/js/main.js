define(["jquery","bootstrap","lazyload","jquerymatchHeight"], function(jQuery,_,LazyLoad) {
    // console.log('Main.js Working');
    /*
     * Custom js
     */
    jQuery(document).ready( function() {
        jQuery('.carousel').carousel({
            interval: false
        })
        jQuery('.carousel').on('slid.bs.carousel', function () {
            var current_index = jQuery('.carousel-item.active').index();
            var tab_selector='#sliderTabs .nav li:eq('+ current_index +')';
            jQuery('.nav li').removeClass('active');
            jQuery(tab_selector).addClass('active');
        })
        // jQuery(".gbd-home-insights .brand-nav").hover(function(){
        //     jQuery(this).find('.get-ready-tab').tab('show')
        // });

        var video_url = jQuery("#videoModal iframe").attr('src');
        jQuery("#videoModal").on('hide.bs.modal', function(){
            jQuery("#videoModal iframe").attr('src', '');
        });
        
        jQuery("#videoModal").on('show.bs.modal', function(){
            if(!jQuery("#videoModal iframe").attr('src') ){
                jQuery("#videoModal iframe").attr('src', video_url);
            }
        });
       
        // custom JS for navigation hover menu
        $(".dropdown").hover(function(){
            var dropdownMenu = $(this).children(".dropdown-menu");
            if(dropdownMenu.is(":visible")){
                dropdownMenu.parent().toggleClass("open");
            }
        });

        //remove click from navigation
        // function checkmbl() {
        //     var i = !1;
        //     return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) && (i = !0), i
        // }
        // if (!checkmbl()) {
        //   $('.navbar-collapse ul#menu-main_menu_new > li > a').attr('href','javascript:void(0);');
        //   $('.navbar-collapse ul#menu-main_menu_new > li > a').click(function(e) {
        //       e.stopPropagation();
        //   });
        // }

        // custom JS for mobile footer navigation
        $('footer .row > div > strong').click(function(){
            $(this).next().toggleClass('show'); 
        });

        //tweet simple quote
        if(jQuery('.simplePullQuote').length){
          jQuery('.simplePullQuote').each(function(){
            var blockQuote = jQuery(this).find('p').text().trim();
            var tweetLink = 'https://twitter.com/intent/tweet?text='+ encodeURIComponent(blockQuote)+'&via=GrowByData&url='+window.location.href;
            jQuery(this).append("<a href="+tweetLink+" target='_blank' class='tweeter-ad'>Tweet this</a>");
          });
        }

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

        // match height blog post jquery library
        $('.gbd-featured-blog-block').each(function() {
            //console.log($(this).children('article'));
            $(this).children('article').matchHeight({                
            });
        });


        //search blog
        
   jQuery(document).ready(function () {
        jQuery('.search-toggle').click(function () {

            jQuery('.search-bar').toggle('slide');
            jQuery('.search-toggle i').toggle();
            jQuery("#header_search_result").html("");
            setTimeout(function(){
                jQuery('.searchbox-input').focus();
            },1500);
            
        });   

        jQuery('input[type=search]').on('search', function () {
          jQuery("#header_search_result").html("");
        });   

    });

   jQuery(document).on("click",".suggestion_keyword",function(){
        jQuery('.searchbox-input').val(jQuery(this).text());
   })

        //GBD FAQ SCHEMA: Start
        var gbd_faq ={
            data : {
                    '@context': 'https://schema.org',
                    '@type': 'FAQPage',
                    "mainEntity":[]                        
                },
            prepare: function(){
                    var final_faq = [];
                    var faq = jQuery('.gbd-accordin .accordion .card');
                    faq.each(function() {
                        var question= jQuery(this).find('.card-header h2 button').text().trim();
                        var answer= jQuery(this).find('.card-body').html().trim();  
                        if(question && answer){
                            var faqs = {
                                "@type": "Question",
                                "name": question,
                                "acceptedAnswer":{
                                    "@type": "Answer",
                                    "text": answer
                                }                    
                            };
                            final_faq.push(faqs);
                        }              
                    });
                    this.data["mainEntity"]=final_faq;
                },

            render: function(){
                var obj = this;
                jQuery('#gbd-faq').text(JSON.stringify(obj.data));
                // console.log(JSON.stringify(obj.data));
            },
            init: function() {
                var obj = this;
                if(jQuery('.gbd-accordin').length) 
                    {
                        obj.prepare();
                        obj.render();
                    }
            }
        };
        gbd_faq.init();
        //GBD FAQ SCHEMA: END

    });

    //lazy load script
    var ll = new LazyLoad({
      elements_selector: ".lazyload img, .lazy"
    }); 

    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    function myFunction() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      if(document.getElementById("gbd-Bar"))
            document.getElementById("gbd-Bar").style.width = scrolled + "%";
    }

    jQuery(document).on("click",".suggestion_keyword",function(){
        jQuery('.searchbox-input').val(jQuery(this).text());
   })
   
   // search functionality
    var searchRequest = null;
    jQuery('input[name="s"]').on("keyup", function(){
        if(jQuery(this).val() == ""){
          jQuery("#header_search_result").html("");
          return false;
        }
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

});

    jQuery("#gbd_opening_job").click(function(){
        jQuery(window).scrollTop(jQuery(".overview-career").offset().top - jQuery(".site-header").height());
    });

//solution page
jQuery(".collapse.show").each(function(){
          jQuery(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        }

        ); 
        
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

jQuery(".collapse.show").each(function(){

          jQuery(this).prev(".card-header").find(".fas").addClass("fa-arrow-circle-up").removeClass("fa-arrow-circle-down");
        });
if(typeof accordionstr != "undefined") {
jQuery(".accordion-collaspe").addClass("show");
}
        
        // Toggle plus minus icon on show hide of collapse element
        jQuery(".collapse").on('show.bs.collapse', function(){
          jQuery(this).prev(".card-header").find(".fas").removeClass("fa-arrow-circle-down").addClass("fa-arrow-circle-up");
        }).on('hide.bs.collapse', function(){
          jQuery(this).prev(".card-header").find(".fas").removeClass("fa-arrow-circle-up").addClass("fa-arrow-circle-down");
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

    jQuery('#myModal').on('show.bs.modal', function (e) {
                        var $invoker = jQuery(e.relatedTarget);
                        var link = $invoker.parents(".gbd-infographics-block").find(".Whitepaper-pdf-download-links").text().trim();
                        var title = $invoker.parents(".gbd-infographics-block").find(".Whitepaper-pdf-title").text().trim();
                        Whitepaperlink = link;
                        WhitepaperTitle = title;
                      });

   // youtube video autoplay in the homepage
    jQuery(window).scroll(function() {
      if (window.location.pathname == '/') {
  if (checkmbl()){
               var tag = document.createElement('script');
              tag.async = true;
              tag.src = "https://www.youtube.com/iframe_api";
              var firstScriptTag = document.getElementsByTagName('script')[0];
              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
              console.log("youtube base..");
            }
          if( jQuery(window).scrollTop() > jQuery('.video-wrapper').offset().top - 400) {
              
              if (!checkmbl()){
                  var cc = 0;
                  var youtubeplayerhomepage = setInterval(function(){
                  cc++;
                  if (typeof player !== "undefined" && player.hasOwnProperty('getPlayerState')){
                      clearInterval(youtubeplayerhomepage);
                              if( jQuery(window).scrollTop() > jQuery('.video-wrapper').offset().top - 400) {
                                      if(player.getPlayerState() == 5) {
                                        player.mute();                
                                        player.playVideo();
                                      }
                                    }
                    }
                    if(cc > 100){
                        clearInterval(youtubeplayerhomepage);
                      }
                  },100);
            } else {
         

              var cc = 0;
                  var youtubeplayerhomepage = setInterval(function(){
                  cc++;
                  if (typeof player !== "undefined" && player.hasOwnProperty('getPlayerState')){
                      clearInterval(youtubeplayerhomepage);
                              if( jQuery(window).scrollTop() > jQuery('.video-wrapper').offset().top - 400) {
                                      if(player.getPlayerState() == 5) {
                                        player.mute();                
                                        player.playVideo();
                                      }
                                    }
                    }
                    if(cc > 100){
                        clearInterval(youtubeplayerhomepage);
                      }
                  },100);

            }
          }
        }

  });

/*
function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

jQuery(document).on("click","form[action^='https://forms.hsforms.com'] input[type=submit]", function(){
    if(validateEmail(jQuery("form[action^='https://forms.hsforms.com'] input[type=email]").val().trim())){
    dataLayer.push({
        "gdbhubspotemail": jQuery("form[action^='https://forms.hsforms.com'] input[type=email]").val().trim()
    });
    }
});
*/


 // function checkmbl(){var i=!1;return(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))&&(i=!0),i}

 //    if(checkmbl()){
 //    //footer
 //    var orientations = window.innerWidth > window.innerHeight ? "Landscape" : "Portrait";
 //    if(orientations=="Portrait"){
 //      jQuery("footer .menu-col").eq(2).after(jQuery("footer .menu-col").eq(5));
 //      jQuery("footer .menu-col").eq(3).after(jQuery("footer .menu-col").eq(6));
 //    } else{
 //      if(window.innerWidth<=767){
 //        jQuery("footer .menu-col").eq(2).after(jQuery("footer .menu-col").eq(5));
 //      jQuery("footer .menu-col").eq(3).after(jQuery("footer .menu-col").eq(6));
 //      }
 //    }
    

 //    function getOrientation(){
 //    var orientationss = window.innerWidth > window.innerHeight ? "Landscape" : "Portrait";
 //    console.log(orientation);
 //    if(window.innerWidth>767 && orientationss == "Landscape"){
 //        jQuery("footer .menu-col").eq(2).after(jQuery("footer .menu-col").eq(5));
 //        jQuery("footer .menu-col").eq(3).after(jQuery("footer .menu-col").eq(6));
 //    }
 //    }

 //     window.onresize = function(){ getOrientation(); }

 //  }