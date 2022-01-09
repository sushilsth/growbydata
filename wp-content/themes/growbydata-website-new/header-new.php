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

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ83ZM4');</script>
<!-- End Google Tag Manager -->

<?php wp_head(); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>

<script>
    var site_url = "<?php echo get_site_url(); ?>";
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

    <div id="page" class="site price-insights">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'growbydata-site'); ?></a>
        <header>
            <div class="landing-page">
       <div class="container">
    <div class="Signle-banner">           
        <div class="site-branding">
<a href="<?php echo esc_url(home_url('/')); ?>" class="gbd-btm-logo"><img src="<?php echo get_template_directory_uri()?>/images/gbd-logo_white.png" alt="Grow faster with GrowByData">
</a>
<?php if(wp_get_referer() == site_url().'/') { ?>
<h1>Powerful Insights by Email </h1>   
<?php } else {?>
<h1>You’re One Step Away from Powerful Insights </h1>
<?php } ?>
<h2>for Data-Driven Retailers and Brands</h2>                 

<div class="signupbtn"> <a href="javascript:void(0);">Sign me up!</a></div>
</div>
</div>
</div>
</header>
<!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->



