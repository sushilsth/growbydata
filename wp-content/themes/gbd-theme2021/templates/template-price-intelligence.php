<?php
/*
Template Name: Price Intelligence
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<?php $eci_date = new DateTime(); ?>
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style-new.css?q='. $eci_date->getTimestamp() ; ?>"> -->

<div class="gbd-default-template price-intelligence">
  <section class="gbd-banner">
    <div class="bg_cover-banner marketplace-banner price-intel-banner text-white">
      <?php the_field('price_intel-banner'); ?>
    </div>
  </section><!-- gbd-banner -->

  <!-- first -->
  <section>
    <div class=" odd bgwhite block-1">
      <?php if (have_rows('first-block')): ?>
        <?php
        $i = 1;
        while (have_rows('first-block')): the_row();
          $title = get_sub_field('title');
          $image = get_sub_field('image');          
          $listing= get_sub_field('listing');
          ?>
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12 col-12 pr-md-5 text-center align-self-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
              </span></div>
              <div class="col-md-6 col-sm-12 pl-md-4 mb-4 mt-4 mb-md-0 mt-md-0 order-first order-md-2 align-self-center">
                <div class="right-text-list text-left align-self-center">
                  <h2 class="pb-3"><?php echo $title; ?> 
                </h2>
                <div class="list-top"><?php echo $listing; ?></div>
              </div>
            </div>
          </div>
        </div>
        <?php
        $i++;
      endwhile; ?>
    <?php endif; ?> 
  </div>

</section>

<!-- first -->

<!-- second -->

<section class="what-included">
  <div class=" text-white even background-light block-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <div class="subtitle text-center"><h2>What is Included with this Solution</h2></div>
          <div class="what-included-img">
            <picture>
              <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/what-included.webp">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/what-included.png" alt="what-included"> 
              </picture>
            </div>

            <div class="what-included-block">
              <div class="row">
              <?php if (have_rows('price_intel-what-included')): ?>
                  <?php
                  $i = 1;
                  while (have_rows('price_intel-what-included')): the_row();
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    ?>
                    <div class="gbd-whatincluded col-md-6 col-sm-12 float-left gdb-whatincluded-<?php echo $i; ?>"> 

                     <div class="title">
                       <?php echo $description; ?>
                     </div>

                   </div>

                   <?php
                   $i++;
                 endwhile; ?>
             <?php endif; ?> 
           </div>
         </div>
         </div>
       </div>
     </div>
   </div>
 </section>

 <!-- second -->



 <!-- bluebanner-bottom form section -->
<section>

  <div class="prodfeed-blue-banner enforce-map-bottom-banner" id="price-intel-bottom-banner">
   <?php if (have_rows('bottom-block')): ?>

    <?php
    $i = 1;
    while (have_rows('bottom-block')): the_row();
      $title = get_sub_field('title');
      $description = get_sub_field('description');          
      // $talktoexpert= get_sub_field('talktoexpert');
      ?>

      <div class="container">
        <div class="row">
          <div class="col-md-12 py-5 text-center">
            <h3 class="text-white text-center font-weight-bold"><?php echo $title; ?></h3>
            <p class="text-white text-center"><?php echo $description; ?></p>
            <div class="mb-0 mx-auto">
<!--               <a class="btn px-3 py-2 orange_btn" href="<?php //echo esc_url( $talktoexpert ); ?>">
-->                

<!-- <a class="btn px-5 py-2 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">
  Talk to an Expert and Learn How
</a> -->

<?php //get_template_part( 'template_parts', 'template-schedule-demo-solution-pages-form' ); ?>
 <?php include 'template_parts/template-schedule-demo-solution-pages-form.php';?> 
</div>
</div></div>
</div>
<?php
$i++;
endwhile; ?>
<?php endif; ?>
</div>
</section>
<!--bluebanner-bottom form section -->

<!-- FAQ Section -->

 <section class="gbd-inner-page-faq bgwhite">
   <div class="container">
    <div class="row">
     <div class="col-md-12 col-sm-12">
      <div class="subtitle text-center"><h2>Frequently Asked Questions</h2></div>
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
                      <i class="fas fa-arrow-circle-down"></i> 
                      <?php echo get_sub_field('accordion_title'); ?>
                    </button>              
                  </h2>
                </div>
                <div id="collapse<?php echo $i; ?>" class="collapse">
                  <div class="card-body" style="overflow-x: auto">
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
</section>

<!-- FAQ Section -->

 

<!-- gbd-insights-price-intelligence -->
<section class="gbd-insights-price-intelligence">
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
                                              <div class="entry-meta post-date">
                                                <?php the_time(get_option('date_format')) ?>
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
                      <a class="btn gbd-view-all-btn orange_btn" href="<?php echo get_category_link( $catID ); ?>">View All</a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </section><!-- gbd-insights-price-intelligence -->



            
          </div><!-- gbd-default-template -->
          
          <?php
          get_footer();