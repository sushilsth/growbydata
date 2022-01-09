<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package growbydata_site
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $single_post_featured_image = get_post_meta($post->ID, 'growbydata-site-meta-checkbox', true);
     if ($single_post_featured_image == '') { ?>
        <?php if ( '' != get_the_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'full' ); ?>
                </a>
            </div>
             <?php echo do_shortcode('[addtoany]');?>
        <?php endif; ?>
    <?php } ?>
    <?php if ( is_singular( 'jobs' ) ) { ?>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>
    <?php } else {}?>
    <div class="entry-content">
        <?php
        the_content( sprintf(
        /* translators: %s: Name of current post. */
            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'growbydata-site' ), array( 'span' => array( 'class' => array() ) ) ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'growbydata-site' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>
    <?php echo do_shortcode('[addtoany]');?>
    <?php get_template_part( 'components/post/content', 'footer' ); ?>
</article><!-- #post-## -->