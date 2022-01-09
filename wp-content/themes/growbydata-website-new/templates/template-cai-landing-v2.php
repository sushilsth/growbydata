<?php
/*
Template Name: Competitive Ad Intelligence Landing V2
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>

<?php get_header(); ?>
<?php
while (have_posts()) : the_post(); ?>
	<div class="entry-content-page">
		<?php the_content(); ?>
	</div>
	<?php
endwhile;
wp_reset_query();
?>

<div class="clearfix"></div>

<div class="gbd-cai-landing-wrapper">
	<div class="site-branding">
		<a href="<?php echo home_url(); ?>/"> 
			<img src="<?php echo get_template_directory_uri()?>/images/gbd-logo.png" alt="gbd-logo"> 
		</a>
	</div>
	<div class="gbd-cai-top-section">
		<div class="container">
			<div class="gbd-cai-top-title">
				Your Google Shopping Ad Intelligence
			</div>
			<div class="gbd-landing-seen-brands gbd-news-section">
				<span>As Seen In</span>
				<div class="brands news-logos"> 
					<div class="brand-logo white slideInUp">   <span>
						<img src="https://staging.growbydata.com/wp-content/themes/growbydata-website-new/images/digital-commerce.png" alt="digital-commerce-360"> 
					</span></div>
					<div class="brand-logo white slideInUp">   <span>
						<img src="https://staging.growbydata.com/wp-content/themes/growbydata-website-new/images/retail-touchpoints.png" alt="retail-touchpoints"> 
					</span></div>
					<div class="brand-logo white slideInUp">   <span>
						<img src="https://staging.growbydata.com/wp-content/themes/growbydata-website-new/images/total_retail.png" alt="totalretail"> 
					</span></div>
				</div>
			</div>

		</div>

	</div>
	<div class="cai-landing-banner">
		<div class="container">
			<div class="cai-left-content-landing col-md-6 nopadding">
				<h3>Get Regular Emails With Fresh Opportunities</h3>
				<div class="gbd-landing-step gbd-landing-step-red">
					<span><span>step</span><b>1</b></span>
					<p>Subscribe (Free + Easy)</p>
				</div>
				<div class="inner-wrapper">
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
	hbspt.forms.create({
		portalId: "5372895",
		formId: "8bfb03e6-30a0-4c62-8fec-f858b58cbff3",
		onFormSubmit: function($form) {
			sessionStorage.setItem("hubspotsuccessMessage", "Thank you for submitting your keywords. <br/> We will share your report in a week.");
		}
	});
</script>
</div>

</div>
<div id="landing-wrapper" class="cai-right-content-landing col-md-6 no-padding">
	<div id="content-wrapper-right" class="content-wrapper-right">
		<h4>Grow Your Sales With AD Intelligence</h4>
		<p>Ad Platforms and third party analytics platforms only tell part of your advertising story.</p>
	</div>
</div>
</div>
</div><!-- cai-banner-top -->

<div class="gbd-cai-mid-section">
	<div class="container">
		<div class="gbd-landing-step-wrap">
			<div class="gbd-landing-step gbd-landing-step-blue">
				<span><span>step</span><b>2</b></span>
				<p>Surveillance of your Competitors begins </p>
			</div>
			<div class="gbd-landing-step gbd-landing-step-green">
				<span><span>step</span><b>3</b></span>
				<p>Important Insights to you weekly</p>
			</div>
		</div>
	</div>
</div><!-- gbd-cai-mid-section -->

<div class="gbd-cai-bottom-section">
	<div class="container">
		<p class="text-center gbd-inquiry">Agencies and Consultant can request Ad Intelligince for clients by emailing <a href="mailto:info@GrowByData.com">info@growbydata.com</a>
		</p>
		<p class="text-center gbd-copyrights" style="font-size:14px">© 2020 GrowByData, LLC</p>
	</div>
</div>
</div><!-- gbd-cai-landing-wrapper -->