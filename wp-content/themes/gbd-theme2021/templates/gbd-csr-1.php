<?php
/*
Template Name: CSR ONE
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<div class="gbd-content gbd-community">
    <!--BODY STARTS HERE-->
    <div class="gbd-content gbd-community-detail">
        <div class="container">
            <div class="row">
                <h1 class="page-title">Computer-Training Program-CSR</h1>

                <?php
                while (have_posts()) : the_post(); ?>
                    <div class="entry-content-page">
                        <div class="col-md-8 col-md-offset-2">

                            <?php the_content(); ?>
                        </div>
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
<!--BODY ENDS HERE-->
</div>

<?php
get_footer();