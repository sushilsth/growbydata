<?php
/*
Template Name: Topics Template-Marketing Intelligence
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>


<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>
<script type="text/javascript">
    var accordionstr  = "topics-accordion";
</script>
<div class="gbd-topics-template">
  <header class="entry-header">
    <?php //the_title('<h1 class="page-title">', '</h1>'); ?>
  </header>


  <section>
    <!-- GBD Static Banner -->
    <div class="gbd-landing-page-banner ">
 <div class="bg_cover-banner text-white landing-page-banner text-white px-10 py-5 topics-banner-ad-intel topics-banner-marketing-intel">
      <?php the_field('banner-topics'); ?>
    </div>
  </div>
  </section>
  <!-- GBD Static Banner -->


<!-- First Content -->
  <section>
    <div class="container">
    <div class="odd bgwhite block-entry-content">
            <div class="row">   
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
</div>
</div>
</div>
</div>
  </section>

<!-- First content ends -->


<!-- Second -->
<section>
  <div class="even background-light block-1">
        <div class="container">
          <div class="row">
             <div class="col-md-12">
                  <?php the_field('first-block'); ?>
</div>
        </div>
  </div>
</div>
  </section>

<!-- Third section -->


<section>
<div class="even bgwhite block-2 marketing-intel-block">
<div class="container">
  <div class="row">
      <div class="col-md-12">
        <h2 class="font-weight-bold mb-3">How to Evaluate Online Marketing Intelligence Software for eCommerce?</h2>
        <h3 style="color:#333333" class="mb-3">Types of Marketing Intelligence that Needs to Be Unified across the Shopper Journey  to Optimize the Digital Shelf</h3>
      </div>

               <div class="gbd-enforce-map-faq-accordin gbd-accordin col-md-12 gbd-marketing-intel-faq">
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
                        <?php echo get_sub_field('accordion_title'); ?>                       
                         <i class="fas fa-arrow-circle-up"></i> 

                      </button>              
                    </h2>
                  </div>
                  <div id="collapse<?php echo $i; ?>" class="collapse accordion-collaspe">
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
</section>

<!-- Blue background section -->
<section>
    
      <div class="even  bgwhite  block-3 text-white blue-backround-container" style="background: #59a4b0">
               <div class="container">
          <div class="row">
             <div class="col-md-12">
                  <?php the_field('blue-block'); ?>
            </div>

        </div>
      </div>
  </div>

</section>

<!-- fourth -->
<section>

  <div class="even  bgwhite  block-4">
  <?php if (have_rows('third-block')): ?>

      <?php
      $i = 1;
      while (have_rows('third-block')): the_row();
        $title = get_sub_field('title');
        $image = get_sub_field('image');          
        $listing= get_sub_field('listing');
        ?>
        <div class="container">
          <div class="row">
             <div class="col-md-12"> <h2 class="pb-3 font-weight-bold"><?php echo $title; ?> </h2>
              </div>
                 <div class="col-md-6 col-sm-12 mb-3">
              <div class="right-text-list text-left align-top">
              <div class="list-top"><?php echo $listing; ?></div>
                      <a class="btn px-5 py-2 mb-3 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">Get a Demo</a>
            </div>
          </div>
            <div class="col-md-6 col-sm-12 align-self-center text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
            </span></div>
         
        </div>
      </div>
      <?php
      $i++;
    endwhile; ?>
    <?php endif; ?>
  </div>
  </section>

  <!-- Third container -->



<!-- 2nd -->
<section>
<div class="topics-infographics  px-5 py-5 background-light mb-150 topics-marketing-intel">
   <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 align-self-center ">    <h2 class="text-center mb-3 font-weight-bold">Marketing Intelligence Resources</h2>
</div>
          <?php if (have_rows('infographics-block')): ?>
    <?php
    $i = 1;
    while (have_rows('infographics-block')): the_row();
      $image = get_sub_field('image');          
      $link=get_sub_field('link');
      ?>

      <div class="col-md-3 col-xs-12">
             <div class="gbd-infographics-block">
                                    <div class="gbd-infographics-img">
                                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                                </div>
                                    <div class="gbd-infographics-info text-center font-weight-bold mt-3">
       <a class="button" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                                    </div>
                                </div>
                              </div>
 
<?php
    $i++;
  endwhile; ?>
<?php endif; ?> 
        </div>
      </div>
</div>
</section>


<!-- gbd-insights-price-intelligence -->
<section class="gbd-insights-price-intelligence mb-150">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="entry-content-page">
          <h2 class="text-center mb-5 font-weight-bold" >Insights on Marketing Intelligence</h2>
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
                      <a class="btn gbd-view-all-btn orange_btn" href="<?php echo site_url('/blogs'); ?>">View All</a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </section><!-- gbd-insights-price-intelligence -->
<?php
get_footer();
