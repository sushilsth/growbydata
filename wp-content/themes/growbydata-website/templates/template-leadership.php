<?php
/*
 * Template Name: Leadership Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
    <div class="gbd-content gbd-leadership-page gbd-space">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <header class="entry-header">
                        <?php the_title('<h2 class="page-title">', '</h1>'); ?>
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
            <?php if (have_rows('leadership_block')): ?>
                <div class="row">
                    <div class="container-small">
                        <?php while (have_rows('leadership_block')): the_row();
                            $image = get_sub_field('leadership_image');
                            $name = get_sub_field('leadership_name');
                            $description = get_sub_field('leadership_description');
                            $position = get_sub_field('leadership_position');
                            ?>
                            <div class="col-md-6 col-xs-12 gbd-team ">
                                <div class="team-block">
                                    <div class="team-img">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
                                    </div>
                                    <div class="team-info">
                                        <label><?php echo $name; ?></label>
                                        <span><?php echo $position; ?></span>
                                        <div class="gbd-team-content"><?php echo $description; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer();
