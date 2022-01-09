<?php
/*
  Template Name: Share of Voice LP
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
  ?>
  <?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="gbd-talk-to-expert">
        <section class="gbd-talk-to-expert-top-section">
         <div class="container">
          <h1 class="text-center">Discover Your Share of Voice!</h1>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="gbd-talk-to-expert-lt-content">
                <div class="gbd-banner-talktoexpert">
                <div class="video-wrapper mb-3 mx-auto">
  <?php 
    $videolink = get_post_meta(get_the_ID(), 'video-field', TRUE);
    $finalvalue = trim(parse_url($videolink, PHP_URL_QUERY));
    parse_str ( $finalvalue , $output );
    //parse_str($finalvalue);
  ?>
  <div id="player"></div>
</div> 
                </div>
                <div class="right-text-list">
                  <?php if (have_rows('talktoexpert-list-block')): ?>
                    <?php
                    $i = 1;
                    while (have_rows('talktoexpert-list-block')): the_row();          
                      $listing= get_sub_field('listing');
                      ?>
                      <div class="list-top"><?php echo $listing; ?></div>
                      <?php
                      $i++;
                    endwhile; ?>
                  <?php endif; ?> 
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 order-first order-md-2 ">
              <div class="gbd-talk-to-expert-rt-content checkbox-orange marketplace-intelform mb-3" id="gbd-talk-to-expert-rt-content">
                <div class="gbd-talk-to-expert-form">

<!--                   <h2>We look forward to<br> speaking with you!</h2>
 -->                  <?php
                  if(isset($_GET['success']) && isset($_GET['submissionGuid']) && $_GET['success'] == "thankyou"){
                    ?>
                    <div class="talk-to-expert-thankyou-msg">
                      Thank you for Submitting the form. We will be in touch within one business day.
                    </div>
                  <?php } ?>
                  <div id="gbd-talk-to-expert-hb-form" class="contact-form gbd-talk-to-expert-hb-form"></div><!-- gbd-talk-to-expert-hb-form -->
                   <!--  <script>
                      var downloadPDF = function(){
                        a = document.createElement("a");
                            a.href =  "<?php //echo get_template_directory_uri() . '/assets/pdf/Mattel-Product_Intelligence.pdf'?>", a.download = "Mattel-Product_Intelligence.pdf", document.body.appendChild(a), a.click(), document.body.removeChild(a)

                            dataLayer.push({
                                        "event": "landing_page_submited"
                                      }); 
                      };
                    </script> -->
                    <script>

                     function HubspotFormLoad(file) {
                      var script = document.createElement("script");
                      script.type = "text/javascript";
                      script.charset = "utf-8";
                      script.defer = true;
                      script.src = file;
                      script.onload = function() {
                              //for download PDF
                              if (document.querySelectorAll("#gbd-talk-to-expert-hb-form .hbspt-form").length == 0) {
                                  // console.log("download pdf form");
                                  var script1 = document.createElement("script");
                                  script1.innerHTML = "hbspt.forms.create({portalId: '5372895',formId: '<?php includeWithVariables('hubspotForms.php', array('formName'=>'Share of Voice Landing page form')); ?>'})";
                                  document.getElementById("gbd-talk-to-expert-hb-form").appendChild(script1);
                                }
                              };
                              document.body.appendChild(script);
                            }
                     setTimeout(function() {
                      HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
                     }, 4000);
                   </script>
                 

               </div>
             </div>
          <!--    <div class="gbd-banner-talktoexpert-mob">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/Marketplace-intel.jpg" alt="landing-page-img">                     
            </div>
          </div>
 -->
            </div>
          </div>
        </section><!-- gbd-talk-to-expert-top-section -->

      </div>
    </main>
  </div>

       <script>
 
               setTimeout(function(){
            // 2. This code loads the IFrame Player API code asynchronously.
              var tag = document.createElement('script');
              tag.async = true;
              tag.src = "https://www.youtube.com/iframe_api";
              var firstScriptTag = document.getElementsByTagName('script')[0];
              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
              console.log("youtube base..");
            },4000);
          
 

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
        videoId: '<?php echo $output['v']; ?>',
          origin: window.location.host
        });
      }




    </script>

<style>
  .gbd-banner-talktoexpert{
margin-top:0;
}
#gbd-talk-to-expert-hb-form {
    width: 95%;
}

.gbd-talk-to-expert-lt-content{
  display:block!important;
}

.video-wrapper iframe#player {
    min-height: 390px;
}

@media (min-width: 320px) and (max-width: 767px)
{
.gbd-banner-talktoexpert {
    margin: 40px 0;
    display: block;
}
}
</style>
  <?php
  get_footer();