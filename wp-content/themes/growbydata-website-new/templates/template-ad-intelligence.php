<?php
/*
Template Name: Ad Intelligence
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

	<div class="gbd-ad-intelligence-wrapper">

		<div class="gbd-ad-intelligence-top-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-12">
						<div class="gbd-ad-banner-left-content">
							<h1>Leading Online Advertising Competitive Intelligence Data Provider </h1>
							<p>Improve Your Ads Performance across the channels like Google, Amazon, Walmart with Competitive Advertising Intelligence Insights </p>
							<a class="btn btn-default btn-lg m-btn free-trial " data-toggle="modal" data-target="#ad-intelligence-insights">Get My Insights</a>
						</div>
					</div>
					<div class="col-md-7 col-sm-12">
						<div class="gbd-ad-banner-right-content">
							<picture>
								<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/landing-pages-v6_report-gif-dark.webp">
									<img src="<?php echo get_template_directory_uri()?>/images/landing-pages-v6_report-gif-dark.gif" alt="landing-pages-v2_report">
								</picture>
							</div>
						</div>
					</div>
				</div>
			</div><!-- gbd-ad-intelligence-top-section -->

			<div class="gbd-ad-intelligence-fullwidth">
				<div class="container">
					<h2>Gain Edge not Available Elsewhere - Real-time<br> Competitive Advertising Intelligence
					</h2>
					<p>Ad Intelligence Data gives digital marketing managers, merchandise managers, and <a href="<?php echo site_url(); ?>\ad-intelligence-for-agencies"> ad agencies</a> near real-time, multi-dimensional views, at the most granular levels, into competitive pricing, product, and advertising enhances your Digital Advertising Intelligence across all advertising platforms like Google, Amazon, Walmart. </p>
					<a class="btn btn-default btn-lg m-btn free-trial" data-toggle="modal"  data-target="#ad-intelligence-insights" target="_blank">Get Started with Free Ad Insights</a>

				</div>
			</div><!-- gbd-ad-intelligence-fullwidth -->

			<div class="gbd-high-fidelity-block gbd-ad-intelligence-2block">

				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 fadeIn">
							<div class="gbd-high-fidelity">
								<h2>Granular Insights in<br> One Report</h2>
								<p>With the Competitive Paid Search, Shopping Ads and Display Advertising Intelligence alongside insights into Organic Search and all other SERP result empower your overall Digital Advertising Intelligence across the channels turning intelligence into magic to beat your competition.</p>    
								<a class="btn btn-default btn-lg m-btn free-trial" data-toggle="modal" data-target="#ad-intelligence-insights" href="" target="_blank">View the Insights</a>      
							</div>
						</div>
						<div class="col-md-6 col-sm-6 fadeIn">
							<span>
								<picture>
									<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/granular-banner-img.webp">
										<img src="<?php echo get_template_directory_uri()?>/images/granular-banner-img.png" alt="granular-banner-img"> 
									</picture>
								</span>
							</div>
						</div>
					</div>
				</div><!-- .gbd-high-fidelity-block.gbd-ad-intelligence-2block -->

				<div class="gbd-granular-data-block gbd-ad-intelligence-2block">

					<div class="container">
						<div class="row">

							<div class="col-md-6 col-sm-6 fadeIn">
								<span>
									<picture>
										<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/granular-data-img.webp">
											<img src="<?php echo get_template_directory_uri()?>/images/granular-data-img.png" alt="granular-data-img">  
										</picture>
									</span>
								</div>
								<div class="col-md-6 col-sm-6 fadeIn">
									<div class="gbd-granular-data">
										<h2>Stop the Undercutting, <br>Find New Pricing<br> Opportunities</h2>
										<p>Stop getting undercut by competitors and find new pricing opportunities. Beat them with granular competitive Ad Intelligence insights that show the pricing distributions of products, or comparisons to a specific competitor. Analyze additional promotional dimensions, including sales and other offers to empower your Ads.</p>    
										<a class="btn btn-default btn-lg m-btn free-trial " data-toggle="modal" data-target="#ad-intelligence-insights" target="_blank">See How You Compare</a>      
									</div>
								</div>

							</div>
						</div>
					</div><!-- .gbd-high-fidelity-block.gbd-ad-intelligence-2block -->


					<div class="gbd-flexible-access-block gbd-ad-intelligence-2block">

						<div class="container">
							<div class="row">

								<div class="col-md-6 col-sm-6 fadeIn">
									<div class="gbd-flexible-access">
										<h2>Choose and Control<br> the Level of Real-time<br> Data You Need</h2>
										<p>Online Advertising Competitive Intelligence Tools is data-rich, right down to giving you access to the raw ads data that provides you with total control. Need more data visualization for your digital and merchandising teams, or clients? Choose the Ad Intelligence Control Panel, Google Data Studio, Tableau or Amazon QuickSight to get competitive insights you can act on immediately.</p>    
										<a class="btn btn-default btn-lg m-btn free-trial " data-toggle="modal" data-target="#ad-intelligence-insights" target="_blank">Get the Insights, Take Action</a>      
									</div>
								</div>
								<div class="col-md-6 col-sm-6 fadeIn">
									<span>
										<picture>
											<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/choose-intelligence-graph-img.webp">
												<img src="<?php echo get_template_directory_uri()?>/images/choose-intelligence-graph-img.png" alt="choose-intelligence-graph-img">  
											</picture>
										</span>
									</div>

								</div>
							</div>
						</div><!-- .gbd-high-fidelity-block.gbd-ad-intelligence-2block -->


						<div class="gbd-ad-intelligence-bot-section">
							<div class="container">

								<div class="col-md-5 col-sm-5">
									<div class="gbd-ad-banner-left-img">
										<picture>
											<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/we-do-left-img1.webp">
												<img src="<?php echo get_template_directory_uri()?>/images/we-do-left-img1.png" alt="we-do-left-img1">  
											</picture>
										</div>
									</div>

									<div class="col-md-7 col-sm-7">
										<div class="gbd-ad-banner-right-text">
											<h2>We Do the Work, <br> You Take the Action </h2>
											<p>Ad Intelligence uniquely surfaces sales opportunities not available elsewhere:</p>
											<div class="gbd-we-do-work-section clearfix">
												<div class="gbd-we-do-work gbd-we-do-work1">
													<span>
														<picture>
															<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/we-do-1.webp">
																<img src="<?php echo get_template_directory_uri()?>/images/we-do-1.png" alt="we-do-1"> 
															</picture>
														</span>
														<div class="gbd-we-do-hover">One musical instruments client realized 97% of their advertised products were significantly higher priced than their competitors. They were able to optimize their selection more frequently and improve conversion rates.
														</div>
													</div>
													<div class="gbd-we-do-work gbd-we-do-work2">
														<span>
															<span>
																<picture>
																	<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/we-do-2.webp">
																		<img src="<?php echo get_template_directory_uri()?>/images/we-do-2.png" alt="we-do-2"> 
																	</picture>
																</span>
															</span>
															<div class="gbd-we-do-hover">An online rugs retailer discovered an opportunity to increase sales and maintain profitability when one of their top three advertised products was priced eight times higher than their competitors. 
															</div>
														</div>
														<div class="gbd-we-do-work gbd-we-do-work3">
															<span>
																<picture>
																	<source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/we-do-3.webp">
																		<img src="<?php echo get_template_directory_uri()?>/images/we-do-3.png" alt="we-do-3"> 
																	</picture>
																</span>
																<div class="gbd-we-do-hover">A popular casual footwear brand realized that 45% of their ads overlapped with retail partners, creating unwanted competition and pushing cost-per-clicks up. The brand shifted to a more focused advertising strategy pushing nonoverlapping SKUs, increasing market share.
																</div>
															</div>
														</div>
														<a class="btn btn-default btn-lg m-btn free-trial " data-toggle="modal" data-target="#ad-intelligence-insights">Get Started with Free Ad Insights</a>
													</div><!-- gbd-ad-banner-right-text -->
												</div>

											</div>
										</div><!-- gbd-ad-intelligence-bot-section -->

									</div><!-- gbd-ad-intelligence-wrapper -->

								</div><!-- gbd-default-template -->


								<div id="ad-intelligence-insights" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="maillistLabel"  aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="form-header">
												<h3>Schedule A Free Demo</h3>
											</div>
											<div id="ad-intelligence-hubspotform"></div>
											<script>
												function HubspotFormLoad(file) {
													var script = document.createElement("script");
													script.type = "text/javascript";
													script.charset = "utf-8";
													script.defer = true;
													script.src = file;
													script.onload = function() {
            //for download PDF
            if (document.querySelectorAll("#ad-intelligence-hubspotform .hbspt-form").length == 0) {
            	hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array("formName"=>"Ad Intelligence Sign up Form")); ?>);
            }
        };

        document.body.appendChild(script);
    }

    setTimeout(function(){
    	HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
    },5000);
</script>
</div>
</div>
</div>

<?php
get_footer();