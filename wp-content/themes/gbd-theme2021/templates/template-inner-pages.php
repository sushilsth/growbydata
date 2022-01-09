<?php
/*
Template Name: Innerpage Template
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<div class="container">
<div class="gbd-insights-price-intelligence gbd-insights-map-monitoring">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="entry-content-page">
                 <header class="entry-header">
                    <?php the_title('<h1 class="page-title">', '</h1>'); ?>
                </header>
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
            <div class="gbd-blog-wrapper">
              <div class="gbd-blog-posts">
              <h3>Insights on <?php 
                    $category_slug = get_field("blog_category_slug", get_the_ID());                   
                    ?></h3>             
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
                                                    <?php //growbydata_blog_posted_on(); ?>
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


    </div>

<?php
get_footer();