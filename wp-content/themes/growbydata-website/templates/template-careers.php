<?php
/*
 * Template Name: Careers Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
    <div class="gbd-content gbd-carrers-page gbd-space">
        <div class="container-small">
            <span class="gbd-allcaps gbd-caps"><?php esc_html_e('Careers', 'growbydata-site'); ?></span>

            <div class="row">
                <div class="col-md-8 col-md-offset-2 overview-content">
                    <header class="entry-header">
                        <?php the_title('<h2 class="page-title">', '</h1>'); ?>
                    </header>
                    <?php
                    while (have_posts()) : the_post(); ?>
                        <div class="entry-content-page">
                            <?php the_content(); ?>
                            <a href="#scroll-down" class="gbd-link"><?php esc_html_e('View GrowByData job openings >', 'growbydata-site'); ?></a>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                    <a href="#" onclick="event.preventDefault()" class="btn red-btn overview-btn" data-toggle="modal" data-target="#careerContactform"><?php esc_html_e('Contact us about a job', 'growbydata-site'); ?></a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="careerContactform" tabindex="-1" role="dialog" aria-labelledby="freeTrialLabel">
            <div id="career-overviewform" class="modal-dialog gbd-pop-block" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="pop-close"><?php esc_html_e('x', 'growbydata-site'); ?></span>
                        </button>
                        <h3><?php esc_html_e('Inquiries Form', 'growbydata-site'); ?></h3>
                    </div>
                    <div>
                        <?php echo do_shortcode('[contact-form-7 id="172" title="Careers Contact us about a job"]'); ?>
                    </div>
                </div>
            </div>
        </div>


        <?php if (have_rows('careers_block')): ?>
            <div class="container-small">
                <div class="row">
                    <?php
                    $i = 1;
                    while (have_rows('careers_block')): the_row();
                        $title = get_sub_field('careers_title');
                        $description = get_sub_field('careers_description');
                        ?>
                        <div class="col-md-4 career-block career-block-<?php echo $i; ?>">
                            <?php
                            if (has_post_thumbnail($post->ID)): ?>
                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                <h3>
                                    <span class="career-overview"
                                          style="background-image: url('<?php echo $image[0]; ?>')"><?php echo $title; ?></span>
                                    <?php echo $title; ?>
                                </h3>
                            <?php endif;
                            wp_reset_query();
                            ?>
                            <blockquote>
                                <?php echo $description; ?>
                            </blockquote>
                        </div>
                        <?php
                        $i++;
                    endwhile; ?>
                </div>
            </div>
        <?php endif; ?>


        <div class="container">
            <a id="scroll-down"></a>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 overview-career">
                    <div id="accordion2" class="accordion">
                        <h2><?php esc_html_e('Open Positions', 'growbydata-site'); ?></h2>
                        <?php
                        $i = 1;
                        $gbd_cpt_args = array(
                            'post_type' => 'jobs',
                        );
                        $gbd_cpt_post_query = new WP_Query($gbd_cpt_args);
                        if ($gbd_cpt_post_query->have_posts()) :
                            while ($gbd_cpt_post_query->have_posts()) : $gbd_cpt_post_query->the_post(); ?>
                                <?php $key_1_value = get_post_meta(get_the_ID(), 'gbd_jobs_set_added', true);
                                if ($key_1_value == 'on') {
                                    ?>
                                    <div class="accordion-group career-box">
                                        <div class="accordion-heading">
                                            <h3>
                                                <a href="#collapse-<?php echo $i; ?>" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <?php the_title(); ?><span class="caret"></span>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="accordion-body collapse" id="collapse-<?php echo $i; ?>">
                                            <div class="accordion-inner">
                                                <?php the_content(); ?>
                                                <a href="#" onclick="event.preventDefault()" class="btn red-btn" data-toggle="modal" data-target="#gbdCareer"><?php esc_html_e('Learn more', 'growbydata-site'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                $i++;
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="gbdCareer" tabindex="-1" role="dialog" aria-labelledby="gbdCareerLabel">
            <div class="modal-dialog gbd-pop-block" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="pop-close">&times;</span>
                        </button>
                        <h3><?php esc_html_e('Learn more', 'growbydata-site'); ?></h3>
                    </div>
                    <div class="modal-body">
                        <?php echo do_shortcode('[contact-form-7 id="350" title="Careers Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        //jQuery('input[name=your-position]').attr('disabled','disabled');
        jQuery('.red-btn').bind('click',function(){
            if(jQuery('h3',jQuery(this).closest('div.career-box')).length>0){
                jQuery('input[name=your-position]').attr('value',jQuery('h3',jQuery(this).closest('div.career-box')).text().trim());
            }
        });
    </script>
<?php get_footer();
