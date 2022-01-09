  <?php
  /*
  Template Name: Our Pricing
  *
  * @package Growbydata Site
  * @since Growbydata Site 1.0.4
  */
  ?>
  <?php get_header(); ?>

  <div class="gbd-free-price-report-top-wrapper">
    <div class="gbd-content">
      <div class="container">
        <div class="col-md-12 col-sm-12">
         <div class="gbd-inner-page-wrapper">
           <!--    <div class="col-md-8 col-md-offset-2"> -->
            <header class="entry-header">
              <?php the_title('<h1 class="page-title">', '</h1>'); ?>
            </header>

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
      </div>
    </div>
  </div>
  </div>


  <div class="gbd-contact-us quick-quote-block">
    <!--BODY STARTS HERE-->
    <div class="container">
      <div class="row">


        <div class="col-md-6 col-sm-12">
          <div class="quick-quote-form">
            <h2>Quick Quote</h2>
            <div id="contact_form" class="contact-form our-pricing-form">
          <?php echo do_shortcode('[contact-form-7 id="1002" title="Our Pricing"]'); ?> 



</script>
         <div class="gbd-after-select-block" id="price-report-result-block">
          <p style="text-align: center;">
                Indicate your requirements <br>
              above...</p>
            </div>
          </div>

          </div>
        </div>



          <div class="col-md-6 col-sm-12">
          <div class="quick-quote-form get-free-quote">
            <h2>Get a Free Quote</h2>
            <div id="get_free_quote" class="contact-form our-pricing-form">
          <!--     <?php //echo do_shortcode('[contact-form-7 id="1003" title="Get Free Quote"]'); ?> -->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
    hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array("formName"=>"Our Pricing Form")); ?>);
</script> 
 </div>
          </div>

      </div>

    </div>
  </div>
</div><!--  Quick-quote-block-->


  <div class="gbd-you-get-wrapper">
    <div class="gbd-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="gbd-inner-page-wrapper">

              <div class="gbd-you-get">
                <div class="gbd-default-title">Leading retailers and brands choose<br>
                  GrowByData to gain an edge

                </div>
                <ul>
                  <li>
                    <span>
                      <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                    <h6>Precise and accurate<br>
                    pricing data</h6>
                  </li>
                  <li>
                    <span>
                      <i class="fa fa-chart-line" aria-hidden="true"></i>
                    </span>
                    <h6>Faster sales and <br>
                      margin growth
                    </h6>
                  </li>
                  <li>
                    <span>
                      <i class= "fa-code-icon fa"> 
                      </i>
                    </span>
                    <h6>A turnkey, yet <br>
                    custom solution</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!--  gbd-you-get-wrapper-->


    <div class="gbd-you-get-wrapper-main">
      <div class="gbd-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">

              <div class="gbd-inner-page-wrapper">

                <div class="gbd-you-get">

                  <div class="gbd-default-title">You’ll get
                  </div>

                  <div class="row">

                  <div class="col-md-10 gbd-you-get-icons col-md-offset-2 col-sm-offset-4">

                    <div class="col-md-6 col-sm-12">
                      <div class="gbd-youget-icon-wrap">
                        <div class="gbd-icons-wrap">
                          <span>
                           <i class="fa fa-tag" aria-hidden="true"></i>
                         </span>
                         <span class="gbd-text">pricing data</span>
                       </div>

                       <div class="gbd-you-get-hover">Accurate competitive pricing data,
                        precise to the SKU and variant 
                      level, delivered daily. </div>

                    </div>
                  </div>


                  <div class="col-md-6 col-sm-12">
                    <div class="gbd-youget-icon-wrap gbd-right-position-show">
                      <div class="gbd-icons-wrap">
                        <span>
                          <i class="fas fa-chart-bar fa"></i>
                        </span>
                        <span class="gbd-text">Reports</span>
                      </div>

                      <div class="gbd-you-get-hover">Discover top competitors, track price
                        changes over time, correlate to
                      marketing performance.
                    </div>

                    </div>
                  </div>


               <div class="col-md-6 col-sm-12">                  
                <div class="gbd-youget-icon-wrap">
                      <div class="gbd-icons-wrap">
                        <span>
                         <i class="fa fa-file-upload" aria-hidden="true"></i>
                       </span>
                       <span class="gbd-text">Dynamic Feed Label
                       </span>
                     </div>

                     <div class="gbd-you-get-hover">Enhance Google Ad performance by
                      uploading supplement feeds to
                    Merchant Center.</div>

                  </div>

                </div>


               <div class="col-md-6 col-sm-12">               
                <div class="gbd-youget-icon-wrap gbd-right-position-show">
                    <div class="gbd-icons-wrap">
                      <span>
                       <i class="fa" aria-hidden="true">  
                     <img src="<?php echo get_template_directory_uri()?>/images/E-map.png" alt="gbd-track-violations"> 
                     </i>
                     </span>
                     <span class="gbd-text">Enforce MAP</span>
                   </div>

                   <div class="gbd-you-get-hover">Find retailers violating MAP pricing
restriction and archive screen shots
as proof.
                </div>

                </div>
              </div>


              <div class="col-md-6 col-sm-12 nomargin">
                <div class="gbd-youget-icon-wrap">
                  <div class="gbd-icons-wrap">
                    <span>
                     <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                   </span>
                   <span class="gbd-text">Custom Project
                   </span>
                 </div>

                 <div class="gbd-you-get-hover">Looking for an even greater edge over
                  the competition? Give us your specs,
                we’ll send a quote. </div>

              </div>
            </div>




            <div class="col-md-6 col-sm-12 last-child" >
              <div class="gbd-youget-icon-wrap gbd-right-position-show nomargin">
                <div class="gbd-icons-wrap">
                  <span>
                   <i class="fa fa-handshake" aria-hidden="true"></i>
                 </span>
                 <span class="gbd-text">A Partner To Innovate With</span>
               </div>
<!-- 
               <div class="gbd-you-get-hover">No Text </div> -->

             </div>
           </div>

           </div>



         </div><!-- row -->



       </div><!-- gbd-you-get -->

     </div><!-- gbd-inner-page-wrapper -->

   </div>
  </div>
  </div>
  </div>
  </div>
  <!-- gbd-default-template -->
  <?php
  get_footer();