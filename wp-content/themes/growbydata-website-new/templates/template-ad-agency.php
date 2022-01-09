<?php
/*
Template Name: ad-intelligence-for-agencies
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php $eci_date = new DateTime(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style-new.css?q='. $eci_date->getTimestamp() ; ?>">
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

	<div class="gbd-ad-agency-wrapper"> 

		<div class="gbd-ad-agency-top-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-12">
						<div class="gbd-ad-agency-banner-lt">
							<h2>Ad Agencies</h2>
							<h1>Grow Your Accounts<br> with GrowByData</h1>
							<p>Improve client ad spend by making better advertising decisions through granular price, product, and competitive insights.</p>
							<p>Get custom Ad Intelligence alerts that notify you when your clients are not price competitive, a product is missing in a search, or when you’ve lost ad coverage on a strategic keyword.</p>
							<p>
								Work with us to create the right kind of partnership for your agency, including referrals and gray labeling.
							</p>
						</div>
					</div>
					<div class="col-md-7 col-sm-12">
						<div class="gbd-ad-agency-banner-rt">
							<div class="gbd-ad-agency-form">
								<h2>Contact Us to Start the Conversation</h2>
								<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
								<script>
									hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array("formName"=>"Ad Agency Sign up Form")); ?>);
								</script>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- gbd-ad-agency-top-section -->

		<div class="gbd-ad-agency-mid-section">
			<div class="container">
				<h2>Our Insights are regularly featured on top eCommerce publications</h2>
				<div class="gbd-news-logos">
					<div class="gbd-brand-logo slideInUp">   
						<span>
							<picture>
								<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/digital-commerce-360.webp">
									<img src="<?php echo get_template_directory_uri()?>/images/digital-commerce-360.png" alt="digital-commerce-360">  
								</picture>
							</span>
						</div>
						<div class="gbd-brand-logo slideInUp">   
							<span>
								<picture>
									<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/Retail_Touch_Points_Logo.webp">
										<img src="<?php echo get_template_directory_uri()?>/images/Retail_Touch_Points_Logo.png" alt="retail-touchpoints"> 
									</picture>
								</span>
							</div>
							<div class="gbd-brand-logo slideInUp">   
								<span>
									<picture>
										<source type="image/webp" srcset="https://d1giulg0kzu6r6.cloudfront.net/wp-content/themes/growbydata-website-new/images/total_retail.png.webp">
											<img src="<?php echo get_template_directory_uri()?>/images/logo-totalretail.png" alt="totalretail"> 
										</picture>
									</span>
								</div>
								<div class="gbd-brand-logo slideInUp">   <span>
									<picture>
										<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/retail-times.webp">
											<img src="<?php echo get_template_directory_uri()?>/images/retail-times.png" alt="retailtimes">
										</picture>
									</span></div>
								</div>
							</div>
						</div><!-- gbd-ad-agency-mid-section -->

						<div class="gbd-ad-agency-bot-section">
							<div class="container">
								<div class="col-md-6 col-sm-6">
									<div class="gbd-ad-agency-bot-lt">
										<h2>GrowByData Powers<br> Account Growth with<br> More Data and Insights</h2>
										<p>For deeper insights into ad performance, our Ad Intelligence solution provides granular insight through dashboards, reports, and even raw data for client competitive comparisons across product, device, and location. </p>
										<a class="btn btn-default btn-lg m-btn free-trial " href="mailto:info@GrowByData.com">Let's Talk</a>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="gbd-ad-agency-bot-rt">
										<picture>
										<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/agency-girl-img.webp">
											<img src="<?php echo get_template_directory_uri()?>/images/agency-girl-img.png" alt="agency-girl-img">
										</picture>
									</div>
								</div>
							</div>
						</div><!-- gbd-ad-agency-bot-section -->


					</div><!-- gbd-ad-agency-wrapper -->

				</div><!-- gbd-default-template -->


				<?php
				get_footer();