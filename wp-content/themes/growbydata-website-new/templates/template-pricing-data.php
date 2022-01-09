<?php
/*
Template Name: Pricing data Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/blog-css.css?q='. $eci_date->getTimestamp() ; ?>">
<div class="gbd-default-template price-intelligence">
  <div class="gbd-banner">
    <div class="gbd-shadow">
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

     </div><!-- gbd-shadow -->
   </div><!-- gbd-banner -->
   <div class="container">
    <div class="row">
     <div class="col-md-12 col-sm-12">
       <div class="gbd-inner-page-wrapper">

                  <?php
                  while (have_posts()) : the_post(); ?>
                    <div class="entry-content-page">
                      <?php the_content(); ?>
                    </div>
                    <?php
                  endwhile;
                  wp_reset_query();
                  ?>

                  <div class="gbd-default-circle-block clearfix ">

                    <div class="gbd-default-circle gbd-default-circle1 fadeIn">
                      <div class="gbd-default-circle-orange">
                        <span>
                          <picture>
                            <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-sku-level.webp">
                              <img src="<?php echo get_template_directory_uri()?>/images/gbd-sku-level.png" alt="gbd-sku-level">
                            </picture>
                          </span>
                        </div>
                        <div class="gbd-default-circle-text">
                          Precise to the <br>SKU level
                        </div>
                      </div>
                      <div class="gbd-default-circle gbd-default-circle2 fadeIn
                      ">
                      <div class="gbd-default-circle-red">
                        <span>
                          <picture>
                            <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-ensure-accuracy.webp">
                              <img src="<?php echo get_template_directory_uri()?>/images/gbd-ensure-accuracy.png" alt="gbd-ensure-accuracy"> 
                            </picture>
                          </span>
                        </div>
                        <div class="gbd-default-circle-text">
                          Double-verified to <br>ensure accuracy
                        </div>
                      </div>
                      <div class="gbd-default-circle gbd-default-circle3 fadeIn">
                        <div class="gbd-default-circle-blue">
                          <span>
                            <picture>
                              <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-fit-needs.webp">
                                <img src="<?php echo get_template_directory_uri()?>/images/gbd-fit-needs.png" alt="gbd-fit-needs"> 
                              </picture>
                            </span>
                          </div>
                          <div class="gbd-default-circle-text">
                            Customized to fit <br>your needs
                          </div>
                        </div>

                      </div><!-- .gbd-default-circle-block -->

                    </div>
                  </div>
                </div>
              </div>
              <div class="what_included">

                <div class="container">
                  <div class="row">
                   <div class="col-md-12 col-sm-12">
                    <div class="col-md-4 col-sm-4 CPI_img slideRight">
                      <span>
                        <picture>
                          <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/CPI-img.webp">
                            <img src="<?php echo get_template_directory_uri()?>/images/CPI-img.png" alt="competitive price intelligence"> 
                          </picture>
                        </span>
                      </div>
                      <div class="col-md-8 col-sm-8 whats_included fadeIn">
                        <h3>What is Included with this Solution</h3>
                        
                        <?php if (have_rows('price_intel-what-included')): ?>
                          <div class="gbd-community-blocks">
                            <?php
                            $i = 1;
                            while (have_rows('price_intel-what-included')): the_row();
                              $title = get_sub_field('title');
                              $description = get_sub_field('description');
                              ?>
                              <div class="gbd-whatincluded gdb-whatincluded-<?php echo $i; ?>"> 
                               
                               <div class="title">
                                 <?php echo $description; ?>

                               </div>

                             </div>

                             <?php
                             $i++;
                           endwhile; ?>

                         </div>
                       <?php endif; ?> 
                     </div>

                   </div>
                 </div>
               </div>
             </div>

             <div class="container">
              <div class="row">
               <div class="col-md-12 col-sm-12">
                 <div class="gbd-inner-page-wrapper">
                  <div class="subtitle"><h2>Frequently Asked Questions</h2></div>
                  <div class="gbd-retail-price-accordin gbd-accordin">
                    <?php //echo do_shortcode('[WPSM_AC id=844]'); ?>
                    <div class="accordion" id="accordion">
                      <?php

              // Check rows exists.
                      if( have_rows('price_intelligent') ):
                  // Loop through rows.
                        $i = 0;
                        while( have_rows('price_intelligent') ) : the_row();
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

          <div class="gbd-insights-price-intelligence">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="entry-content-page">
                    <h3>Insights on Price Intelligence</h3>
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

                                            <!-- <div class="gbd-categories">
                                                <?php
                                                $category_detail = get_the_category(get_the_ID()); //$post->ID
                                                $cat = [];
                                                $cat_id = $category_detail[0]->term_id;
                                                foreach ($category_detail as $key => $value) {
                                                    
                                                    echo "<span><a href='" . get_category_link($value->term_id) . "'>" . $value->cat_name . "</a></span> ";
                                                    break;
                                                }
                                                ?>           
                                              </div> -->
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
            </div><!-- gbd-insights-price-intelligence -->
            
          </div><!-- gbd-default-template -->
          <style type="text/css">
            .gbd-category-btn {
              display: block;
              text-align: center;
              margin: 30px auto 0;
              background: #ac0000;
              color: #fff;
              width: 281px;
              height: 52px;
              line-height: 52px;
              font-size: 15px;
              letter-spacing: 0.7px;
              text-transform: uppercase;
            }
            .gbd-category-btn:hover {
              color: #fff;
              text-decoration: none;
            }
          </style>
        
          <?php
          get_footer();