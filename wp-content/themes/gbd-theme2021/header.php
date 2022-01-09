<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GBD-Brandtheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	 <link rel="dns-prefetch" href="https://www.googletagmanager.com">
	  <link rel="dns-prefetch" href="https://stats.g.doubleclick.net">
	  <link rel="dns-prefetch" href="https://www.gstatic.com">
	  
	  <link rel="dns-prefetch" href="https://www.google.com.np">
	  <link rel="dns-prefetch" href="https://www.google-analytics.com">
	  <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net">
	  <link rel="dns-prefetch" href="https://www.googleadservices.com">
	  <link rel="dns-prefetch" href="https://www.google.com">
	  <link rel="dns-prefetch" href="https://use.fontawesome.com">
	  <link rel="dns-prefetch" href="https://px.ads.linkedin.com">
	  <link rel="dns-prefetch" href="https://static.addtoany.com">
	  <link rel="dns-prefetch" href="https://p.adsymptotic.com">
	  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
	  <link rel="dns-prefetch" href="https://web.facebook.com">
	  <link rel="dns-prefetch" href="https://www.facebook.com">
	  <link rel="dns-prefetch" href="https://static.xx.fbcdn.net">
	  <link rel="dns-prefetch" href="https://snap.licdn.com">
	  
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">


	<?php wp_head(); ?>
	<script>
		var site_url = "<?php echo get_site_url(); ?>";
		var isUserLogin = "<?php echo json_encode(is_user_logged_in()); ?>";
		var admin_ajax = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
	<?php
		if(is_single()) {
	?>
	<script>
		window.dataLayer = window.dataLayer || [];
		dataLayer.push({
			"FullURL": window.location.href
		});
	</script>
	<?php	
	}
	?>
	<script>
		
		if(localStorage.getItem("uniqueclientID")){
			window.dataLayer = window.dataLayer || [];
			dataLayer.push({
				"uniqueID": localStorage.getItem("uniqueclientID")
			});
		} else{
			var uniqueID = Math.floor(Math.random() * (999999999 - 111111111 + 1)) + 111111111;
			localStorage.setItem("uniqueclientID", uniqueID);
			if(localStorage.getItem("uniqueclientID")){
				window.dataLayer = window.dataLayer || [];
				dataLayer.push({
					"uniqueID": localStorage.getItem("uniqueclientID")
				});
			}
		}
	</script>
</head>

<body <?php body_class(); ?>>
	  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ83ZM4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="site-branding col-md-3 col-xl-3">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$gbd_new_theme_description = get_bloginfo( 'description', 'display' );
					if ( $gbd_new_theme_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $gbd_new_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<div class="col-md-9 px-0 ml-xs-4 col-xl-9">
					<nav class="navbar navbar-expand-md navbar-dark" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon fas fa-bars"></span>
							<span class="navbar-toggler-icon fa fa-times"></span>


						</button>


						<?php
						wp_nav_menu( array(
							'theme_location'    => 'menu-1',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse ',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav animate slideIn',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker()
						) );
						?>   
						<div class="header-top-right-btn px-0 px-xs-2">
							<ul>
								<li><a href="<?php echo site_url('/talk-to-expert/?utm_source=growbydata&utm_medium=website&utm_campaign=web_conversion_optimization&utm_content= website_header &utm_term=request_demo'); ?>" class="contact_btn">Request Demo</a></li></ul>
							</div>
						</nav>

					</div>

				</div>
			</div>

			<div class="gbd-progress-container">
				<div class="gbd-progress-bar" id="gbd-Bar"></div>
			</div>

		</header><!-- #masthead -->
