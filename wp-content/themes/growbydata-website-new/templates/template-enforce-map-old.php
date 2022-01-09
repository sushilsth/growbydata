<?php
/*
Template Name: Enforce Map Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<div class="gbd-default-template gbd-enforce-map">
    <div class="container">
        <div class="row">
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

                <div class="gbd-default-circle-block clearfix">
 
                    <div class="gbd-default-circle gbd-default-circle1 fadeIn">
                        <div class="gbd-default-circle-orange">
                            <span>
                                <img src="<?php echo get_template_directory_uri()?>/images/gbd-track-violations.png" alt="gbd-track-violations"> 
                            </span>
                        </div>
                        <div class="gbd-default-circle-text">
                            Track violations <Br>over time
                        </div>
                    </div>
                    <div class="gbd-default-circle gbd-default-circle2 fadeIn">
                        <div class="gbd-default-circle-red">
                            <span>
                                <img src="<?php echo get_template_directory_uri()?>/images/gbd-view-reports.png" alt="gbd-view-reports"> 
                            </span>
                        </div>
                        <div class="gbd-default-circle-text">
                            View reports by SKU <br>or competitor
                        </div>
                    </div>
                    <div class="gbd-default-circle gbd-default-circle3 fadeIn">
                        <div class="gbd-default-circle-blue">
                            <span>
                                <img src="<?php echo get_template_directory_uri()?>/images/gbd-archive-screenshots.png" alt="gbd-archive-screenshots"> 
                            </span>
                        </div>
                        <div class="gbd-default-circle-text">
                            Archive screen shots <br>of violations
                        </div>
                    </div>

                </div><!-- .gbd-default-circle-block -->


                <div class="gbd-map-violation-graph">
                    <img src="<?php echo get_template_directory_uri()?>/images/gbd-map-violation-graph.jpg" alt="gbd-map-violation-graph">
                    <span>Example of report showing the number of MAP violations committed by key competitors over time</span>
                </div>
            </div>
        </div>
        </div>

    </div>
</div><!-- gbd-default-template -->

<?php
get_footer();