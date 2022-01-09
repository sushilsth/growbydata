<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package growbydata_site
 */

get_header(); ?>
<!-- <div class="container">  -->
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            while (have_posts()) : the_post();
                    get_template_part('components/post/content', 'single-1col');
                    //get_template_part('components/post/content', 'single-report');
                    endwhile; // End of the loop.
                    ?>
                </main>
                <!-- </div> -->
                <?php //get_sidebar(); ?>
            </div> 
            <?php
            get_footer();