<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GBD-Theme2021
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	$url = get_the_post_thumbnail_url();
	$uploads = wp_upload_dir();
	$file_path = str_replace($uploads['baseurl'], $uploads['basedir'], $url);
	?>
	<?php if ('' != get_the_post_thumbnail() && file_exists($file_path)) : $noImgClass = "";?>
	<div class="gbd-featured-blog-img">
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php
				$imgthumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
				?>
				<img data-src="<?php echo $imgthumb[0]; ?>" src="<?php echo (is_array(wp_get_attachment_image_src('4899', 'full'))) ?  wp_get_attachment_image_src('4899', 'full')[0] : ''; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" class="lazyload lazy">
			</a>
		</div>
	</div>
<?php else:
$noImgClass = "gbd-noimg";
endif; ?>
<div class="gbd-header-content-blog <?php echo $noImgClass; ?>">
	<div class="gbd-category-title">
		<?php
              $category_detail = get_the_category(get_the_ID());//$post->ID
              
              foreach ($category_detail as $key => $value) {
              	echo "<a href='". get_category_link( $value->term_id )."'>".$value->cat_name."</a>";
              	break;
              }
              ?>
          </div>
          <header class="entry-header">
          	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

          	<?php if ( 'post' === get_post_type() ) : ?>
          				<div class="entry-meta-1">
			<?php the_time('F jS, Y'); ?>
		</div><!-- .entry-meta -->
          	<?php endif; ?>
          </header>
          <div class="entry-summary">
          	<?php the_excerpt(); ?>
          </div>
      </div>

  </article>
