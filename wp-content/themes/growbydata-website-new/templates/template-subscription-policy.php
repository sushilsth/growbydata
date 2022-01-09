<?php
/*
Template Name: Subscription Policy
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
                     <div class="gbd-inner-page-wrapper privacy">
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


        </div>
</div>
    </div>
</div>
</div><!-- gbd-default-template -->

<?php
get_footer();