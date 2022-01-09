<?php
/*
Template Name: Competitive Ad Intelligence Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<div class="gbd-default-template">
    <div class="container">
        <div class="row">
               <div class="col-md-12 col-sm-12">
                     <div class="gbd-inner-page-wrapper">
<!--             <div class="col-md-8 col-md-offset-2">
 -->                <header class="entry-header">
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

                <div class="gbd-default-circle-block clearfix ">


 <div class="gbd-default-circle gbd-default-circle1 fadeIn">
                        <div class="gbd-default-circle-orange">
                            <span>
                                <img src="<?php echo get_template_directory_uri()?>/images/visibility-icon.png" alt="get-greater-visibility"> 
                            </span>
                        </div>
                        <div class="gbd-default-circle-text">
Get Greater Visibility 
                        </div>
                    </div>
                    <div class="gbd-default-circle gbd-default-circle2 fadeIn">
                        <div class="gbd-default-circle-red">
                            <span>
                                <img src="<?php echo get_template_directory_uri()?>/images/improve-conversion.png" alt="GBD-Improve-conversion"> 
                            </span>
                        </div>
                        <div class="gbd-default-circle-text">
Increase Conversion                        </div>
                    </div>

                       <div class="gbd-default-circle gbd-default-circle3 fadeIn">
                        <div class="gbd-default-circle-blue">
                            <span>
                                <img src="<?php echo get_template_directory_uri()?>/images/sellmore-1.png" alt="GBD-Improve-ROI"> 
                            </span>
                        </div>
                        <div class="gbd-default-circle-text">
Improve ROI 
                        </div>
                    </div>
                   

                
                </div><!-- .gbd-default-circle-block -->


                <div class="gbd-retail-price-accordin gbd-accordin">
              <div class="accordion" id="accordion">
                              <?php

              // Check rows exists.
              if( have_rows('ad_intelligent') ):
                  // Loop through rows.
                $i = 0;
                  while( have_rows('ad_intelligent') ) : the_row();
                    $i++;
                      // Load sub field value.
                    ?>
                      <div class="card">
                          <div class="card-header">
                              <h2 class="mb-0">
                                <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" data-parent="#accordion">
                                  <i class="fa fa-plus"></i> 
                                  <?php echo get_sub_field('accordion_title'); ?>
                                </button>              
                              </h2>
                          </div>
                          <div id="collapse<?php echo $i; ?>" class="collapse">
                              <div class="card-body">
                                  <?php echo get_sub_field('accordion_description'); ?>
                              </div>
                          </div>
                      </div>
                      <?php
                  // End loop.
                  endwhile;

              // No value.
              else :
                  // Do something...
              endif;
              ?>
                  </div>

                </div>



                    
            </div>
        </div>
</div>
    </div>

    <div class="gbd-footer-subscribe">
 <div class="container">
  <h4>Your Competitive AD Intelligence Reports <br/>are Waiting..</h4>

  <a href="https://info.growbydata.com/competitive-ad-intel" target="_blank">Get your Free report!</a>

</div>
</div>
</div><!-- gbd-default-template -->
<style type="text/css">
  .gbd-category-btn {
    display: block;
    text-align: center;
    margin: 30px auto 0;
    background: #ac0000;
    color: #fff;
    width: 281px;
    height: 52px;
    line-height: 52px;
    font-size: 15px;
    letter-spacing: 0.7px;
    text-transform: uppercase;
}
.gbd-category-btn:hover {
    color: #fff;
    text-decoration: none;
}
</style>
<?php
get_footer();