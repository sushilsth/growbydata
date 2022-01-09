<div class="gbd-blog-posts container">
    <?php
    /**
     * Template part for displaying posts.
     *
     * @link https://codex.wordpress.org/Template_Hierarchy
     *
     * @package growbydata_site
     */
    $growbydata_blog_post_counter = 1;
    ?>

    <?php
    
//    while (have_posts()) : $wp_query->the_post();
    /* Start the Loop */
    while (have_posts()) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
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
                                                    $imgthumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
                                                     ?>
                                                     <img data-src="<?php echo $imgthumb[0]; ?>" src="<?php echo (is_array(wp_get_attachment_image_src('4899', 'full'))) ?  wp_get_attachment_image_src('4899', 'full')[0] : ''; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" class="lazyload lazy">
                                                     <?php //the_post_thumbnail('growbydata-site-featured-image'); 
                                                     ?>
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
//                                        $category_detail = get_the_category(get_the_ID()); //$post->ID
//                                        $cat = [];
//                                        $cat_id = $category_detail[0]->term_id;
//                                        foreach ($category_detail as $key => $value) {
//                                            echo "<span><a href='" . get_category_link($value->term_id) . "'>" . $value->cat_name . "</a></span> ";
//                                        }
                                        echo "<span><a href='javascript:void(0);'>" . single_cat_title('', false) . "</a></span> ";
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
//    the_posts_navigation();
    ?>
</div>
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer
echo '<div class="gbd-pagination">';
echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'prev_text' => __('<i class="fa fa-long-arrow-alt-left" aria-hidden="true"></i>'),
    'next_text' => __('<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>'),
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages
));
echo '</div>';
?>