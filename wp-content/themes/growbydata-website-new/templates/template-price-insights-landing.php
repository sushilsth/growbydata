<?php
/*
Template Name: Landing-Page-Price-Insights
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header('new'); ?>
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
            </div>
<div class="recent-articles-Wrapper">
    <div class="container">
    <h2>Recent Articles
        <br><span>Subscribe Above to Get Email Alerts!
</span></h2>

<div class="subscribe-blog-wrapper">
  <?php
    $arr = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'DESC',
        'post_status' => 'publish',
        'posts_per_page' => '4'
    );
    $the_query = new WP_Query( $arr );

    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
  ?>
  <div class="subcribe-blog">
    <div class="gbd-featured-blog-img">
      <a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank"> 
      <?php 
        $url = get_the_post_thumbnail_url();
        $uploads = wp_upload_dir();
        $file_path = str_replace( $uploads['baseurl'], $uploads['basedir'], $url );

      if ( '' != get_the_post_thumbnail() && file_exists($file_path)) :
         the_post_thumbnail( 'growbydata-site-featured-image' );
       endif; ?>
     </a>
    </div>

    <div class="gbd-featured-category-like clearfix">
    <div class="gbd-featured-category-detail">
       <?php
        $category_detail = get_the_category(get_the_ID());//$post->ID
        echo $category_detail[0]->cat_name;
        ?>                          
    </div>
    </div><!-- gbd-featured-category-like -->

    <div class="gbd-featured-blog-contents">
        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" >', '</a></h2>' ); ?>                                 
      <div class="gbd-featured-blog-text">
         <a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank" style="color:inherit;"> <?php echo excerpt(20);  ?> </a>                            
      </div>

    </div>

  </div>
    <?php } } ?>
</div>
</div>
</div>
<?php
get_footer();