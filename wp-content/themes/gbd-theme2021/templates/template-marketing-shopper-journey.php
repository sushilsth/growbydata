<?php
/*
  Template Name: Marketing shopper Journey
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
  ?>
  <?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="gbd-talk-to-expert">

        <section class="gbd-landing-page-banner ">
          <div class="bg_cover-banner marketplace-banner landing-page-banner shopper-journey text-white">
            <?php the_field('landing-page-banner'); ?>
          </div>
        </section><!-- gbd-enforce-banner -->

        <section class="gbd-talk-to-expert-top-section">
         <div class="container">
          <!--           <h1 class="text-center">Agencies Need Unified Marketing Intelligence to Give Brands an Edge</h1> -->
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="gbd-talk-to-expert-lt-content">
                <div class="right-text-list">
                  <?php if (have_rows('list-block')): ?>
                    <?php
                    $i = 1;
                    while (have_rows('list-block')): the_row();          
                      $listing= get_sub_field('listing');
                      ?>
                      <div class="list-top"><?php echo $listing; ?></div>
                      <?php
                      $i++;
                    endwhile; ?>
                  <?php endif; ?> 
                </div>
                <div class="gbd-banner-talktoexpert">
                  <?php if (have_rows('landing-image-block')): ?>
                    <?php
                    $i = 1;
                    while (have_rows('landing-image-block')): the_row();
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
            <div class="col-md-6 col-sm-12">
              <div class="gbd-talk-to-expert-rt-content shopper-journey-rt-content" id="gbd-talk-to-expert-rt-content">
                <div class="gbd-talk-to-expert-form gbd-shopers-journey-form ">

                  <h2>Download your guide now to unlock hyper-focused shopper journey intelligence</h2>
                  <?php
                  if(isset($_GET['success']) && isset($_GET['submissionGuid']) && $_GET['success'] == "thankyou"){
                    ?>
                    <div class="talk-to-expert-thankyou-msg">
                      Thank you for Submitting the form. We will be in touch within one business day.
                    </div>
                  <?php } ?>
                  <div id="gbd-talk-to-expert-hb-form" class="contact-form gbd-talk-to-expert-hb-form"></div><!-- gbd-talk-to-expert-hb-form -->
                    <script>
                      var downloadPDF = function(){
                        a = document.createElement("a");
                            a.href =  "<?php echo get_template_directory_uri() . '/assets/pdf/Search Tunnel Vision- Agencies are Missing an Opportunity to Hyper Focus on the Shopper Journey.pdf'?>", a.download = "Search Tunnel Vision- Agencies are Missing an Opportunity to Hyper Focus on the Shopper Journey.pdf", document.body.appendChild(a), a.click(), document.body.removeChild(a)

                            dataLayer.push({
                                        "event": "landing_page_submited"
                                      }); 
                      };
                    </script>
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
                                  script1.innerHTML = "hbspt.forms.create({portalId: '5372895',formId: '<?php includeWithVariables('hubspotForms.php', array('formName'=>'Shoper-journey Page Form')); ?>',onFormSubmit: downloadPDF})";
                                  document.getElementById("gbd-talk-to-expert-hb-form").appendChild(script1);
                                }
                              };
                              document.body.appendChild(script);
                            }
                     // setTimeout(function() {
                      HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
                     // }, 5000);
                   </script>
                 

               </div>
             </div>
             <div class="gbd-banner-talktoexpert-mob">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/search-myopia.jpg" alt="landing-page-img">                     
            </div>
          </div>

        </div>
      </div>
    </section><!-- gbd-talk-to-expert-top-section -->

  </div>
</main>
</div>
<script type="text/javascript">
  function scrollTosection(){
    window.scrollTo(0, document.querySelector(".gbd-talk-to-expert-top-section").offsetTop - 150);
  }
</script>
<?php
get_footer();