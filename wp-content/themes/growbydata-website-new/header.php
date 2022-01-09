<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package growbydata_site_wp
 */

  if (is_first_time()) {
    global $wp_version;
    header("Link: </wp-content/themes/growbydata-website-new/style.css?ver=".$wp_version.">; rel=preload; as=style", false);
    header("Link: </wp-content/themes/growbydata-website-new/assets/css/stylesheets.css?ver=".$wp_version.">; rel=preload; as=style", false);
      
  } else {
  }

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
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

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <meta name="language" content="en-us">
  <meta name="ahrefs-site-verification" content="eb21f2f66d764d36678e24df3ea562fc48e0b01288b5c880b711386ffb7bd68a">
<?php
  if(home_url() == "https://development.ad.growbydata.com"){
  ?>
   <link rel="canonical" href="https://growbydata.com<?php echo $_SERVER['REQUEST_URI'];?>">
  <?php } ?>

  <?php wp_head(); ?>

<?php if(is_singular('post')){ ?>
<script>
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    'pageType' : 'Blog Page'
  });
</script>
<?php } ?>
  <!-- Google Tag Manager --
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ83ZM4');</script>
<!-- End Google Tag Manager -->

<!-- to solve the popup builder issue on IE 11 -->
<script type="text/javascript">
  if (typeof Object.assign != 'function') {
    Object.assign = function(target) {
      'use strict';
      if (target == null) {
        throw new TypeError('Cannot convert undefined or null to object');
      }

      target = Object(target);
      for (var index = 1; index < arguments.length; index++) {
        var source = arguments[index];
        if (source != null) {
          for (var key in source) {
            if (Object.prototype.hasOwnProperty.call(source, key)) {
              target[key] = source[key];
            }
          }
        }
      }
      return target;
    };
  }
</script>
<!-- to solve the popup builder issue on IE 11 -->
<script>
  var site_url = "<?php echo get_site_url(); ?>";
  var isUserLogin = "<?php echo json_encode(is_user_logged_in()); ?>";
  var admin_ajax = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
</head>

<?php if (growbydata_blog_get_option('select_global_sidebar_layout') == 'sidebar-left') {
  $min_custom_class = 'sidebar-left';
} elseif (growbydata_blog_get_option('select_global_sidebar_layout') == 'sidebar-right') {
  $min_custom_class = 'sidebar-right';
} else {
  $min_custom_class = 'no-sidebar';
} ?>
<body <?php body_class($min_custom_class); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ83ZM4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'growbydata-site'); ?></a>
    <header class="gbd-main-wrap">
      
      <?php get_template_part('components/navigation/navigation', 'primary'); ?>
    </header>
    <div id="content" class="site-content">
