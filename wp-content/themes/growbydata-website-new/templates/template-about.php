<?php
/*
Template Name: About Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<div class="gbd-vision gbd-about">
    <div class="gbd-vision-wrapper gbd-about-wrapper">

        <div class="container">
            <header class="entry-header">
                <?php the_title('<h1 class="page-title">', '</h1>'); ?>
            </header>

            <?php
            while (have_posts()) : the_post(); ?>
                <div class="entry-content-page">
             <div class="container-small">  
             <div class="row">    
                    <?php the_content(); ?>
            </div>
                </div>
            </div>
                <?php
            endwhile;
            wp_reset_query();
            ?>
          <!--        <div class="gbd-vision-blocks">
            <div class="container">
                <div class="row vision-blocks">
                    <h3>You need people who understand data.<br>And the resources to execute.</h3>
                    <div class="col-md-4 col-sm-4 col-xs-12 fadeIn">
                        <div class="gbd-resource-execute">
                            <i class="fa fa-users" aria-hidden="true"></i><strong>If you’re <br>a start-up</strong>
                            You need a team you can afford to build and optimize data solutions.
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 fadeIn">
                        <div class="gbd-resource-execute">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i><strong>If you’re <br>an ecommerce company</strong>
                            You must compete with data leaders like Amazon and offer value distinct from competitors in your vertical or niche.
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 fadeIn">
                        <div class="gbd-resource-execute">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i><strong>If you’re <br>a healthcare company</strong>
                            You must use your data to find new customers, keep patients healthy, and maintain a cash balance.
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12"> 
                        <div class="gbd-content-vision-blocks">GrowByData can meet these needs - providing you with the necessary mix of people<br> and expertise.
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <!--     <div class="gbd-vision-bottom">
            <div class="container">
                <div class="row nopadding">
                    <div class="col-md-12">
                        <h3>Transform into a data-driven company<br> with the help of GrowByData.</h3>
                        <p>
                            GrowByData was founded by powerhouses in big data analytics and SaaS (software as a service) who have leveraged the power of global operations for decades. We help early to growth stage companies use data to improve margins, delight customers, and accelerate revenue growth.<br><br>
                            Curious? <a href="<?php //echo site_url(); ?>/contact">Contact GrowByData to learn more.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>      -->       

    </div>

</div><!-- gbd-vision-wrapper -->
</div>

<style type="text/css">
    .data-revolution p {
    font-size: 16px;
    text-align: left;
}
</style>
<?php
get_footer();