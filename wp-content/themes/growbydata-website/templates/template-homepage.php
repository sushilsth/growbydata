<?php
/*
Template Name: Home Page Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
    <div class="gbd-home">

        <div class="gbd-banner">
            <div class="gbd-shadow">
                <div class="container">
                    <h2>Grow your business faster</h2>
                    <p>We help online retailers sell and increase profits <br>through Amazon and Google.<br>
                        <Span style="padding-top:9px; display:block">Everything’s included.</Span>
                    </p>

                    <a href="#" onclick="event.preventDefault()" id="free-trial-1" data-toggle="modal" data-target="#freeTrial" class="btn btn-default btn-lg m-btn free-trial slideRight"><?php esc_html_e('START FREE TRIAL', 'growbydata-site'); ?></a>
                    <a href="<?php echo site_url(); ?>/contact-us"  class="btn btn-default btn-lg m-btn slideLeft"><?php esc_html_e('SCHEDULE A CALL', 'growbydata-site'); ?></a>
                </div>
            </div>
        </div>

        <?php if (have_rows('homepage_block_1')): ?>
        <div class="gbd-content">
            <div class="container">
                <div class="row vision-blocks">
                    <h3>A convenient, one-stop solution: <br>data software and data services combined.</h3>
                </div>
                <div class="row vision-blocks">
                        <?php
                        $i = 1;
                        while (have_rows('homepage_block_1')): the_row();
                            $title = get_sub_field('vision_blocks_title');
                            $description = get_sub_field('vision_blocks_description');
                            $image = get_sub_field('vision_blocks_image');
                            ?>
                            <div class="col-sm-4 col-md-4 col-xs-12 vision-block-<?php echo $i; ?>">
                                <span class="resource-sprite vision-block-<?php echo $i; ?>"" style="background-image: url('<?php echo $image; ?>')"><?php echo $title; ?></span>
                                        <strong><?php echo $title; ?></strong>
                                <div class="vision-blocks-description">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endwhile; ?>

                    <div class="col-sm-12 col-md-12"> <a href="<?php echo site_url(); ?>/data-exchange" id="show-contact-form" class="btn red-btn resource-btn"><?php esc_html_e('Learn More about Data Exchange', 'growbydata-site'); ?></a></div>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <div class="amazon-sale">
            <div class="container">
                <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-6">
                    <h3>Grow your Amazon sales</h3>
                    <p >
                        Amazon drives 30% of online retail sales, with third-party sellers responsible for half of that.  </p>
                    <p>Amazon is a threat to all online retailers, but if you use your data wisely, you can turn it into an opportunity.</p>
                    <a href="<?php echo site_url(); ?>/contact-us"><?php esc_html_e('Contact us to sell more on Amazon >', 'growbydata-site'); ?></a>
                </div>
            </div>
        </div>
        <div class="google-sale">
            <div class="container">
                <div class="col-md-5 col-sm-6">
                    <h3>Grow your Google sales</h3>
                    <p>
                        Google is the top referral source for most merchants, delivering profitable sales through paid and organic search.</p>
                    <p>Gain an edge over the competition by using data to rank higher and convert more.
                    </p>
                    <a href="<?php echo site_url(); ?>/contact-us"><?php esc_html_e('Contact us to sell more on Google >', 'growbydata-site'); ?></a>
                </div>
            </div>
        </div>
    </div>
	<?php
get_footer();