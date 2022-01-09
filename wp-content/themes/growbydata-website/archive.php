<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package growbydata_site
 */
global $growbydata_blog_post_counter;

get_header(); ?>
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                if (have_posts()) :
                    $growbydata_blog_post_counter = 1; ?>

                    <?php
                    /* Start the Loop */
                    while (have_posts()) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('components/post/content', get_post_format());

                    endwhile;
                    the_posts_navigation();
                else :

                    get_template_part('components/post/content', 'none');

                endif; ?>
            </main>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php

get_footer();
