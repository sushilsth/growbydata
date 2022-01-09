<div class="row">
    

    <div class="gbd-blog-posts container mt-5">
        <div class="gbd-featured-blog-block clearfix">
           
            <?php
            $paged = get_query_var('paged');
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => $paged,
                'post_status' => 'publish',
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'featured_post',
                        'value' => '1',
                        'compare' => '='
                    )
                )
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();


                    global $growbydata_blog_post_counter;
                    $growbydata_blog_post_counter = 0;
                    ?>
                    <?php
                    if (true) {
                        ?>
                        <article  class="col-md-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
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
                            <div class="style-archive style-bordered <?php echo esc_attr($content_class); ?> ">

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
                                                        $imgthumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
                                                        ?>
                                                        <img data-src="<?php echo $imgthumb[0]; ?>" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" class="lazyload lazy">
                                                        
                                                        <?php//the_post_thumbnail('growbydata-site-featured-image'); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class='gbd-header-content-blog <?php echo (!file_exists($file_path)) ? "gbd-blog-fullwidth" : ""; ?>'>
                                            <header class="entry-header">
                                                <?php
                                                the_title('<h2 class="entry-title font-weight-bold"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" >', '</a></h2>');

                                                if ('post' === get_post_type()) :
                                                    ?>
                                                    <?php // get_template_part( 'components/post/content', 'meta' ); ?>
                                                <?php endif;
                                                ?>
                                                <div class="entry-meta post-date">
                                                <?php the_time(get_option('date_format')) ?>
                                                </div>

                                                <div class="gbd-reading-time py-2">
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
    }
}
/* Restore original Post Data */
wp_reset_postdata();
}
?>
</div>
</div>
</div>
<?php
echo "<div class='gbd-pagination text-center'>" . paginate_links(array(
    'total' => $the_query->max_num_pages,
    'prev_text' => __('<i class="fa fa-long-arrow-alt-left" aria-hidden="true"></i>
        '),
    'next_text' => __('<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>
        ')
)) . "</div>";
?>