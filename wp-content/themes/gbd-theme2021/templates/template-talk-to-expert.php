<?php
/*
  Template Name: Talk To Expert
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
          <h1 class="text-center">Talk to a Marketing Intelligence Expert</h1>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="gbd-talk-to-expert-lt-content">
                <div class="gbd-banner-talktoexpert">
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
            <div class="col-md-6 col-sm-12">
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
    </main>
  </div>

  <?php
  get_footer();