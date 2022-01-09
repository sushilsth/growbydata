<?php
/*
Template Name: Reports Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<div class="gbd-default-template gbd-price-reports">
    <div class="container">
        <div class="row">
           <div class="col-md-12 col-sm-12">
             <div class="gbd-inner-page-wrapper">
               <!--  <div class="col-md-8 col-md-offset-2"> -->
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

                <div class="gbd-default-circle-block clearfix">

                    <div class="gbd-default-circle gbd-default-circle1 fadeIn">
                        <div class="gbd-default-circle-orange">
                            <span>
                                <picture>
                                    <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-setup-easy.webp">
                                      <img src="<?php echo get_template_directory_uri()?>/images/gbd-setup-easy.png" alt="gbd-setup-easy">
                                  </picture> 
                              </span>
                          </div>
                          <div class="gbd-default-circle-text">
                            Setup is quick <Br>and easy
                        </div>
                    </div>
                    <div class="gbd-default-circle gbd-default-circle2 fadeIn">
                        <div class="gbd-default-circle-red">
                            <span>
                                <picture>
                                    <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-actionable-reports.webp">
                                      <img src="<?php echo get_template_directory_uri()?>/images/gbd-actionable-reports.png" alt="gbd-actionable-reports"> 
                                  </picture>
                              </span>
                          </div>
                          <div class="gbd-default-circle-text">
                            Actionable reports <br> and recommendations
                        </div>
                    </div>
                    <div class="gbd-default-circle gbd-default-circle3 fadeIn">
                        <div class="gbd-default-circle-blue">
                            <span>
                                <picture>
                                    <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-measure-impact.webp">
                                      <img src="<?php echo get_template_directory_uri()?>/images/gbd-measure-impact.png" alt="gbd-measure-impact">
                                  </picture> 
                              </span>
                          </div>
                          <div class="gbd-default-circle-text">
                            Measure impact <br> of your price changes
                        </div>
                    </div>

                </div><!-- .gbd-default-circle-block -->

                <div class="gbd-access-valuable-reports">
                    <h4>You and your team can access valuable reports 24x7</h4>
                    <div class="gbd-valuable-reports-slider">
                        <?php // echo do_shortcode("[wp1s id='883']"); ?>
                        <div class="slider slider-single">
                            <?php
                            if( have_rows('slider') ):
                              $i = 0;
                              while( have_rows('slider') ) : the_row();
                                  $i++;
                                  $image = get_sub_field('image');
                                  if( !empty( $image ) ):
                                      ?>
                                      <div>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        <div class="slider-contents">
                                            <div><?php echo get_sub_field('title'); ?></div>
                                            <div><?php echo get_sub_field('description'); ?></div>
                                        </div>
                                    </div>
                                    <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="slider slider-nav">
                       <?php
                       if( have_rows('slider') ):
                          $i = 0;
                          while( have_rows('slider') ) : the_row();
                              $i++;
                              $image = get_sub_field('image');
                              if( !empty( $image ) ):
                                  ?>
                                  <div>
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                                <?php
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div><!-- gbd-access-valuable-reports -->

    </div><!-- gbd-inner-page-wrapper -->
</div>
</div>

</div>
</div><!-- gbd-default-template -->
<style type="text/css">

    .js .slider-single > div:nth-child(1n+2) { display: none }

    .js .slider-single.slick-initialized > div:nth-child(1n+2) { display: block }

    .slick-slider h3 {
        background: #f0f0f0;
        color: #3498db;
        font-size: 2.25rem;
        margin: .5rem;
        padding: 2%;
        position: relative;
        text-align: center;
    }

    .slider-single h3 {
        line-height: 10rem;
    }

    .slider-nav h3::before {
        content: "";
        display: block;
        padding-top: 75%;
    }

    .slider-nav h3 span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .slider-nav .slick-slide { cursor: pointer; }

    .slick-slide.is-active h3 {
        color: #c00;
        background-color: #fff
    }
</style>
<?php
get_footer();