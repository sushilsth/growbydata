<?php
/*
Template Name: Inner page Content Template
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<section class="">

<div class="container">
        <div class="gbd-content">

       <header class="entry-header">
                    <?php the_title('<h1 class="page-title">', '</h1>'); ?>
                </header>
                <?php
                while (have_posts()) : the_post(); ?>
                    <div class="entry-content-page pb-5">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>


    </div>
</div>
</section>

<?php
get_footer();