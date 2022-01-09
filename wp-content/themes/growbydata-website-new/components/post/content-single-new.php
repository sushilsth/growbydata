<script src="https://platform.twitter.com/widgets.js" type="text/javascript"></script>
<?php get_header(); ?>

<div class="clearfix"></div>
<div class="gbd-blog-article-v2">
	<div class="gbd-blog-article-block">
		<div class="gbd-blog-article">
			<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row">
					<div class="col-md-9">
						<div class="gbd-blog-article-top clearfix">

							<div class="gbd-featured-article-image">
								<?php
								$post_id = $post->ID;
								$single_post_featured_image = get_post_meta($post->ID, 'growbydata-site-meta-checkbox', true);
								if ($single_post_featured_image == '') { ?>
									<?php if ( '' != get_the_post_thumbnail() ) : ?>
										<div class="post-thumbnail alignleft feature-img-holder">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('growbydata-site-featured-image'); ?>
											</a>
										</div>
									<?php endif; ?>
								<?php } ?>
								<?php 
								wpb_set_post_views(get_the_ID());
								?>
							</div>
							<div class="gbd-posted-dates">
								<?php echo growbydata_blog_posted_on(); ?> 

								<div class="gbd-reading-time">
									<?php echo do_shortcode('| [rt_reading_time  postfix="MIN" postfix_singular="MIN" label="READ"]'); ?>
								</div>

							</div>

							<h1><?php the_title(); ?></h1>
							<h4>By <?php echo get_the_author(); ?></h4>
											<div class="gbd-topics-categories">
								<?php
	          $category_detail = get_the_category(get_the_ID());//$post->ID
	          $cat = [];
	          $cat_id = $category_detail[0]->term_id; 
	          foreach ($category_detail as $key => $value) {
	          	echo "<span><a href='". get_category_link( $value->term_id )."'>".$value->cat_name."</a></span> ";
	          }
	          ?>
	          	
	          </div>




	      <div class="gbd-fb-twt-widget">
	      	<div class="gbd-twiiter-widget">
	      		<a href="http://twitter.com/share" class="twitter-share-button"
	      		data-url="<?php the_permalink(); ?>"
	      		data-via="wpbeginner"
	      		data-text="<?php the_title(); ?>"
	      		data-related="syedbalkhi:Founder of WPBeginner"
	      		data-count="no">Tweet</a>
	      	</div>

	      	<div class="fb-like" data-href="<?= get_permalink(); ?>" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false">
	      	</div>
	      </div>

	</div><!-- gbd-blog-article-top -->

	<div class="gbd-blog-article-mid clearfix">


		<div class="entry-content">
			<?php
			the_content(); 
			?> 

			<?php comments_template(); ?> 
		</div>

<!-- 	  	<div class="gbd-prev-next-articles">
	  		<nav class="navigation post-navigation" role="navigation">
	  			<h2 class="screen-reader-text">Post navigation</h2>
	  			<div class="nav-links">
	  				<div class="nav-previous">
	  					<?php previous_post_link('%link
	  					','<span class="pre">Previous</span><div>%title</div>'); ?> </div>

	  					<div class="blog-post">
	  						<a href="<?php echo site_url(); ?>/blog">Blog Home</a>
	  					</div> 
	  				 	<div class="nav-next">

	  						<?php next_post_link('%link','<span class="pre">Next</span><div>%title</div>'); ?>  </div>

	  					</div>
	  				</nav>
	  			</div>  -->

	  			<div class="gbd-related-aricles">
	  				<h4><span>Related Articles</span></h4>
	  				<div class="gbd-related-blog-block clearfix">
	  					<?php
	  					$args = array(
	  						'posts_per_page' => 3,
	  						'post_status' => 'publish',
	  						'post_type'   => 'post',
	  						'orderby' => 'date',
	  						'order'   => 'DESC',
	  						'cat' => $cat_id
	  					);
	  					$custom_loop = new WP_Query($args); 
	  					if ( $custom_loop->have_posts() ) : 
	  						while ($custom_loop->have_posts()) : $custom_loop->the_post();
	  							if($post_id != get_the_ID()):
	  								?>
	  								<div class="gbd-related-blog fadeIn">
	  									<div class="gbd-related-blog-img">
	  										<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
	  									</div>

	  									<div class="gbd-related-blog-contents">
	  										<span class="gbd-related-blog-category">
	  											<?php
	  											the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" >', '</a>' );
	  											?>
	  										</span>
	  										<h2 class="entry-title">

	  											<?php
	  											echo excerpt(8);
	  											?>
	  										</h2>                   
	  									</div>

	  								</div>
	  								<?php
	  							endif;
	  						endwhile;
	  						wp_reset_postdata();
	  					endif;
	  					?>
	  				</div>
	  			</div><!-- gbd-related-aricles -->
	  			<div class="gbd-like-blog-post clearfix">
	  				<h4>Like This Blog Post?</h4>
	  				<span>Subscribe for future updates!</span>


	  				<!--   <?php //echo do_shortcode('[contact-form-7 id="997" title="Blog Subscribe"]'); ?> -->
	  				<!-- live Code HubSPOT -->

	  <!--[if lte IE 8]>
	  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
	<![endif]-->
	<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
	<script>
		hbspt.forms.create({
			portalId: "5372895",
			formId: "058cbe04-9991-4955-9f64-f5ec8b2cb8f3"
		});
	</script>
	<!-- live Code HubSPOT -->



	<!-- test Code HubSPOT -->

	  <!--[if lte IE 8]>
	  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
	<![endif]-->
	<!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
	<script>
	  hbspt.forms.create({
	    portalId: "6867561",
	    formId: "49c1ad62-d31c-4695-98df-58ed71bb52fd"
	  });
	</script> -->
	<!-- test Code HubSPOT -->




</div><!-- gbd-like-blog-post -->

<div class="gbd-share-post">
	<h4>Don't forget to share this post!</h4>
	<?php echo do_shortcode("[addtoany]") ?>
</div>

</div><!-- gbd-blog-article-mid -->
</div>

<div class="col-md-3 pull-right" id="gbd-sidebar">

	<?php get_template_part( 'components/sidebar', '' ); ?>

</div><!-- gbd-sidebar -->

</div>
</article><!-- #post-## -->

</div><!-- gbd-blog-article -->

</div><!-- gbd-blog-article-block -->

</div><!-- gbd-blog-article-v2 -->

<script>

	jQuery(document).ready(function(){

		if(jQuery('.simplePullQuote').length){
			jQuery('.simplePullQuote').each(function(){
				var blockQuote = jQuery(this).find('p').text().trim();
				var tweetLink = 'https://twitter.com/intent/tweet?text='+ encodeURIComponent(blockQuote)+'&via=GrowByData&url='+window.location.href;
				jQuery(this).append("<a href="+tweetLink+" target='_blank' class='tweeter-ad'>Tweet this</a>");
			});
		}

	})
</script>