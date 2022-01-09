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

    $eci_date = new DateTime();  

  // wp_enqueue_style('fSelect', get_template_directory_uri() . '/assets/css/fSelect.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/lib/slick/css/slick.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css');

    //wp_enqueue_style('line-awesome', get_template_directory_uri() . '/assets/lib/line-awesome/css/line-awesome.min.css');

    // wp_enqueue_style('line-awesome', get_template_directory_uri() . '/assets/lib/line-awesome/css/line-awesome.min.css');

    wp_enqueue_style('growbydata-site-style', get_stylesheet_uri());
    wp_enqueue_style('stylesheets', get_template_directory_uri() . '/assets/css/stylesheets.css?q='.$eci_date->getTimestamp());
//wp_enqueue_style('gbd-main', get_template_directory_uri() . '/assets/main.min.css');
// wp_enqueue_style('gbd-main', get_template_directory_uri() . '/assets/New-custom.css');
// wp_enqueue_style('gbd-main', get_template_directory_uri() . '/assets/custom.css');
    // wp_enqueue_style('gbd-main', get_template_directory_uri() . '/assets/css/style.css?q='.$eci_date->getTimestamp() );
    // wp_enqueue_style('gbd-inner-css', get_template_directory_uri() . '/assets/css/inner-css.css?q='.$eci_date->getTimestamp());
    

    // wp_enqueue_style('gbd-inner-page', get_template_directory_uri() . '/assets/css/inner-page.css?q='.$eci_date->getTimestamp());


    // wp_enqueue_style('gbd-mobile', get_template_directory_uri() . '/assets/media.min.css');
// wp_enqueue_style( 'fa_css', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" );

// wp_enqueue_style( 'fa_css', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');

// wp_enqueue_style('fa_css', get_template_directory_uri() . '/assets/css/all.css' );


    wp_enqueue_style( 'fa_css', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');

    $fonts_url = growbydata_blog_fonts_url();
    if (!empty($fonts_url)) {
        wp_enqueue_style('growbydata-site-google-fonts', $fonts_url, array(), null);
    }

     wp_enqueue_script('slick', get_template_directory_uri() . '/assets/lib/slick/js/slick.min.js', array('jquery'), '', 1);

    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/dynamic_blog.js', array('jquery'), '', 1);

// wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);

    wp_enqueue_script('growbydata-site-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true);
    wp_enqueue_script('gbd-bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.min.js', array('jquery'), '', 1);
   
    wp_enqueue_script('jquery-match-height', get_template_directory_uri() . '/assets/lib/jquery-match-height/jquery.matchHeight.min.js', array('jquery'), '', 1);
    wp_enqueue_script('theiaStickySidebar', get_template_directory_uri() . '/assets/lib/theiaStickySidebar/theia-sticky-sidebar.min.js', array('jquery'), '', true);
//wp_enqueue_script('less.js', get_template_directory_uri() . '/less.js/dist/less.js', array('jquery'), '', true);

//wp_enqueue_script('fSelect', get_template_directory_uri() . '/assets/js/fSelect.js', array('jquery'), '', 1);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'growbydata_blog_scripts');

function prefix_add_footer_styles() {
    wp_enqueue_style('fa_css', get_template_directory_uri() . '/assets/css/all.css', array(), '4.0.0', 'all');
    wp_enqueue_style('gbd-mobile-css', get_template_directory_uri() . '/assets/media.min.css', array(), '1.0.0', 'all');
};
add_action( 'get_footer', 'prefix_add_footer_styles' );

/* Footer Menu End */

/**
* Enqueue admin scripts and styles.
*/

// if (!is_admin()) {

// $theme = wp_get_theme(); // Used for cache busting

// wp_enqueue_style('Style', get_template_directory_uri() . 'assets/css/styles.css', array(), $theme->get( 'Version' ), 'all');

// }

    // function count_post_visits() {
    //    if( is_single() ) {
    //       global $post;
    //       $views = get_post_meta( $post->ID, 'my_post_viewed', true );
    //       if( $views == '' ) {
    //          update_post_meta( $post->ID, 'my_post_viewed', '1' );   
    //       } else {
    //          $views_no = intval( $views );
    //          update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
    //       }
    //    }
    // }
    // add_action( 'wp_head', 'count_post_visits' );


function custom_add_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );
function growbydata_blog_admin_scripts()
{
    if (is_customize_preview()) {
        wp_enqueue_style('admin-style', get_template_directory_uri() . '/assets/css/admin-style.css');
    }
}

add_action('admin_enqueue_scripts', 'growbydata_blog_admin_scripts');

/* Footer Menu */
register_nav_menus(
    array('footer' => __( 'footer menu about', 'THEME_NAME' ),)
);

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'footermenu' => 'footer menu solutions'
        )
    );
}
/* Footer Menu End */


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


//for word limitation
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
} else {
    $excerpt = implode(" ",$excerpt);
}   
$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
return strip_tags($excerpt);
}

function press_content($limit) {
  $excerpt = explode(' ', get_the_content(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
} else {
    $excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
return strip_tags($excerpt);
}

/*
 *
 * Popular post most visit
 *
 * */

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


/*
 *
 * Logic for pagination in blog section
 *
 * */


function growbydata_get_posts_arguments(){
    $paged = ( isset($_REQUEST['pg']) ) ? (absint($_REQUEST['pg'])>=1?absint($_REQUEST['pg']):1) : 1;
    $order = 'DESC';

    $arr = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => $order,
        'paged' => $paged,
        'post_status' => 'publish',
    );
    if(isset($_REQUEST['category'])){
        $arr["cat"] = (int)$_REQUEST['category'];
    }

    if(isset($_REQUEST['gbd_search'])){
        $arr['s'] = $_REQUEST['gbd_search'];
    }



    return $arr;

}


function growbydata_get_posts(){

    $args = growbydata_get_posts_arguments();
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();


            global $growbydata_blog_post_counter;
            $growbydata_blog_post_counter = 0;
            ?>
            <?php
            if(true)

                { ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                        <?php if ($growbydata_blog_post_counter % 2 == 0) {
                            $content_class = '';
                            $content_class = 'style-bordered-right';
                        } else {
                            $content_class = 'style-bordered-left';
                        }
                        if(!has_post_thumbnail()){
                            $content_class = 'style-bordered-no-image';
                        }

                        ?>
                        <div class="style-archive style-bordered <?php echo esc_attr($content_class); ?>">

                            <div class="gbd-post-content">

                                <div class="post-content" data-mh="equal-height">                                                                            <div class="entry-meta">
                                                    <?php growbydata_blog_posted_on(); ?>
                                                </div>
                                    <div class="gbd-blog-contents">
                                        <?php
                                        $url = get_the_post_thumbnail_url();
                                        $uploads = wp_upload_dir();
                                        $file_path = str_replace( $uploads['baseurl'], $uploads['basedir'], $url );
                                        ?>

                                        <div class='gbd-header-content-blogs <?php echo (!file_exists($file_path)) ? "gbd-blog-fullwidth" : ""; ?>'>
                                            <header class="entry-header">
                                                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" >', '</a></h2>' );

                                                if ( 'post' === get_post_type() ) : ?>
                                                    <?php // get_template_part( 'components/post/content', 'meta' ); ?>
                                                    <?php
                                                endif; ?>


                                                <div class="gbd-reading-time">
                                                    <!-- <span class="separator">|</span> -->
                                                    <?php echo do_shortcode('[rt_reading_time  postfix="MIN" postfix_singular="MIN" label="READ"]'); ?>
                                                </div>
                                            </header>
                                            <div class="entry-content ">
                                                <?php
                                                echo excerpt(25);
                                                ?>
                                                <a href="<?php the_permalink(); ?>" class="readmore"><?php _e('READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                ','growbydata-site');  ?></a>


                                            </div>
                                        </div><!-- gbd-header-content-blogs -->
                                        <?php 
                                        
                                        if ( '' != get_the_post_thumbnail() && file_exists($file_path)) : ?>
                                            <div class="post-thumbnail " data-mh="equal-height">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail( 'growbydata-site-featured-image' ); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div><!-- gbd-blog-contents -->
                                </div>
                            </div><!-- gbd-post-content -->

                        </div>
                        <?php $growbydata_blog_post_counter++; ?>
                    </article><!-- #post-## -->

                <?php }


            }
            /* Restore original Post Data */
            wp_reset_postdata();
            die();
        } else {
            echo " ";
            die();
        }
    }

    add_action( 'wp_ajax_getposts', 'growbydata_get_posts' );
    add_action( 'wp_ajax_nopriv_getposts', 'growbydata_get_posts' );


    function growbydata_get_posts_pagination(){
        $args = growbydata_get_posts_arguments();
        $the_query = new WP_Query( $args );

        $paged = ( isset($_REQUEST['pg']) ) ? (absint($_REQUEST['pg'])>=1?absint($_REQUEST['pg']):1) : 1;


        if(absint(get_option('posts_per_page')) < $the_query->found_posts) {
            $total_pages = round(absint($the_query->found_posts) / absint(get_option('posts_per_page')));

            ?>

            <div class="gbd-pagination">
                <ul class="pagination">

                    <?php
                    $i = 1;

                    while($i <= $total_pages){
                        ?>
                        <li class="page-item <?php if($i==$paged){ echo 'active';}?>"><a class="page-link" href="javascript:ob.paginate(<?php echo $i;?>, '<?php if($i==$paged){ echo 'active';}else{echo 'in-active';}?>');"><?php echo $i;?></a></li>
                        <?php
                        $i++;
                    }


                    ?>
                </ul>
            </div>

            <?php

        }else{
            echo " ";

        }

        die();
    }

    add_action( 'wp_ajax_getposts_pagination', 'growbydata_get_posts_pagination' );
    add_action( 'wp_ajax_nopriv_getposts_pagination', 'growbydata_get_posts_pagination' );


    /*Custom Post type start*/
    function cw_post_type_news() {
        $supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
        $labels = array(
            'name' => _x('Press', 'plural'),
            'singular_name' => _x('Press', 'singular'),
            'menu_name' => _x('Press', 'admin menu'),
            'name_admin_bar' => _x('Press', 'admin bar'),
            'add_new' => _x('Add New', 'add new'),
            'add_new_item' => __('Add New news'),
            'new_item' => __('New Press'),
            'edit_item' => __('Edit Press'),
            'view_item' => __('View Press'),
            'all_items' => __('All Press'),
            'search_items' => __('Search Press'),
            'not_found' => __('No Press found.'),
        );
        $args = array(
            'supports' => $supports,
            'labels' => $labels,
            'public' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'news'),
            'has_archive' => false,
            'hierarchical' => false,
        );
        register_post_type('news', $args);

    }
    add_action('init', 'cw_post_type_news');


    function press_category() {  
        register_taxonomy(  
        'category_news',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'news',        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Categories',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'category', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
    }  
    add_action( 'init', 'press_category');


    // function hubspot_dependency() {
    //     wp_enqueue_script( 'select2script', "https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js", array('jquery'), false, false );
    //     wp_enqueue_style( 'select2style', "https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css", array(), false, false );
    //     wp_enqueue_script( 'hubspot', get_template_directory_uri() . '/assets/js/hubspot-binding-mapper.js',array('jquery'), false, false );
    // }
    // add_action( 'wp_enqueue_scripts', 'hubspot_dependency' );



    /* Remove /feed url in head tag */
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
/* Remove /feed url in head tag */


function custom_scripts() {
wp_enqueue_script( 'custom-script', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', array( 'jquery' ), false, true );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

add_action('template_redirect', 'gom_add_last_modified_header');
function gom_add_last_modified_header($headers) {
    if( is_singular() ) {
        $post_id = get_queried_object_id();
        if( $post_id ) {
            header("Last-Modified: " . get_the_modified_time("D, d M Y H:i:s", $post_id) );
        }
    }
}

/*

for testimonial custom post type
Custom columns in admin section.

*/
// Add the custom columns to the book post type:
add_filter( 'manage_testimonials_posts_columns', 'set_custom_edit_testimonials_columns' );
function set_custom_edit_testimonials_columns($columns) {
    unset($columns['title']);
    $columns['username'] = __( 'User Name', 'your_text_domain' );
    $columns['designation'] = __( 'Designation', 'your_text_domain' );

    return $columns;
}

// Add the data to the custom columns for the book post type:
add_action( 'manage_testimonials_posts_custom_column' , 'custom_testimonials_column', 10, 2 );
function custom_testimonials_column( $column, $post_id ) {
    switch ( $column ) {

        case 'username' :
            echo get_field( 'username' , $post_id );
            break;

        case 'designation' :
            echo get_field( 'designation' , $post_id ); 
            break;

    }
}

add_filter( 'manage_edit-testimonials_sortable_columns', 'set_custom_testimonials_sortable_columns' );

function set_custom_testimonials_sortable_columns( $columns ) {
  $columns['username'] = 'username';
  $columns['designation'] = 'designation';

  return $columns;
}





// The shortcode function
function pullquote_func($atts, $content = null) { 
    extract(shortcode_atts(array(
      'class' => '',
    ), $atts));
    return '<div class="simplePullQuote '.$class.'"><p>'.$content.'</p></div>';
}
// Register shortcode
add_shortcode('pullquote', 'pullquote_func'); 



// disable loading of JS and CSS of contact form 7
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );