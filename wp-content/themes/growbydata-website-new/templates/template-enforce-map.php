<?php
/*
Template Name: Enforce Map Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style-new.css?q='. $eci_date->getTimestamp() ; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/blog-css.css?q='. $eci_date->getTimestamp() ; ?>">
<style type="text/css">
.gbd-enforce-consultation-form .schedule-free-consultation label {margin-bottom: 20px !important;}
</style>
<div class="gbd-default-template gbd-enforce-map">

        <div class="gbd-enforce-banner">
            <div class="slider slider-single-image">
            <?php
            // Check rows exists.
            if( have_rows('slider') ):
                // Loop through rows.
              $i = 0;
                while( have_rows('slider') ) : the_row();
                  $i++;
                    // Load sub field value.
      ?>
            <div>
               <?php echo get_sub_field('slide'); ?>
            </div>
          <?php  endwhile; endif;?>
        </div>

    </div><!-- gbd-enforce-banner -->

<div class="gbd-enforce-map-mid"> 
    <div class="container">
           <?php
   while (have_posts()) : the_post(); ?>
    <div class="entry-content-page">
      <?php the_content(); ?>
  </div>
  <?php
endwhile;
wp_reset_query();
?>
        <div class="gbd-default-circle-block clearfix">
            <?php if (have_rows('gbd-enforce-map-block')): ?>

              <div class="gbd-enforce-map-blocks clearfix">
                <?php
                $i = 1;
                while (have_rows('gbd-enforce-map-block')): the_row();
                  $title = get_sub_field('gbd-enforce-map-title');
                  $image = get_sub_field('gbd-enforce-map-image');          
                  $description = get_sub_field('gbd-enforce-map-description');
                  ?>
                  <div class="gbd-default-circle-wrap fadeIn">     
                      <div class="gbd-default-circle-text">
                          <?php echo $title; ?> 
                  </div>
                  <div class="gbd-default-circle-default">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
              </div>
              <div class="gbd-enforce-map-description">
                  <?php echo $description; ?>
              </div>
          </div>

          <?php
          $i++;
      endwhile; ?>

  </div><!-- gbd-enforce-map-blocks -->
<?php endif; ?> 
</div><!-- .gbd-default-circle-block -->
<a class="btn btn-default btn-lg m-btn free-trial" href="#gbd-enforce-map-consultation">Request A Demo</a>
</div>
</div><!-- gbd-enforce-map-mid -->

<div class="gbd-enforce-map-monitoring">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 fadeIn" style="padding-right: 0;">
                <div class="gbd-enforce-map-monitoring-lt">
                    <h2>What is included with MAP monitoring?</h2>
                    <ul>
                        <li>
                            Accurate Retailers Price Data Matched to your SKU level for daily MAP Compliance scanning 
                        </li>
                        <li>
                            Minimum Advertise Price Monitoring Software with powerful reports and screenshot archives
                        </li>
                        <li>
                            Alert Services with reports and evidences compiled in PDF to immediately claim violation and enforce MAP prices
                        </li>
                        <li>
                            As MAP Compliance Scanning is part of <a href="<?php echo site_url(); ?>/price-intelligence"> price intelligence data;</a>  you will get repricing features with powerful reports like Competitors Report, Competitive Insights and Assortment Analysis 
                        </li>
                    </ul>  
                    <a class="btn btn-default btn-lg m-btn free-trial" href="#gbd-enforce-map-consultation">Schedule A Demo</a>      
                </div>
            </div>
            <div class="col-md-7 col-sm-7 fadeIn" style="padding-left: 0;">
                <span class="map-graphics">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/map-graph.webp">
                      <img src="<?php echo get_template_directory_uri()?>/images/map-graph.png" alt="map-grap">
                    </picture>
                </span>
            </div>

        </div>
    </div>
</div><!-- gbd-enforce-map-monitoring -->

<div class="gbd-enforce-map-faq">
    <div class="container">
        <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="gbd-inner-page-wrapper">
                <div class="gbd-enforce-map-faq-accordin gbd-accordin">
                  <h2 style="margin-bottom:30px;display:block;width:100%;margin-top:10px">
                    <?php echo get_field('enforce_map_faq_accordion_title'); ?>
                </h2>
                <div class="accordion" id="accordion">
                    <?php

// Check rows exists.
                    if( have_rows('enforce_map_faq') ):
    // Loop through rows.
                      $i = 0;
                      while( have_rows('enforce_map_faq') ) : the_row();
                          $i++;
        // Load sub field value.
                          ?>
                          <div class="card">
                            <div class="card-header">
                                <h2 class="mb-0">
                                  <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" data-parent="#accordion">
                                    <i class="fa fa-plus"></i> 
                                    <?php echo get_sub_field('accordion_title'); ?>
                                </button>              
                            </h2>
                        </div>
                        <div id="collapse<?php echo $i; ?>" class="collapse">
                            <div class="card-body">
                                <?php echo get_sub_field('accordion_description'); ?>
                            </div>
                        </div>
                    </div>
                    <?php
    // End loop.
                endwhile;

// No value.
            else :
    // Do something...
            endif;
            ?>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div><!-- gbd-enforce-map-faq --> 

<div class="gbd-enforce-map-consultation" id="gbd-enforce-map-consultation">
    <div class="container">
        <div class="gbd-enforce-consultation-form">
            <h2>Schedule A Free Demo</h2>
            <div id="schedule-free-consultation" class="contact-form schedule-free-consultation">
              <script>
                   function HubspotFormLoad(file) {
                        var script = document.createElement("script");
                        script.type = "text/javascript";
                        script.charset = "utf-8";
                        script.defer = true;
                        script.src = file;
                        script.onload = function() {
                            //for download PDF
                            if (document.querySelectorAll("#schedule-free-consultation .hbspt-form").length == 0) {
                                hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array("formName"=>"Schedule Free Consultation Form")); ?>);
                            }
                        };

                        document.body.appendChild(script);
                    }

                    setTimeout(function() {
                        HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
                    }, 5000);
                </script>
              </div><!-- schedule-free-consultation -->
                
                <script>
                    
                </script>
            
        </div>
    </div>
</div><!-- gbd-enforce-map-consultation-form -->

<script type="text/javascript">
    if(sessionStorage.getItem("hubspotsuccessMessage") != null){
        jQuery("#schedule-free-consultation").prepend("<div class='hubspotsuccessMessage'>"+sessionStorage.getItem("hubspotsuccessMessage")+"</div>");
        sessionStorage.removeItem("hubspotsuccessMessage");
    }
</script>

<div class="gbd-insights-price-intelligence gbd-insights-map-monitoring">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="entry-content-page">
                <h3>Insights on MAP Monitoring Resources</h3>
            </div>
            <div class="gbd-blog-wrapper">
              <div class="gbd-blog-posts">             
                  <div class="gbd-featured-blog-block clearfix">
                    <?php 
                    $category_slug = get_field("blog_category_slug", get_the_ID());                   
                    ?>

                    <?php
                    $args = array(
                      'posts_per_page' => 3,
                      'post_status' => 'publish',
                      'post_type'   => 'post',
                      'orderby' => 'date',
                      'order'   => 'DESC',
                      'category_name' => $category_slug
                  );
                    $custom_loop = new WP_Query($args); 
                    if ( $custom_loop->have_posts() ) :  
                        while ( $custom_loop->have_posts() ) : $custom_loop->the_post();
                          global $growbydata_blog_post_counter;
                          $growbydata_blog_post_counter = 0;
                          ?>

                          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                            <?php
                            if ($growbydata_blog_post_counter % 2 == 0) {
                                $content_class = '';
                                $content_class = 'style-bordered-right';
                            } else {
                                $content_class = 'style-bordered-left';
                            }
                            if (!has_post_thumbnail()) {
                                $content_class = 'style-bordered-no-image';
                            }
                            ?>
                            <div class="style-archive style-bordered <?php echo esc_attr($content_class); ?>">

                                <div class="gbd-post-content-block">

                                    <div class="post-content" data-mh="equal-height">                                                                            
                                        <div class="gbd-blog-contents-new fadeIn">
                                            <div class="gbd-featured-blog-img">
                                                <div class="gbd-featured-category-like clearfix">
                                                    <div class="gbd-featured-category-detail">
                                                        <?php
                                                        $blog_type = wp_get_object_terms($post->ID, 'blog_type', array('fields' => 'names'));
                                                        echo (!empty($blog_type)) ? $blog_type[0] : "Article";
                                                        ?>
                                                    </div>
                                                </div>
                                                <?php
                                                $url = get_the_post_thumbnail_url();
                                                $uploads = wp_upload_dir();
                                                $file_path = str_replace($uploads['baseurl'], $uploads['basedir'], $url);
                                                ?>

                                                <?php if ('' != get_the_post_thumbnail() && file_exists($file_path)) : ?>
                                                <div class="post-thumbnail " data-mh="equal-height">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail('growbydata-site-featured-image'); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class='gbd-header-content-blog <?php echo (!file_exists($file_path)) ? "gbd-blog-fullwidth" : ""; ?>'>
                                            <header class="entry-header">
                                                <?php
                                                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" >', '</a></h2>');

                                                if ('post' === get_post_type()) :
                                                    ?>
                                                    <?php // get_template_part( 'components/post/content', 'meta' ); ?>
                                                <?php endif;
                                                ?>
                                                <div class="entry-meta">
                                                    <?php growbydata_blog_posted_on(); ?>
                                                </div>

                                                <div class="gbd-reading-time">
                                                    <span class="separator">|</span> 
                                                    <?php echo do_shortcode('[rt_reading_time  postfix="MIN" postfix_singular="MIN" label="READ"]'); ?>
                                                </div>
                                                <div class="gbd-blog-tags">
                                                 <?php
                                                 $posttags = get_the_tags();
                                                 if ($posttags) {
                                                    ?>
                                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                                    <?php
                                                    foreach ($posttags as $tag) {
                                                        echo "<span><a href='".get_tag_link($tag->term_id)."'>" . $tag->name . "</a></span>";
                                                        if (next($posttags)) {
                                                    echo ', '; // Add comma for all elements instead of last
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                </header>
                            </div><!-- gbd-header-content-blogs -->

                        </div><!-- gbd-blog-contents -->
                    </div>
                </div><!-- gbd-post-content -->

            </div>
            <?php $growbydata_blog_post_counter++; ?>
        </article><!-- #post-## -->

        <?php
    endwhile;
endif;
?>
<!-- reset the main query loop -->
<?php wp_reset_postdata(); ?>
</div><!-- gbd-featured-blog-block -->
</div>
<?php
$cat = get_category_by_slug($category_slug); 
$catID = $cat->term_id;
?>
<!-- Print a link to this category -->
<a class="btn btn-default btn-lg m-btn gbd-view-all-btn" href="<?php echo get_category_link( $catID ); ?>">View All</a>
</div>

</div>
</div>
</div>
</div><!-- gbd-insights-map-monitoring -->

</div><!-- gbd-default-template --> 
</div><!-- gbd-default-template -->
<<<<<<< HEAD
=======

>>>>>>> 3d1245c22bc89a165fde4d0dce66660881d3db75
<?php
get_footer();