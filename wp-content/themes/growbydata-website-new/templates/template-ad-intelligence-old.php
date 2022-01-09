<?php
/*
Template Name: Ad Intelligence
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
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
						<h1>Improve Google<br> Shopping Performance<br> with Ad Intelligence</h1>
						<p>Get started with Your Free GrowByData Insights</p>
						<a class="btn btn-default btn-lg m-btn free-trial " data-toggle="modal" data-target="#ad-intelligence-insights">Get My Insights</a>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="gbd-ad-banner-right-content">
						<img src="<?php echo get_template_directory_uri()?>/images/ad-banner-img.png" alt="ad-banner-img">
					</div>
				</div>
			</div>
		</div>
		</div><!-- gbd-ad-intelligence-top-section -->

		<div class="gbd-ad-intelligence-fullwidth">
			<div class="container">
				<h2>Unprecedented visibility with near real-time<br> granularity improves campaign performance</h2>
				<p>Ad Intelligence gives digital marketing managers, merchandise managers, and <a href="<?php echo site_url(); ?>\ad-intelligence-for-agencies"> ad agencies</a> near real-time, multi-dimensional views into changes your competitors make to their Google Shopping Ads by keyword, price, and region. </p>
				<a class="btn btn-default btn-lg m-btn free-trial" data-toggle="modal"  data-target="#ad-intelligence-insights" target="_blank">Get Free Ad Insights</a>

			</div>
		</div><!-- gbd-ad-intelligence-fullwidth -->

		<div class="gbd-high-fidelity-block gbd-ad-intelligence-2block">

			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 fadeIn">
						<div class="gbd-high-fidelity">
							<h2>High Fidelity Insights</h2>
							<p>We deliver custom, competitive alerts, without the noise, giving you the most relevant and impactful Google Shopping insights from sales annotations to pricing changes and missing ads.</p>    
							<a class="btn btn-default btn-lg m-btn free-trial" data-toggle="modal" data-target="#ad-intelligence-insights" href="" target="_blank">See How You Compare</a>      
						</div>
					</div>
					<div class="col-md-6 col-sm-6 fadeIn"><span>
						<img src="<?php echo get_template_directory_uri()?>/images/landing-pages-v2_report-short.gif" alt="landing-pages-v2_report"> 
					</span></div>

				</div>
			</div>
		</div><!-- .gbd-high-fidelity-block.gbd-ad-intelligence-2block -->

		<div class="gbd-granular-data-block gbd-ad-intelligence-2block">

			<div class="container">
				<div class="row">

					<div class="col-md-6 col-sm-6 fadeIn"><span>
						<img src="<?php echo get_template_directory_uri()?>/images/granular-data-img.png" alt="granular-data-img"> 
					</span>
				</div>
				<div class="col-md-6 col-sm-6 fadeIn">
					<div class="gbd-granular-data">
						<h2>Granular Data</h2>
						<p>For deeper insights into ad performance, use our Ad Intelligence Control Panel to get access to dashboards, reports, and even raw data for competitive price changes across product, device, and location.</p>    
						<a class="btn btn-default btn-lg m-btn free-trial " data-toggle="modal" data-target="#ad-intelligence-insights" target="_blank">View the Insights</a>      
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
						<h2>Flexible Access to<br> Competitive Data that’s<br> Always Near Real-time</h2>
						<p>Choose from the Ad Intelligence Control Panel, Amazon QuickSight, or raw data via FTP to control the level of competitive granularity. Whatever you choose, it will be near real-time.</p>    
						<a class="btn btn-default btn-lg m-btn free-trial " data-toggle="modal" data-target="#ad-intelligence-insights" target="_blank">Get Access to Ad Intelligence</a>      
					</div>
				</div>
				<div class="col-md-6 col-sm-6 fadeIn"><span>
					<img src="<?php echo get_template_directory_uri()?>/images/ad-intelligence-graph-img.png" alt="ad-intelligence-graph-img"> 
				</span>
			</div>

		</div>
	</div>
</div><!-- .gbd-high-fidelity-block.gbd-ad-intelligence-2block -->


<div class="gbd-ad-intelligence-bot-section">
	<div class="container">

		<div class="col-md-5 col-sm-5">
			<div class="gbd-ad-banner-left-img">
				<img src="<?php echo get_template_directory_uri()?>/images/we-do-left-img1.png" alt="we-do-left-img1">
			</div>
		</div>

		<div class="col-md-7 col-sm-7">
			<div class="gbd-ad-banner-right-text">
				<h2>We Do the Work, <br> You Take the Action </h2>
				<p>Ad Intelligence uniquely surfaces sales opportunities not available elsewhere:</p>
				<div class="gbd-we-do-work-section clearfix">
					<div class="gbd-we-do-work gbd-we-do-work1">
						<span><img src="<?php echo get_template_directory_uri()?>/images/ad-we-do-1.png" alt="ad-we-do-1"></span>
						<div class="gbd-we-do-hover">One musical instruments client realized 97% of their advertised products were significantly higher priced than their competitors. They were able to optimize their selection more frequently and improve conversion rates.
						</div>
					</div>
					<div class="gbd-we-do-work gbd-we-do-work2">
						<span><img src="<?php echo get_template_directory_uri()?>/images/ad-we-do-2.png" alt="ad-we-do-2"></span>
						<div class="gbd-we-do-hover">An online rugs retailer discovered an opportunity to increase sales and maintain profitability when one of their top three advertised products was priced eight times higher than their competitors. 
						</div>
					</div>
					<div class="gbd-we-do-work gbd-we-do-work3">
						<span><img src="<?php echo get_template_directory_uri()?>/images/ad-we-do-3.png" alt="ad-we-do-3"></span>
						<div class="gbd-we-do-hover">A popular casual footwear brand realized that 45% of their ads overlapped with retail partners, creating unwanted competition and pushing cost-per-clicks up. The brand shifted to a more focused advertising strategy pushing nonoverlapping SKUs, increasing market share.
						</div>
					</div>
				</div>
				<a class="btn btn-default btn-lg m-btn free-trial " data-toggle="modal" data-target="#ad-intelligence-insights">Get My Insights</a>
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
				<h3>Your 60-Day Complimentary Subscription</h3>
			</div>

			<!--code added for livehubspot-->
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
    portalId: "5372895",
    formId: "461d38a6-8027-446c-b1a3-ee28a86cc53e"
});
</script>
</div>
</div>
</div>

<?php
get_footer();