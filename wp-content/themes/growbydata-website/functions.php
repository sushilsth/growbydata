<?php
/**
 * Growbydata Site functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package growbydata_site
 */

if (!function_exists('growbydata_blog_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function growbydata_blog_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on components, use a find and replace
         * to change 'growbydata-site' to the name of your theme in all the template files.
         */
        load_theme_textdomain('growbydata-site', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        add_image_size('growbydata-site-featured-image', 1024, 768);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __( 'Primary Menu', 'growbydata-site'),
            'blognav' => __( 'Blog Menu', 'growbydata-site'),
        ));

        /**
         * Add support for core custom logo.
         */
        add_theme_support('custom-logo', array(
            'height' => 200,
            'width' => 200,
            'flex-width' => true,
            'flex-height' => true,
            'header-text' => array('site-title', 'site-description'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'audio',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('growbydata_blog_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif;
add_action('after_setup_theme', 'growbydata_blog_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function growbydata_blog_content_width()
{
    $GLOBALS['content_width'] = apply_filters('growbydata_blog_content_width', 640);
}

add_action('after_setup_theme', 'growbydata_blog_content_width', 0);

/**
 * Return early if Custom Logos are not available.
 *
 * @todo Remove after WP 4.7
 */
function growbydata_blog_the_custom_logo()
{
    if (!function_exists('the_custom_logo')) {
        return;
    } else {
        the_custom_logo();
    }
}

/**
 * Enqueue scripts and styles.
 */
function growbydata_blog_scripts()
{
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/lib/slick/css/slick.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('line-awesome', get_template_directory_uri() . '/assets/lib/line-awesome/css/line-awesome.min.css');
    wp_enqueue_style('growbydata-site-style', get_stylesheet_uri());
    wp_enqueue_style('gbd-main', get_template_directory_uri() . '/assets/main.min.css');
    wp_enqueue_style('gbd-mobile', get_template_directory_uri() . '/assets/media.min.css');

    $fonts_url = growbydata_blog_fonts_url();
    if (!empty($fonts_url)) {
        wp_enqueue_style('growbydata-site-google-fonts', $fonts_url, array(), null);
    }
    
    wp_enqueue_script('growbydata-site-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true);
    wp_enqueue_script('gbd-bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.min.js', array('jquery'), '', 1);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/lib/slick/js/slick.min.js', array('jquery'), '', 1);
    wp_enqueue_script('jquery-match-height', get_template_directory_uri() . '/assets/lib/jquery-match-height/jquery.matchHeight.min.js', array('jquery'), '', 1);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', 1);
    wp_enqueue_script('theiaStickySidebar', get_template_directory_uri() . '/assets/lib/theiaStickySidebar/theia-sticky-sidebar.min.js', array('jquery'), '', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'growbydata_blog_scripts');

/**
 * Enqueue admin scripts and styles.
 */
function growbydata_blog_admin_scripts()
{
    if (is_customize_preview()) {
    wp_enqueue_style('admin-style', get_template_directory_uri() . '/assets/css/admin-style.css');
    }
}

add_action('admin_enqueue_scripts', 'growbydata_blog_admin_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load added-functions file.
 */
require get_template_directory() . '/inc/added-functions.php';

/**
 * Load metabox file.
 */
require get_template_directory() . '/inc/meta-box.php';

/**
 * Load custom post type.
 */
require get_template_directory() . '/inc/custom-post-type.php';


/**
 * Register Custom Navigation Walker
 */
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


/**
 * Register Lazy Loading
 */
//require_once get_template_directory() . '/inc/lazy-load-images.php';

function add_trial_button($items, $args) {
    if( $args->theme_location == 'primary' ){
        $items .= '<li role="separator" class="divider hidden-lg hidden-md"></li><li class="gbd-free-trial">'
            . '<a href="#" onclick="event.preventDefault()" id="free-trial-1" data-toggle="modal" data-target="#freeTrial">'
            . '<span>' . _x( "Free Trial", "label" ) . '</span>'
            . '</a>'
            . '</li>'
            . '<li role="separator" class="divider hidden-lg hidden-md"></li>'
            . '<li class="gbd-top-login hidden-lg hidden-md"><a href="http://udhcore.growbydata.com:8080/" target="_blank"> Log in</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_trial_button', 10, 2);





