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
                <h1><span class="gbd-allcaps gbd-caps" >Community</span></h1>

                <div class="row">
<h2>How are we making a difference?</h2>
                       
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

    <style>
    .gbd-content.gbd-community p{
    font: normal 16px "Ubuntu", sans-serif;
    color: #272727 !important;
    line-height: 24px;
    text-align: left;
    -webkit-font-smoothing: antialiased;
  margin-bottom: 1.5em;
}

    .gbd-content.gbd-community h3 {
    padding-bottom: 35px;
    color: #af0000;
    font-size: 30px !important;
    font-weight: 600 !important;
    line-height: 32px;
    margin-bottom: 0; 
    margin-top: 0;
}

   .gbd-content.gbd-community  .entry-content-page {
 font: normal 16px "Ubuntu", sans-serif;}

 .gbd-community-detail .location-district, .gbd-community-detail .efforts-date {
    font-weight: bold;
    margin-bottom: 10px;
    text-align: left;
}
</style>

<?php
get_footer();