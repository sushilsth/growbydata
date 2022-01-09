<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package growbydata_site
 */
global $growbydata_blog_post_counter;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ($growbydata_blog_post_counter % 2 == 0) {
        $content_class = '';
        $content_class = 'style-bordered-right';
        } else {
        $content_class = 'style-bordered-left';
        }
    if(!has_post_thumbnail()){
        $content_class = 'style-bordered-no-image';
    }

    ?>
    <div class="style-archive style-bordered <?php echo esc_attr($content_class); ?>">
        <?php if ( '' != get_the_post_thumbnail() ) : ?>
            <div class="post-thumbnail" data-mh="equal-height">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'growbydata-site-featured-image' ); ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="post-content" data-mh="equal-height">
            <header class="entry-header">
                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" >', '</a></h2>' );

                if ( 'post' === get_post_type() ) : ?>
                <?php get_template_part( 'components/post/content', 'meta' ); ?>
                <?php
                endif; ?>
            </header>
            <div class="entry-content">
                <?php
                the_excerpt();
                ?>

                <a href="<?php the_permalink(); ?>" class="btn-main"><?php _e('Continue Reading','growbydata-site'); ?></a>
            </div>
        </div>
    </div>
    <?php $growbydata_blog_post_counter++; ?>
</article><!-- #post-## -->