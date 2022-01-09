<?php
/*
Template Name: Pricing Analyst
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

	<div class="gbd-advertisers-wrapper">
		
		<div>
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

		<div class="gbd-learn-optimize">
			<h2>Learn How to Optimize Your Ads with Ad Intelligence</h2>

			<!-- first part add intelligence category posts lists --> 
			<div class="add-intelligence-lists">
				<div class="gbd-blog-posts container">
					<div class="gbd-featured-blog-block clearfix">
						<?php 
						$category_slug = get_field("blog_category_slug", get_the_ID());                   
						?>
						<?php
						$args = array(
							'posts_per_page' => 4,
							'post_status' => 'publish',
							'post_type'   => 'post',
							'orderby' => 'date',
							'order'   => 'DESC',
							'category_name' => $category_slug
						);
			// The Loop
						$custom_loop = new WP_Query($args); 
						if ( $custom_loop->have_posts() ) :  
							while ( $custom_loop->have_posts() ) : $custom_loop->the_post();
								$imgthumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
								$thumbimg = wp_get_attachment_image_src('4899', 'full');
								?>
								<div class="gbd-post-content-block clearfix">   
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
									<div class="gbd-header-content-blog">  
										<header class="entry-header">
											<h2 class="entry-title"> 
												<a class="Advertisers-class" href="<?php echo get_the_permalink() ?>" rel="bookmark"><?php echo get_the_title() ?></a>
											</h2>
										</header>
										<div class="gbd-featured-blog-text">
											<?php

											echo excerpt(28);
											?> <a href="<?php the_permalink(); ?>" class="readmore"><?php _e('READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i>
											','growbydata-site');  ?></a> 
										</div>
										<div class="entry-meta">
											<?php growbydata_blog_posted_on(); ?>
										</div>
										<div class="gbd-reading-time">
											<span class="separator">|</span> 
											<?php echo do_shortcode('[rt_reading_time  postfix="Minute" postfix_singular="Minute" label="Read"]'); ?>
										</div>
									</div>

								</div>

								<?php
							endwhile;
						endif;
						?>
						<?php
						wp_reset_postdata();
						?>
					</div>
				</div>
				<?php
				$cat = get_category_by_slug($category_slug); 
				$catID = $cat->term_id;
				?>
			</div>

			<!-- first part add intelligence category posts lists --> 
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
				<div  class="brand-logo white slideInUp">   <span>
					<picture class="lazyload">
						<source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/images/digital-commerce-black.jpg.webp">
							<img data-src="<?php echo get_template_directory_uri()?>/images/digital-commerce-black.jpg" alt="digital-commerce-360"> 
						</picture>
					</span></div>
					<div class="brand-logo white slideInUp">   <span>
						<picture class="lazyload">
							<source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/images/retail-touchpoints-black.jpg.webp">
								<img data-src="<?php echo get_template_directory_uri()?>/images/retail-touchpoints-black.jpg"  alt="retail-touchpoints"> 
							</picture>
						</span></div>
						<div class="brand-logo white slideInUp">   <span>
							<picture class="lazyload">
								<source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/images/total_retail_black.png.webp">
									<img data-src="<?php echo get_template_directory_uri()?>/images/total_retail_black.png" alt="totalretail"> 
								</picture>
							</span></div>
							<div class="brand-logo white slideInUp">   <span>
								<picture class="lazyload">
									<source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/images/retail-times-be.webp">
										<img data-src="<?php echo get_template_directory_uri()?>/images/retail-times-be.png" alt="retailtimes">
									</picture>
								</span></div>
							</div>
						</div>
					</div><!-- .gbd-blog-news-section -->

					<!-- second part slider  here -->
					<div class="gbd-blog-bot-slider">
						<div class="container">
							<div class="slider-blog-post">
								<?php 

								if (have_rows('slider_repeater')) {
									while (have_rows('slider_repeater')) { 
										the_row();

										$slider_title = get_sub_field('slider_title');
										$slider_content = get_sub_field('slider_content');
										$slider_cta_button = get_sub_field('slider_cta_button');
										$slider_cta_button2 = get_sub_field('slider_cta_button2');
										?>

										<div>
											
											<div class="gbd-blog-slider-learn">
												<h2><a href="/price-intelligence">
													<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
													<?php echo $slider_title; ?>
												</a>
											</h2>
										</div>

										<p>
											<span><?php echo $slider_content; ?></span>
										</p>

										<?php
										if ($slider_cta_button) {
											$link_url = $slider_cta_button['url'];
											$link_title = $slider_cta_button['title'];
											$link_target = $slider_cta_button['target'] ? $slider_cta_button['target'] : '_self';	
											?>					
											<div class="gbd-blog-slider-btns">

												<a class="btn btn-default btn-lg free-price-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

											<?php	}

											if ($slider_cta_button2) {
												$link_url2 = $slider_cta_button2['url'];
												$link_title2 = $slider_cta_button2['title'];
												$link_target2 = $slider_cta_button2['target'] ? $slider_cta_button2['target'] : '_self';	
												?>					

												<a class="btn btn-default btn-lg free-price-btn" href="<?php echo esc_url( $link_url2 ); ?>" target="<?php echo esc_attr( $link_target2 ); ?>"><?php echo esc_html( $link_title2 ); ?></a>
											</div>

										<?php	}?>

									</div>
									<?php		
								}
								wp_reset_postdata();
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