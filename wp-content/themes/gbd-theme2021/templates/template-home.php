<?php
/*
Template Name: Home Template
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<section>
  <!-- GBD Static Banner -->
  <div class="bg_cover-banner text-white">
    <?php the_field('home_page_slider'); ?>
  </div>
</section>
<!-- GBD Static Banner -->

<div class="clear"></div>
<!-- Video Section-->
<section>
  <div class="col-md-12">
    <h2 class="text-center pt-5 font-weight-bold"><?php the_field('title'); ?>
  </h2>
</div>

  <div class="container text-center">

<div class="video-wrapper mb-3 mt-5 mx-auto">

  <?php 
    $videolink = get_post_meta(get_the_ID(), 'video-field', TRUE);
    $finalvalue = trim(parse_url($videolink, PHP_URL_QUERY));
    parse_str ( $finalvalue , $output );
    //parse_str($finalvalue);
  ?>
  <div id="player"></div>
</div>

  <h2 class="text-centerfont-weight-bold"></h2>
<!--     <a href="#videoModal" class="btn btn-primary btn-lg" data-toggle="modal">Launch Video</a>
-->

</div>
<!-- <div id="videoModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            
            <div class="modal-body">
             
            </div>
        </div>
    </div>
  </div> -->
</section>
<!--END of  Video Section-->

<!-- <section>
  <div class="container bg_cover">
   <p class="text-center pb-3"> <?php //the_field('description'); ?></p>
</div>
</section> -->

<?php if( have_rows('home_page_slider_tabs') ): ?>
  <!-- TAbbed Section-->
  <?php 
  $slider_tabs =[];
  while( have_rows('home_page_slider_tabs') ){
    the_row(); 
    $slider_tabs[]=[
            // 'image' => get_sub_field('slider_image'),
      'title'=>get_sub_field('title'),
      'url'=>get_sub_field('url'),
      'description_top'=>get_sub_field('description_top'),
      'description_bottom'=> get_sub_field('description_bottom'),
      'svg-image'=>get_sub_field('svg-image'),

    ];
  }
  ?>
  <section class="pb-150 pt-150">
    <div class="gbd-home-insights-drive">
      <div class="container">
        <h2 class="text-center font-weight-bold gbd-home-title col-md-6">Insights that Drive Action</h2>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="panel">
              <div id="sliderTabs" class="carousel slide" data-ride="carousel">
                <div class="panel-heading">
                  <!-- Tabs -->

                  <ul class="nav panel-tabs">
                    <?php foreach($slider_tabs as $key=>$slider_tab):?>
                      <?php
                      $active_class ='';   
                      if($key==0)
                        $active_class = 'active';
                      ?>
                      <li class="<?=$active_class?>" data-target="#sliderTabs" data-slide-to="<?=$key?>"><a href="#insights<?=$key?>"><?=$slider_tab['title']?></a></li>
                    <?php endforeach;?>
                  </ul>
                </div>
                <div class="panel-body carousel-inner">
                  <?php foreach($slider_tabs as $key=>$slider_tab):?>
                    <?php
                    $active_class ='';   
                    if($key==0)
                      $active_class = 'active';
                    ?>
                    <div class="carousel-item <?=$active_class?>" id="insights<?=$key?>">
                      <div class="row">
                        <div class="col-md-7 col-sm-12  align-self-center">
                          <div class="gbd-home-insights-lt text-center">
                                              <!--           <?php //if( isset($slider_tab['image']['url'])): ?>
                                                            <img src="<?=$slider_tab['image']['url']?>"
                                                            alt="<?=$slider_tab['image']['alt']?>" class="" >
                                                            <?php //endif; ?> -->

                                                            <div class="gbd-home-insights-svg">
                                                             <?=$slider_tab['svg-image']?>

                                                           </div> 
                                                         </div>
                                                       </div>
                                                       <div class="col-md-5 col-sm-12  align-self-center">
                                                        <div class="gbd-home-insights-rt">
                                                          <p class="text-center font-weight-bold"><?=$slider_tab['description_top']?></p>
                                                          <div class="gbd-home-insights-talk">
                                                            <span><img
                                                              src="<?php echo get_template_directory_uri()?>/assets/images/bulb-img.png"
                                                              alt="bulb-img"> </span>
                                                              <div class="gbd-home-insights-talk-cnt">
                                                                <p class="text-center"><?=$slider_tab['description_bottom']?></p>

                                                                <a class="orange_btn text-center" href="<?php echo site_url('/talk-to-expert'); ?>">Talk to an Expert</a>

                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  <?php endforeach;?>

                                                </div>
                                                <div class="panel-footer">
                                                  <ul style="text-align:center" class="carousel-indicators">
                                                    <?php foreach($slider_tabs as $key=>$slider_tab):?>
                                                      <?php
                                                      $active_class ='';   
                                                      if($key==0)
                                                        $active_class = 'active';
                                                      ?>
                                                      <li class="<?=$active_class?>" data-slide-to="<?=$key?>" data-target="#sliderTabs">

                                                      </li>
                                                    <?php endforeach; ?>
                                                  </ul>
                                                </div> 
                                              </div>
                                            </div>       
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </section>
                                  <!-- END Tabbed Section-->
                                <?php endif; ?>


                                <!-- GET Ready section -->
                                <?php if( have_rows('get_ready_section') ): ?>
                                  <?php 
                                  $get_ready_tabs =[];
                                  while( have_rows('get_ready_section') ){
                                    the_row(); 
                                    $get_ready_tabs[]=[
                                      'title'=>get_sub_field('title'),
                                      'icon' => get_sub_field('icon'),
                                      'description'=>get_sub_field('description'),
                                      'url'=>get_sub_field('url')
                                    ];
                                  }
                                  ?>

                                  <section class="pb-150">
                                    <div class="gbd-get-ready-wrapper py-5">
                                      <div class="container">
                                        <div class="col-md-7 col-sm-12 mx-auto mb-5">
                                          <h2 class="text-center font-weight-bold gbd-home-title">Get Ready for Unified Insights across the Shopper Journey</h2>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="gbd-get-ready">
                                          <div class="row">
                                            <div class="col-md-6 col-xl-6 col-sm-12">
                                              <div class="gbd-home-insights">
                                                <ul class="nav nav-pills brand-pills nav-stacked">
                                                  <?php foreach($get_ready_tabs as $key=>$get_ready_tab):?>
                                                    <li class="brand-nav ">
                                                      <span class="get-ready-tab">                                          
                                                        <span class="icons">
                                                          <?php if( isset($get_ready_tab['icon']['url'])): ?>
                                                           <img src="<?=$get_ready_tab['icon']['url']?>" alt="<?=$get_ready_tab['icon']['alt']?>">
                                                         <?php endif; ?>
                                                       </span>
                                                       <a href="<?=$get_ready_tab['url']?>"><h3><?=$get_ready_tab['title']?></h3></a>
                                                       <p><?=$get_ready_tab['description']?></p>
                                                       <?php if( !empty($get_ready_tab['url']) ): ?>
                                                        <a class="learn-more" href="<?=$get_ready_tab['url']?>">Learn more
                                                          <i class="fas fa-caret-right"></i>
                                                        </a>
                                                      <?php endif; ?>
                                                    </span>
                                                  </li>
                                                <?php endforeach;?>
                                              </ul>
                                            </div>
                                          </div>

                                          <div class="get-ready-screen col-md-6 col-sm-12 align-self-center">
                                            <picture>
                                            <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/laptop.webp">
                                              <img src="<?php echo get_template_directory_uri()?>/assets/images/laptop.png" alt="choose-intelligence-graph-img"> 
                                            </picture>
                                          </div>

                                        </div>
                                      </div><!-- gbd-get-ready -->
                                    </div>
                                  </div>
                                </section>
                                <!-- END GET ready section -->
                              <?php endif; ?>
                              <!-- Modal -->
                             <!--  <div class="modal fade" id="talktoexpert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h3 class="modal-title" id="exampleModalLabel">Talk to an Expert</h3>


                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>

                                      </button>

                                    </button>
                                  </div>
                                  <div class="modal-body" id="talktoexpertform">

                                   <script>
                                    function HubspotFormLoad(file) {
                                      var script = document.createElement("script");
                                      script.type = "text/javascript";
                                      script.charset = "utf-8";
                                      script.defer = true;
                                      script.src = file;
                                      script.onload = function() {
                                        if (document.querySelectorAll("#talktoexpertform .hbspt-form").length == 0) {
                                          hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array("formName"=>"Talk to an Expert Popup")); ?>);
                                        }
                                      };

                                      document.body.appendChild(script);
                                    }

                                    setTimeout(function() {
                                      HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
                                    }, 5000);

                                  </script>     </div>

                                </div>
                              </div>
                            </div> -->

                            <!-- Home page foooter top section -->
                            <section class="Subscription-block pb-150 ">
                              <div class="container">
                                <div class="gbd-footer-top">
                                  <h2 class="font-weight-bold">It's Easy to Get Started</h2>
                                  <div class="form-wrapper">

                                    <div id="schedule-free-consultation-footer">
                                      <script>
                                        function HubspotFormLoadFooter(file) {
                                          var script = document.createElement("script");
                                          script.type = "text/javascript";
                                          script.charset = "utf-8";
                                          script.defer = true;
                                          script.src = file;
                                          script.onload = function () {
                            //for download PDF
                            if (document.querySelectorAll("#schedule-free-consultation-footer .hbspt-form").length == 0) {
                              var obj = <?php includeWithVariables('hubspotForms.php', array("formName" => "Talk to expert footer Form")); ?>;
                              hbspt.forms.create(obj);
                            }
                          };

                          document.body.appendChild(script);
                        }

                        setTimeout(function () {
                          HubspotFormLoadFooter("//js.hsforms.net/forms/v2.js");
                        }, 5000);

                      </script>
                    </div>

                    <div class="small-text mt-3">Let's collaborate and create breakthrough insights.
                   
                    <a class="" href="<?php echo site_url('/talk-to-expert'); ?>">Speak one-on-one with an expert</a>
                    </div>
                  </div></div>
                </div>

              </section>


              <div class="clear"></div>

              <!-- Trusted partner section -->

              <section class="text-center trusted-partners-wrapper py-5">
                <div class="container">


                  <h2 class="font-weight-bold">Trusted by Industry Leaders</h2> 

                  <h3 class="trusted-partners">GrowByData powers the world's largest brands, retailers and digital agencies.</h3>


                  <ul class="logo-list mt-5">
                    <li class="dolor-general"><picture>


                      <img src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" data-src="<?php echo get_template_directory_uri()?>/assets/images/Dollar_General_logo.svg" alt="dollar-general" class="lazy"> 
                    </picture></li>

                    <li class="nestle"><picture>
                      <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/nestle.webp">

                        <img src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" data-src="<?php echo get_template_directory_uri()?>/assets/images/nestle.png" alt="nestle" class="lazy"> 
                      </picture></li>   <li class="nordstrom"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/nordstrom.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/nordstrom.png" alt="nordstrom" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li>       
                      <li class="epress"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/express.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/express.png" alt="express" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li>                     

                      <li class="crocs mr-0"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/crocs.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/crocs.png" alt="crocs" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li>
                    </ul>
                  </div>
                </section>

                <section class="gbd-popular-publication">
                  <div class="row">
                    <div class="container">
                      <h5>Recently Featured in these Major Retail Publications:
                      </h5>

                      <ul class="logo-list mt-3">

                       <li class="retail-times"><picture>
                         <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/retails-time.webp">

                          <img data-src="<?php echo get_template_directory_uri()?>/assets/images/retails-time.png" alt="retail-time" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                        </picture></li>   

                        <li class="dolor-general"><picture>
                         <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/digital-360-logo.webp">
                          <img data-src="<?php echo get_template_directory_uri()?>/assets/images/digital-360-logo.png" alt="digital-360" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                        </picture></li>
                        <li class="dolor-general"><picture>
                         <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/retail-touch-point.webp">

                          <img data-src="<?php echo get_template_directory_uri()?>/assets/images/retail-touch-point.png" alt="retail-touch point" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                        </picture></li>
                        <li class="dolor-general mr-0"><picture>

                         <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/total-retails.webp">
                          <img data-src="<?php echo get_template_directory_uri()?>/assets/images/total-retails.png" alt="total-retail" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 

                        </picture></li>  

                      </ul>
                    </div>
                  </div>

                </section>
              <!-- Trusted partner section -->

     <script>
       function checkmbl(){var i=!1;return(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))&&(i=!0),i}

          if(!checkmbl()){
               setTimeout(function(){
            // 2. This code loads the IFrame Player API code asynchronously.
              var tag = document.createElement('script');
              tag.async = true;
              tag.src = "https://www.youtube.com/iframe_api";
              var firstScriptTag = document.getElementsByTagName('script')[0];
              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
              console.log("youtube base..");
            },4000);
          }

     

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        console.log("apifunction...");
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: '<?php echo $output['v']; ?>',
          origin: window.location.host
        });
      }
    </script>


                <!-- Home page footer top section ends here -->
                <?php
                get_footer();