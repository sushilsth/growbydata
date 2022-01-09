<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package growbydata_site
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
            <?php if (!is_page_template('home-page-template.php')) {
                if (is_front_page() && !is_home()) {

                    get_template_part('components/banner/featured', 'category');
                }
            } ?>

        <?php if ( !is_post_type_archive( 'jobs' ) ) { ?>
        <?php if (is_home()){ ?>
            <div class="sub-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 pull-right">
                            <div class="">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <h1 class="sub-header-title alt-font-1">Latest Blog</h1>
                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="blog-navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'blognav',
                            'menu_id' => 'blog-menu',
                            'container' => 'div',
                            'container_class' => 'alt-menu'
                        ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="archieve-banner">
                <?php get_template_part('components/banner/banner', 'slider'); ?>
            </div>
        <?php }
        } ?>
        <?php if ( !is_singular( 'jobs' ) ) { ?>
        <?php if ((is_archive()) || (is_single())){ ?>
            <div class="sub-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 pull-right">
                            <div class="">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <?php if (is_archive()) { ?>
                            <h1 class="sub-header-title alt-font-1"><?php the_archive_title(); ?></h1>
                            <?php } else {?>
                                <h1 class="sub-header-title alt-font-1"><?php the_title(); ?></h1>
                            <?php } ?>

                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="blog-navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'blognav',
                            'menu_id' => 'blog-menu',
                            'container' => 'div',
                            'container_class' => 'alt-menu'
                        ));
                        ?>
                    </div>
                </div>
            </div>

        <?php }
        }?>

