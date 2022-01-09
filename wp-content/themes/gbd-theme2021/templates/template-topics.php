<?php
/*
Template Name: Topics Template
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>

<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>

<div class="gbd-ad-intel-template gbd-solution-template topics-template">
  <header class="entry-header">
    <?php //the_title('<h1 class="page-title">', '</h1>'); ?>
  </header>


  <section>
    <!-- GBD Static Banner -->
    <div class="gbd-landing-page-banner ">
    <div class="bg_cover-banner text-white landing-page-banner shopper-journey text-white px-10 py-5 topics-banner">
      <?php the_field('banner-topics'); ?>
    </div>
  </div>
  </section>
  <!-- GBD Static Banner -->

  <!-- first -->
  <section>
    <div class="odd bgwhite block-1">
      <?php if (have_rows('First-block')): ?>

        <?php
        $i = 1;
        while (have_rows('First-block')): the_row();
          $image = get_sub_field('image');          
          $listing= get_sub_field('listing');
          ?>
          <div class="container">
            <div class="row">
             
              <div class="col-md-7 col-sm-12 mb-4 align-self-center">
                <div class="right-text-list text-left align-self-center">
                <div class="list-top"><?php echo $listing; ?></div>
                      <div class="mt-3">         
         <a class="btn px-5 py-2 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">
Talk to an Expert        
</a>
       </div>
              </div>
            </div>

             <div class="col-md-5 col-sm-12 col-12 align-self-center pr-md-5 text-center "><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
              </span></div>
          </div>
        </div>
        <?php
        $i++;
      endwhile; ?>
    <?php endif; ?> 
   <?php if (have_rows('First-block-2')): ?>
    <div class="container mt-5">
            <div class="row">
        <?php
        $i = 1;
        while (have_rows('First-block-2')): the_row();
          $listing= get_sub_field('listing');
          ?>

              <div class="col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="right-text-list text-left ">
                <div class="list-top"><?php echo $listing; ?></div>
              </div>
            </div>
        
        <?php
        $i++;
      endwhile; ?>
    <?php endif; ?> 
  </div>
        </div>
  </div>

</section>

<!-- first -->


<!-- 2nd -->

<section>
  <div class=" text-white even background-light block-2 our-approch-block">
   <div class="container">
        <div class="row">
          <div class="col-md-12 align-self-center text-center mb-5">
      <?php if (have_rows('second-block-1')): ?>

        <?php
        $i = 1;
        while (have_rows('second-block-1')): the_row();
          $title = get_sub_field('title');
          $image = get_sub_field('image');          
          $listing= get_sub_field('listing');
          ?>
          <div class="container">
            <div class="row">
               <div class="col-md-12 text-center"> <h2 class="pb-3 mb-3" style="color:#272725;"><?php echo $title; ?> 
                </h2>
              </div>
              
              <div class="col-md-7 col-sm-12 mb-4 mb-md-0 align-self-center">
                <div class="right-text-list text-left ">
                <div class="list-top"><?php echo $listing; ?></div>
                  <div class="mt-5 ">         
         <a class="btn px-5 py-2 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">
Schedule Demo         
</a>
       </div>
              </div>
            </div>
            <div class="col-md-5 col-sm-12 col-12 align-self-center pr-md-5 text-center "><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
              </span></div>
          </div>
        </div>
        <?php
        $i++;
      endwhile; ?>
    <?php endif; ?>  
  </div>
          <?php if (have_rows('second-block')): ?>
    <?php
    $i = 1;
    while (have_rows('second-block')): the_row();
      $image = get_sub_field('image');          
      $listing= get_sub_field('listing');
      ?>
        <?php if( $i%2 == 1 ): ?>
     <div class="col-md-5 col-12 col-sm-12 align-self-center  text-center mb-4   order-md-second order-second"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
            </span></div>
            <div class="col-md-7 col-sm-12 mb-4  mb-4 align-self-center">
                <div class="right-text-list text-left">
                <div class="list-top"><?php echo $listing; ?></div>
            </div>
            </div>
        <?php else: ?> 
               <div class="col-md-7 col-sm-12 mb-4 align-self-center">
            <div class="right-text-list text-left ">
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>
        <div class="col-md-5 col-12 col-sm-12 align-self-center  text-center "><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
        </span></div>
            
 
        <?php endif; ?>
 
 
 
     
    <?php
    $i++;
  endwhile; ?>
<?php endif; ?> 
</div> 
</div>
    </div>
</section>

<!-- 2nd -->
<section>
<div class="toics-infographics  px-5 py-5 searchintel-blue-banner mb-150">
   <div class="container">
    <h2 class="text-center text-white mb-3">Checkout Marketing Intelligence Guides</h2>
        <div class="row">
          <?php if (have_rows('Third-block')): ?>
    <?php
    $i = 1;
    while (have_rows('Third-block')): the_row();
      $image = get_sub_field('image');          
      $link=get_sub_field('link');
      ?>

      <div class="col-md-3 col-xs-12">
             <div class="gbd-infographics-block">
                                    <div class="gbd-infographics-img">
                                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                                </div>
                                    <div class="gbd-infographics-info text-center font-weight-bold mt-3">
                                      <h6><?php echo $link["title"]; ?></h6>
                                        <a href="<?php echo $link["url"]; ?>">
                                            Get This Resource
                                        </a>
                                    </div>
                                </div>
                              </div>
    <?php
    $i++;
  endwhile; ?>
<?php endif; ?> 
<br>

<div class="view-all-whitepaper mb-0 mx-auto mt-3 text-center btn">
  <a  href="<?php echo site_url('/whitepapers-guides/'); ?> "class="text-white btn px-5 py-2 orange_btn">Download Our Resources</a>
</div>
        </div>
      </div>
</div>
</section>

<!-- Subscription Block -->
                            <!-- Home page foooter top section -->
                            <section class="Subscription-block pb-150 ">
                              <div class="container">
                                <div class="gbd-footer-top">
                                  <h3 class="font-weight-bold">Learn more about the Marketing Intelligence
</h3>
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

                    <div class="small-text mt-3">Let’s collaborate and create breakthrough insights.
                   
                    <a class="" href="<?php echo site_url('/talk-to-expert'); ?>">Speak one-on-one with an expert</a>
                    </div>
                  </div></div>
                </div>

              </section>
              <!-- Subscription Block -->




</div>

<?php
get_footer();
