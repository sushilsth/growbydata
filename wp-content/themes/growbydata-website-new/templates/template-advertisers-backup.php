<?php
/*
Template Name: Advertisers-backup
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php $eci_date = new DateTime(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/resource-css.css?q='. $eci_date->getTimestamp() ; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/blog-css.css?q='. $eci_date->getTimestamp() ; ?>">
<?php get_header(); ?>

<div class="gbd-default-template">
	<header class="entry-header">
		<?php //the_title('<h1 class="page-title">', '</h1>'); ?>
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
	<div class="gbd-advertisers-wrapper">
		
		<div class="gbd-advertisers-top-section">
			<div class="container">
				<h1>What is Ad Intelligence?</h1>
				<p>Ad Intelligence is a solution that provide detailed insights into the advertising activities of brands, retailers and agencies on a near real time basis. Learn how to use these granular data to generate the insights to improve Ad performance across the channels like Google , Amazon, Walmart & ebay. </p>
				<a class="btn btn-default btn-lg m-btn free-trial" target="_blank">Check out Free Ad Intelligence Reports</a>
			</div>
		</div><!-- gbd-advertisers-top-section -->

		<div class="gbd-learn-optimize">
			<h2>Learn How to Optimize Your Ads with Ad Intelligence</h2>

<!-- first part add intelligence category ko posts lists --> 
			<div class="gbd-blog-posts container">
				<!-- <div class="gbd-blog-titles">Featured Articles</div> -->
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

											<div class="post-content">                                                                            
												<div class="gbd-blog-contents-new fadeIn clearfix">
													<div class="gbd-featured-blog-img">

														<?php
														$url = get_the_post_thumbnail_url();
														$uploads = wp_upload_dir();
														$file_path = str_replace($uploads['baseurl'], $uploads['basedir'], $url);
														?>

														<?php if ('' != get_the_post_thumbnail() && file_exists($file_path)) : ?>
														<div class="post-thumbnail">
															<a href="<?php the_permalink(); ?>">
																<?php
																$imgthumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
																?>
																<img data-src="<?php echo $imgthumb[0]; ?>" src="<?php echo (is_array(wp_get_attachment_image_src('4899', 'full'))) ?  wp_get_attachment_image_src('4899', 'full')[0] : ''; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" class="lazyload lazy">

																<?php //the_post_thumbnail('growbydata-site-featured-image'); ?>
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
                                            
                                            
                                            <div class="gbd-featured-blog-text">
                                            	<?php

                                            	echo excerpt(27);
                                            	?>
                                            	<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i>
                                            	','growbydata-site');  ?></a> 
                                            </div>


                                            <div>
                                            	<div class="gbd-featured-category-detail">
                                            		<?php
                                            		$blog_type = wp_get_object_terms($post->ID, 'blog_type', array('fields' => 'names'));
                                            		echo (!empty($blog_type)) ? $blog_type[0] : "Case Study";
                                            		?>
                                            	</div>

                                            	<div class="gbd-reading-time">
                                            		<span class="separator">|</span> 
                                            		<?php echo do_shortcode('[rt_reading_time  postfix="Minute" postfix_singular="Minute" label="Read"]'); ?>
                                            	</div>
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
<?php
echo "<div class='gbd-pagination'>" . paginate_links(array(
	'total' => $the_query->max_num_pages,
	'prev_text' => __('<i class="fa fa-long-arrow-alt-left" aria-hidden="true"></i>
		'),
	'next_text' => __('<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>
		')
)) . "</div>";
?>
</div><!-- gbd-learn-optimize -->

<div class="gbd-subscribe-blog-post clearfix">
	<i class="fa fa-envelope" aria-hidden="true"></i>
	<div class="gbd-blog-container text-center">
		<h4>Did You Like Our Post?</h4>
		<span>Subscribe To Receive Latest Insights In Your Inbox</span>
		<div class="clearfix"></div>
		<script>
			function loadjs(file) {
				var script = document.createElement("script");
				script.type = "text/javascript";
				script.charset = "utf-8";
				script.src = file;
				script.onload = function(){
					var hbsptobj = JSON.stringify(<?php includeWithVariables('hubspotForms.php', array('formName'=>'Blog Sign up Form')); ?>);
					var script1 = document.createElement("script");
					script1.innerHTML = "hbspt.forms.create("+hbsptobj+");";
                // document.getElementById("latest-insights-form").innerHTML = script1;
                jQuery("#like_our_post_form").html(script1);
            };
            document.body.appendChild(script);
        }
        loadjs("//js.hsforms.net/forms/v2.js");
    </script>
    <div id="like_our_post_form"></div>             
</div>
</div><!-- gbd-subscribe-blog-post -->

<div class="gbd-footer-subscribe gbd-news-section gbd-blog-news-section">
	<div class="container">
		<span>~Our Coverage in Top Publications~</span>
<!-- <p>Get our Latest Media Coverage and  News</P> -->
<div class="brands news-logos">
	<div  class="brand-logo white slideInUp">   
		<span>
			<picture>
				<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/digital-commerce-black.jpg.webp">
					<img src="<?php echo get_template_directory_uri()?>/images/digital-commerce-black.jpg" alt="digital-commerce-360">
				</picture>
			</span>
		</div>
		<div class="brand-logo white slideInUp">   
			<span>
				<picture>
					<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/retail-touchpoints-black.jpg.webp">
						<img src="<?php echo get_template_directory_uri()?>/images/retail-touchpoints-black.jpg" alt="retail-touchpoints">
					</picture>
				</span>
			</div>
			<div class="brand-logo white slideInUp">   
				<span>
					<picture>
						<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/total_retail_black.png.webp">
							<img src="<?php echo get_template_directory_uri()?>/images/total_retail_black.png" alt="totalretail">
						</picture>
					</span>
				</div>
			</div>
		</div>
	</div><!-- .gbd-blog-news-section -->


<!-- slider need here -->
	<div class="gbd-blog-bot-slider">
		<div class="container">
			<div class="slider-blog-post">
				<?php
    $category_detail = get_categories(); //$post->ID
    foreach ($category_detail as $cat) {
    	$val = get_field('blog_category_slider_content', 'category_' . $cat->term_id);
    	if($val != "" && $val!= NULL){
    		?>
    		<div>
    			<?php echo get_field('blog_category_slider_content', 'category_' . $cat->term_id); ?>
    		</div>
    		<?php
    	}    
    }
    ?>
</div>
</div>
</div><!-- .gbd-blog-bot-slider -->
<script>
	jQuery(document).ready(function(){
		var slider_single_image = jQuery('.slider-blog-post');
		if (slider_single_image.length) {
              //select box
              slider_single_image.slick({
              	infinite: true,
              	speed: 1000,
              	slidesToShow: 1,
              	autoplay: true,
              	arrows: true,
              	autoplaySpeed: 3000,
              	adaptiveHeight: true    
              });
          }
      })
  </script>
</div><!-- gbd-advertisers-wrapper -->

</div><!-- gbd-default-template -->

</div>
</div>
</div>

<?php
get_footer();