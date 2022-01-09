<?php
/*
Template Name: Contact Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<div class="gbd-contact-us">
    <!--BODY STARTS HERE-->
    <div class="gbd-content bgwhite">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
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
                <div id="contact_form" class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="859" title="Contact us-New"]'); ?>
                </div> 
            </div>
        </div>
    </div>
</div>
<!--BODY ENDS HERE-->

</div>
<?php
get_footer();