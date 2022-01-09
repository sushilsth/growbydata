<?php
/*
Template Name: Talk to expert landing
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header('new'); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="gbd-talk-to-expert">
        <section class="gbd-talk-to-expert-top-section">
         <div class="container">
          <h1 class="text-center text-white">Marketing Intelligence across <br>
the shopper journey</h1>
          <div class="row">
            <div class="col-md-7 col-sm-12">
              <div class="gbd-talk-to-expert-lt-content">
                  <div class="right-text-list">
                 <?php
  while (have_posts()) : the_post(); ?>
    <div class="entry-content-page">
      <?php the_content(); ?>
    </div>
    <?php
  endwhile;
  wp_reset_query();
  ?>
                </div>
                <div class="gbd-img-wrapper mt-5">
                  <?php if (have_rows('talktoexpert-image-block')): ?>
                    <?php
                    $i = 1;
                    while (have_rows('talktoexpert-image-block')): the_row();
                      $image = get_sub_field('image');          
                      ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>

                      <?php
                      $i++;
                    endwhile; ?>
                  <?php endif; ?> 
                </div>
                          </div>
            </div>
            <div class="col-md-5 col-sm-12">
              <div class="gbd-talk-to-expert-rt-content">
                <div class="gbd-talk-to-expert-form">
                  
<!--                   <h2>We look forward to speaking with you!</h2>
 -->                  <?php
                  if(isset($_GET['success']) && isset($_GET['submissionGuid']) && $_GET['success'] == "thankyou"){
                  ?>
                  <div class="talk-to-expert-thankyou-msg">
                    Thank you for Submitting the form. We will be in touch within one business day.
                  </div>
                <?php } ?>
                  <div id="gbd-talk-to-expert-hb-form" class="contact-form gbd-talk-to-expert-hb-form">
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
                              hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array("formName"=>"Talk to Expert Form")); ?>);
                            }
                          };

                          document.body.appendChild(script);
                        }

                        // setTimeout(function() {
                          HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
                        // }, 5000);
                      </script>
                    </div><!-- gbd-talk-to-expert-hb-form -->
                    
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section><!-- gbd-talk-to-expert-top-section -->

      </div>
                    <!-- Trusted partner section -->

              <section class="text-center trusted-partners-wrapper py-5">
                <div class="container">


                  <h2 class="font-weight-bold">Trusted by Industry Leaders</h2> 

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
              <!-- Trusted partner section -->



   <!-- We support section -->
   <section class="background-light">
<div class="container">
  <div class="row">
  
<div class="col-md-7">
  <h4 class="font-weight-bold">We Support</h4>
<ul class="logo-list mt-3 wesupport-block">
                    <li class="walmart"><picture>
 <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/walmart.webp">
                      <img src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" data-src="<?php echo get_template_directory_uri()?>/assets/images/walmart.jpg" alt="walmart" class="lazy"> 
                    </picture></li>
                        <li class="ebay"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/ebay.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/ebay.jpg" alt="ebay" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li> 
                       <li class="instacart"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/instacart.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/instacart.jpg" alt="instacart" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li>

                         <li class="alibaba mr-0"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/alibaba.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/alibaba.jpg" alt="alibaba" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li>



                    <li class="amazon"><picture>
                      <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/amazon.webp">

                        <img src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" data-src="<?php echo get_template_directory_uri()?>/assets/images/amazon.jpg" alt="amazon" class="lazy"> 
                      </picture></li>   <li class="target"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/target.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/target.jpg" alt="target" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li>       
                      <li class="google"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/google.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/google.jpg" alt="google" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li>

                          <li class="bing mr-0"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/bing.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/bing.jpg" alt="bing" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li>
                    </ul>
                    <h4 class="text-right font-weight-bold mr-3 mb-0">& Others</h4>
  

</div>

<div class="col-md-5 word-cloud">
  
<picture>
                     <!--   <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/bing.webp"> -->

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/word-cloud.png" alt="bing" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></div>
</div>

</div>
    </section>


 <!-- Footer Section -->

<div class="landing-page-footer py-3 text-center"><div class="container"><span class="text-white">© 2021 GROWBYDATA</span></div></div>
    </main>
  </div>



  <script data-main="<?=get_template_directory_uri()?>/assets/js/compiled/main" src="<?=get_template_directory_uri()?>/assets/js/require.js"></script>