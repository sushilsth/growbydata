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

    wp_enqueue_style('growbydata-site-style', get_stylesheet_uri());
    wp_enqueue_style('stylesheets_combine', get_template_directory_uri() . '/assets/css/stylesheets.css');
    // wp_enqueue_script('slick', get_template_directory_uri() . '/assets/lib/slick/js/slick.min.js', array('jquery'), '', 1);
    
    wp_enqueue_script('growbydata-site-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true);
 
    // wp_enqueue_script('jquery-match-height', get_template_directory_uri() . '/assets/lib/jquery-match-height/jquery.matchHeight.min.js', array('jquery'), '', 1);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'growbydata_blog_scripts');

function prefix_add_footer_styles() {
  
    wp_enqueue_style('gbd-mobile-css', get_template_directory_uri() . '/assets/media.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&display=swap' );
    $fonts_url = growbydata_blog_fonts_url();
    if (!empty($fonts_url)) {
        wp_enqueue_style('growbydata-site-google-fonts', $fonts_url, array(), null);
    }
};
add_action( 'get_footer', 'prefix_add_footer_styles');

/* Footer Menu End */

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

                            <div class="gbd-post-content-block">

                                <div class="post-content" data-mh="equal-height">                                                                            
                                    <div class="gbd-blog-contents-new fadeIn">
                                        <div class="gbd-featured-blog-img">
                                            <span>Featured</span>
                                            <?php
                                            $url = get_the_post_thumbnail_url();
                                            $uploads = wp_upload_dir();
                                            $file_path = str_replace( $uploads['baseurl'], $uploads['basedir'], $url );
                                            ?>

                                            <?php 

                                            if ( '' != get_the_post_thumbnail() && file_exists($file_path)) : ?>
                                                <div class="post-thumbnail " data-mh="equal-height">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail( 'growbydata-site-featured-image' ); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="gbd-featured-category-like clearfix">
                                            <div class="gbd-featured-category-detail">
                                              <?php
                                        $category_detail = get_the_category(get_the_ID());//$post->ID
                                        echo $category_detail[0]->cat_name;
                                        ?>
                                    </div>
                                </div>
                                <div class='gbd-header-content-blog <?php echo (!file_exists($file_path)) ? "gbd-blog-fullwidth" : ""; ?>'>
                                    <header class="entry-header">
                                        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" >', '</a></h2>' );

                                        if ( 'post' === get_post_type() ) : ?>
                                            <?php // get_template_part( 'components/post/content', 'meta' ); ?>
                                            <?php
                                        endif; ?>

                                        <div class="gbd-categories">
                                            <?php
              $category_detail = get_the_category(get_the_ID());//$post->ID
              $cat = [];
              $cat_id = $category_detail[0]->term_id; 
              foreach ($category_detail as $key => $value) {
                echo "<span><a href='". get_category_link( $value->term_id )."'>".$value->cat_name."</a></span> ";
            }
            ?>           
        </div>
        <div class="entry-meta">
            <?php growbydata_blog_posted_on(); ?>
        </div>

        <div class="gbd-reading-time">
            <span class="separator">|</span> 
            <?php echo do_shortcode('[rt_reading_time  postfix="MIN" postfix_singular="MIN" label="READ"]'); ?>
        </div>
        <div class="gbd-blog-tags">
            <i class="fa fa-tags" aria-hidden="true"></i>
            <?php
            $category_detail = get_the_category(get_the_ID());
        //echo $cat_id;
            foreach ($category_detail as $key => $value) {
                echo "<span><a href='". get_category_link( $value->term_id )."'>".$value->cat_name."</a></span>";
                if (next($category_detail)) {
        echo ', '; // Add comma for all elements instead of last
    }
}
?>
</div>
</header>
</div><!-- gbd-header-content-blogs -->

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

/**
* additional functions
*/
require get_template_directory() . '/functions_dev.php';


function dequeue_jquery_migrate( $scripts ) {
    if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            [ 'jquery-migrate' ]
        );
    }
}
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );

add_filter('comment_form_default_fields', 'unset_url_field');
function unset_url_field($fields){
    if(isset($fields['url']))
       unset($fields['url']);
   return $fields;
}
/* Move commnet */
function wpb_move_comment_field_to_bottom( $fields ) {

    $author = $fields['author'];
    $email = $fields['email'];
    $comment = $fields['comment'];
    
    
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['comment'] );
    
    
    $fields['author'] = $author;
    $fields['email'] = $email;
    $fields['comment'] = str_replace('<label for="comment">Comment</label>','<label for="comment">Comment <span class="required">*</span></label>',$comment);
    
    $fields['test'] = ''; 
    return $fields;
}
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

/*excerpt .. remove*/
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


$req = get_option('require_name_email');
$commenter = wp_get_current_commenter();
$aria_req = ( $req ? " aria-required='true'" : '' );


/**
 * Comment Form Placeholder Author, Email, URL
 */
function placeholder_author_email_url_form_fields($fields) {
    $replace_author = __('Name', 'growbydata-site');
    $replace_email = __('Email Address', 'growbydata-site');
    // $replace_url = __('Your Website', 'yourdomain');
    $commenter = (isset($commenter['comment_author'] )) ? esc_attr( $commenter['comment_author'] ) : "";
    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'growbydata-site' ) . '</label> ' .
    '<input id="author" name="author" type="text" placeholder="'.$replace_author.'" value="' . $commenter . '" size="20" /></p>';
    
    $fields['email'] = '<p class="comment-form-email"><label for="email">' . __( 'Email', 'growbydata-site' ) . '</label> ' .
    '<input id="email" name="email" type="text" placeholder="'.$replace_email.'" value="' . $commenter  .
    '" size="30" /></p>';
   
    
    return $fields;
}
add_filter('comment_form_default_fields','placeholder_author_email_url_form_fields');

/**
 * Comment Form Placeholder Comment Field
 */
function placeholder_comment_form_field($fields) {
    $replace_comment = __('Your Comment', 'growbydata-site');
    
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
    
    return $fields;
}
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field' );

/**
 * submit button value changes
 */


function wpsites_change_comment_form_submit_label($arg) {
    $arg['label_submit'] = 'Submit your comment';
    return $arg;
}
add_filter('comment_form_defaults', 'wpsites_change_comment_form_submit_label');


add_filter( 'comment_form_defaults', 'my_comment_form_defaults' );
/**
 * Customize the text prior to the comment form fields.
 * @param  array $defaults
 * @return $defaults
 */
function my_comment_form_defaults( $defaults ) {

    $defaults['comment_notes_before'] = '<p class="comment-notes">'. __( 'Your email address will not be published. All fields are required.', 'growbydata-site' ).'</p>';

    return $defaults;

}


add_filter( 'get_comment_author_link' , 'wpse_better_than_says' ) ;

function wpse_better_than_says( $link ) {

    //avoid pesky warning notices by declaring variable
    $better = '' ;

    //use in comment threads (not widgets and things) only: 
    if ( is_singular() && in_the_loop() ) {

        $better = '<span class="opines"> wrote  — </span>' ;

    }

    return $link . $better ; 

}

// for descrition in menu.
class Menu_With_Description extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        
        $class_names = $value = '';
        
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';
        
        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
        
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '<br /><span class="sub">' . $item->description . '</span>';
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}