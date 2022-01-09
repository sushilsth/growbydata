<?php
/*
Template Name: Home Page Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/blog-css.css?q='. $eci_date->getTimestamp() ; ?>">
<style>
  #schedule-free-consultation.modal.fade .modal-dialog {left: 50%;top: 50%; -webkit-transform: translate(-50%,-50%);-ms-transform: translate(-50%,-50%);-o-transform: translate(-50%,-50%);transform: translate(-50%,-50%);position: relative;margin: 0;}#schedule-free-consultation {z-index: 9999999 !important;}.gbd-banner .slick-slider .slick-arrow{position:absolute;top:35%;z-index:1;width:73px;height:73px;background:#fff;text-align:center;line-height:73px;border-radius:100%;cursor:pointer}.gbd-banner .slick-slider .slick-arrow .fa{font-size:60px;color:#000;font-weight:700;line-height:70px}.gbd-banner .slick-slider .slider-prev{left:15px}.gbd-banner .slick-slider .slider-next{right:15px}.gbd-banner .slick-slider .slider-prev .fa{margin-left:-5px}.gbd-banner .slick-slider .slider-next .fa{margin-right:-5px}.gbd-featured-blog-img img{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)}.home .gbd-blog-wrapper {margin-bottom: 0px;}.home .gbd-featured-blog-block {margin-bottom: 30px;}#schedule-free-consultation .modal-content{padding:15px}#schedule-free-consultation label{display:none;margin-bottom:20px !important;}#schedule-free-consultation h2{margin:20px 0}#schedule-free-consultation input,#schedule-free-consultation select{display:block;width:100%;font-size:16px!important;line-height:24px;padding:0 15px!important;margin-bottom:20px}#schedule-free-consultation .hbspt-form .hs-button.primary.large{font-size:23px!important;background:#129644;border:1px solid #129644;width:252px;height:52px;color:#fff;margin:30px auto 0;padding:0;text-shadow:none!important;text-transform:none!important;box-shadow:none!important}#schedule-free-consultation input.hs-button.primary.large:hover{background:#10863d}@media (max-width:767px) and (min-width:320px){/*.gbd-featured-blog-img img{position:static;transform:unset}*/.home .gbd-featured-blog-block .gbd-featured-blog{width:50%}.gbd-featured-blog-text{height:auto}.home .gbd-featured-blog-block{margin-bottom:20px}.gbd-banner .slick-slider .slick-arrow{width:20px;height:20px;line-height:20px}.gbd-banner .slick-slider .slider-prev{left:0}.gbd-banner .slick-slider .slick-arrow .fa{font-size:16px;line-height:20px}.gbd-banner .slick-slider .slider-prev .fa{margin-left:0}.gbd-banner .slick-slider .slider-next .fa{margin-right:0}.gbd-banner .slick-slider .slider-next{right:0}.gbd-featured-blog-img {height: 164px !important;}#schedule-free-consultation .modal-content {height: 300px;overflow-y: scroll;overflow-x: hidden;}}
  <?php 
  if(detect_webp_browser_support()){
    ?>
    #slider_1110_slide02:before{content:""!important;position:absolute!important;top:0!important;right:-185px!important;height:100%!important;width:546px!important;background:url(https://growbydata.com/wp-content/uploads/2020/08/bg-net-homepage.jpg.webp) no-repeat!important;z-index:1!important}
  <?php } else { ?>
    #slider_1110_slide02:before{content:""!important;position:absolute!important;top:0!important;right:-185px!important;height:100%!important;width:546px!important;background:url(https://growbydata.com/wp-content/uploads/2020/08/bg-net-homepage.jpg) no-repeat!important;z-index:1!important}
  <?php } ?>
</style>

<div class="gbd-home">

  <div class="gbd-banner">
    <div class="gbd-shadow">
      <?php
            // if( have_rows('slider') ):
            //   $content = "";
            //     while( have_rows('slider') ) : the_row();
            //        $content .= get_sub_field('slide');
            //     endwhile; 
            // endif;
            // $d = new DOMDocument();
            // $d->loadHTML($content);
            // foreach($d->getElementsByTagName("h1") as $item){
            //     $h1 = $item->textContent;
            // }
            // echo "<h1 style='display:none' id='pagehone'>".$h1."</h1>";
      ?>
      <div class="slider slider-single-image" id="sliderHTML">
        <?php
            // Check rows exists.
        if( have_rows('slider') ):
                // Loop through rows.
          $i = 0;
          while( have_rows('slider') ) : the_row();
            $i++;
                    // Load sub field value.

            echo "<div>";

            $content = get_sub_field('slide');
            if(detect_webp_browser_support()){
             $content = str_replace('.jpg','.jpg.webp', $content);
             $content = str_replace('.png','.png.webp', $content);
           }
           echo $content;
           echo  '</div>';
         endwhile; 
       endif;
       ?>
     </div>


   </div><!-- gbd-shadow -->
 </div><!-- gbd-banner -->

 <?php 
 $checkHomepageBlock = have_rows('homepage_block_2');
 if ($checkHomepageBlock): ?>

  <div class="container">
    <div class="row">
      <div class="vision-blocks clearfix">
        <h3 class="gbd-allcaps" style="font-weight: 700 !important;margin-top: 0 !important; line-height: 32px;">Our Suite of Products for Marketing Intelligence</h3>
        <?php
        $i = 1;
        while(have_rows('homepage_block_2')): the_row();
          $title = get_sub_field('vision_blocks_title');
          $description = get_sub_field('vision_blocks_description');
          $image = get_sub_field('vision_blocks_image');
          $url = get_sub_field('view_more')['url'];
          ?>
          <div class="col-sm-4 col-md-4 col-xs-12">     
            <div class="vision-block  vision-block-<?php echo $i; ?>"> 

              <div class="gbd-icon-block-wrapper">
                <a href="<?php echo $url; ?>">
                  <div class="gbd-icon-block">
                    <span data-bg='<?php echo $image; ?>' class="lazy resource-sprite vision-block-<?php echo $i; ?>" >
                    </span>
                  </div>
                </a>
              </div><!-- gbd-icon-block-wrapper -->
              <h2 class="title">
                <a href="<?php echo $url; ?>">
                  <?php echo $title; ?> 
                </a>
              </h2>
              <div class="vision-blocks-description">
                <a href="<?php echo $url; ?>">
                  <?php echo $description; ?>
                </a>
              </div>

            </div><!-- Vision block -->
          </div>

          <?php
          $i++;
        endwhile; ?>

      </div><!-- vision-blocks -->


      <div class="col-md-12">
       <?php
       while (have_posts()) : the_post(); ?>
        <div class="entry-content-page">
          <?php the_content(); ?>
        </div>
        <?php
      endwhile;
      wp_reset_query();
      ?>
      <div class="gbd-blog-wrapper">
        <div class="gbd-blog-posts">             
          <div class="gbd-featured-blog-block clearfix">

            <?php
            $args = array(
              'posts_per_page' => 3,
              'post_status' => 'publish',
              'post_type'   => 'post',
              'orderby' => 'date',
              'order'   => 'DESC',
              'meta_query'  => array(
                'relation'    => 'AND',
                array(
                  'key'   => 'featured_post',
                  'value'   => '1',
                  'compare' => '='
                )
              )
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
                                <?php 
                                //the_post_thumbnail('growbydata-site-featured-image'); 
                                $imgthumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
                                $thumbimg = wp_get_attachment_image_src('4899', 'full');
                                ?>
                                <img data-src="<?php echo $imgthumb[0]; ?>" src="<?php echo (is_array($thumbimg)) ?  $thumbimg[0] : ''; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" class="lazyload lazy">
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
                    </div>
                  </div>

                </div>
              </div>
              <div class="gbd-footer-subscribe gbd-news-section">
               <div class="container">
                <h3>Our Coverage in Top Publications</h3>
<!-- <p>Get our Latest Media Coverage and  News</P>
-->

<div class="brands news-logos">
  <div  class="brand-logo white slideInUp">   <span>
    <picture class="lazyload">
      <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/themes/growbydata-website-new/images/digital-commerce.png.webp">
        <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/themes/growbydata-website-new/images/digital-commerce.png" alt="digital-commerce-360">
      </picture>
    </span></div>
    <div class="brand-logo white slideInUp">   <span>
      <picture class="lazyload">
        <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/themes/growbydata-website-new/images/retail-touchpoints.png.webp">
          <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/themes/growbydata-website-new/images/retail-touchpoints.png" alt="retail-touchpoints">
        </picture>
      </span></div>
      <div class="brand-logo white slideInUp">   <span>
        <picture class="lazyload">
          <source type="image/webp" data-srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/themes/growbydata-website-new/images/total_retail.png.webp">
            <img data-src="https://d1giulg0kzu6r6.cloudfront.net/wp-content/themes/growbydata-website-new/images/total_retail.png" alt="totalretail">
          </picture>
        </span></div>
        <div class="brand-logo white slideInUp">   <span>
          <picture class="lazyload">
            <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/images/retail-times.webp">
              <img data-src="<?php echo get_template_directory_uri()?>/images/retail-times.png" alt="retailtimes">
            </picture>
          </span></div>
        </div>

      </div>

    </div>
  </div>

  <div id="schedule-free-consultation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="maillistLabel"  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="form-header">
          <h2>Schedule A Free Demo</h2>
        </div>
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
                  hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array("formName"=>"Schedule Free Consultation Form Home")); ?>);
                }
              };

              document.body.appendChild(script);
            }

            setTimeout(function() {
              HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
            }, 5000);
            
          </script>
        </div>
      </div>
    </div>

  <?php endif; ?> 
  <?php
  get_footer();