<?php
/**
 * GBD-Brandtheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GBD-Brandtheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gbd_new_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gbd_new_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on GBD-Brandtheme, use a find and replace
		 * to change 'gbd-new-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gbd-new-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'gbd-new-theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'gbd_new_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'gbd_new_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gbd_new_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gbd_new_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'gbd_new_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gbd_new_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gbd-new-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gbd-new-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gbd_new_theme_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function gbd_new_theme_scripts() {

			wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/dist/bootstrap/css/bootstrap.min.css' );
			wp_enqueue_style( 'gbd-new-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
			wp_enqueue_style('stylesheets_main', get_template_directory_uri() . '/assets/css/minified/main.css');
		 	wp_enqueue_style('stylesheets_media', get_template_directory_uri() . '/assets/css/minified/media.css');
		 	wp_enqueue_style('stylesheets_fontawesome', get_template_directory_uri() . '/assets/css/minified/all.css');

	if( is_front_page() ) { 
		// die;
		// wp_enqueue_style( 'homepage-optimized', get_template_directory_uri() . '/assets/optimized/homepage/style.css' );
		wp_enqueue_style('stylesheets_home', get_template_directory_uri() . '/assets/css/minified/home.css');

	} 

	elseif (is_page_template('templates/template-leadership.php') )
	{
		// wp_enqueue_style( 'leadership-optimized', get_template_directory_uri() . '/assets/optimized/leadership/style.css' );
		wp_enqueue_style('stylesheets_leadership', get_template_directory_uri() . '/assets/css/minified/leadership.css');

	}

	// elseif (is_page( 'press' )) 
	// {
	// 	// wp_enqueue_style( 'press-optimized', get_template_directory_uri() . '/assets/optimized/press/style.css' );

	// }
	elseif (is_home(  ) || is_category(  ) || is_tag(  )) 
	{
		// wp_enqueue_style( 'blog-optimized', get_template_directory_uri() . '/assets/optimized/blog_list/style.css' );
		wp_enqueue_style('stylesheets_blog', get_template_directory_uri() . '/assets/css/minified/blog.css');	   


	}


	elseif (is_single(  )) 
	{
		// wp_enqueue_style( 'blog-detail', get_template_directory_uri() . '/assets/optimized/blog_detail/style.css' );
	 wp_enqueue_style('stylesheets_blog-detail', get_template_directory_uri() . '/assets/css/minified/blog-detail.css');
	 		wp_enqueue_style('stylesheets_blog', get_template_directory_uri() . '/assets/css/minified/blog.css');	   



	}
	elseif (is_page_template('templates/template-enforce-map.php')) 
	{
		// wp_enqueue_style( 'enforce-map-optimized', get_template_directory_uri() . '/assets/optimized/enforce_map/style.css' );
			wp_enqueue_style('stylesheets_marketplace', get_template_directory_uri() . '/assets/css/minified/marketplace.css');
	wp_enqueue_style('stylesheets_enforcemap', get_template_directory_uri() . '/assets/css/minified/enforce-map.css');
		


	}
	elseif (is_page_template('templates/template-price-intelligence.php')) 
	{
		// wp_enqueue_style( 'priceintel-optimized', get_template_directory_uri() . '/assets/optimized/price_intelligence/style.css' );
			wp_enqueue_style('stylesheets_marketplace', get_template_directory_uri() . '/assets/css/minified/marketplace.css');
		 wp_enqueue_style('stylesheets_priceintel', get_template_directory_uri() . '/assets/css/minified/priceintel.css');
		 	


	}
	elseif (is_page_template('templates/template-talk-to-expert-landing.php')) 
	{
		
		 wp_enqueue_style('stylesheets_adintel', get_template_directory_uri() . '/assets/css/minified/landing-page-talkto-expert.css');

	}

	// elseif ( is_search() ) {		    
	// 	wp_enqueue_style('stylesheets_search', get_template_directory_uri() . '/assets/css/minified/search.css');
	// }

elseif (is_page_template('templates/template-search-intelligence.php')
	|| is_page_template('templates/template-product-intel.php')
	 ||  is_page_template('templates/template-product-feed.php')
	 	|| is_page_template('templates/template-marketplace-intelligence.php')
	 	|| is_page_template('templates/template-data-enrichment.php')
	 	|| is_page_template('templates/template-custom-insights.php')
	 	|| is_page_template('templates/template-data-delivery.php')
	 	|| is_page_template('templates/template-marketplaceintelligence.php')
	 	|| is_page_template('templates/template-talk-to-expert.php')
	 	|| is_page_template('templates/template-topics.php')
	 	|| is_page_template('templates/template-product-update.php')
	 	|| is_page_template('templates/template-topics-newlayout.php')
	 	|| is_page_template('templates/template-topics-ad-intel.php')
	 	|| is_page_template('templates/template-topics-compititive-intel.php')
	 	|| is_page_template('templates/template-Shoppers-attribute-guide-landing.php')
	 	|| is_page_template('templates/template-what-is-search-intel.php')
	 	|| is_page_template('templates/template-what-is-prod-intel.php')
	 	|| is_page_template('templates/template-topics-what-is-seo-intel.php')
	 	|| is_page_template('templates/template-topics-marektplace-intel.php')
	 	|| is_page_template('templates/template-topics-competitive-intel.php')
	 	|| is_page_template('templates/template-share-of-voice-lp.php')
		|| is_page_template('templates/template-ad-intelligence.php'))

{
	wp_enqueue_style('stylesheets_marketplace', get_template_directory_uri() . '/assets/css/minified/marketplace.css');

}
	elseif(is_page_template('templates/template-topics-marketing-intel.php') )
		{
			wp_enqueue_style('stylesheets_blog', get_template_directory_uri() . '/assets/css/minified/blog.css');	
			wp_enqueue_style('stylesheets_marketplace', get_template_directory_uri() . '/assets/css/minified/marketplace.css');
	}

		else{

		}
	/*Font Google*/

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gbd_new_theme_scripts' );



/* Footer Menu */

// This theme uses wp_nav_menu() in two locations.  
register_nav_menus( array(  
	'Solution' => __( 'solution Navigation', 'gbd' ),  
	'contact'=> __('contact Navigation', 'gbd'),
	'resoures'=> __('resources Navigation', 'gbd'), 
	'connect'=> __('connect Navigation', 'gbd'),
	'company'=> __('company Navigation', 'gbd'),
	'services'=> __('services Navigation', 'gbd'),  
				'solution-topics'=> __('solution-topics Navigation', 'gbd')  
 


) );


/* Footer Menu End */

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';

require get_template_directory() . '/functions_dev.php';


// The shortcode function
function pullquote_func($atts, $content = null) {
	extract(shortcode_atts(array(
		'class' => '',
	), $atts));
	return '<div class="simplePullQuote '.$class.'"><p>'.$content.'</p></div>';
}
// Register shortcode
add_shortcode('pullquote', 'pullquote_func');



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

/*
* Adding Header and Footer Code in AMP pages in WordPress
*/
add_action('amp_post_template_footer','awts_amp_my_custom_footer');
function awts_amp_my_custom_footer($amp_template) { 
?>
<footer>
<div class="container gbd-dsk-footer-menu">
  <div class="row">
  	    	<amp-script layout="container" script="inline_amp" class="amp-script-sample amp-script i-amphtml-hydrated">

    <div class="menu-col col-md-3 col-sm-12">
		  <!-- <button id="hello2">Click!</button> -->
      		<strong><?php esc_html_e('Solutions', 'growbydata-site'); ?></strong>
		
      <?php wp_nav_menu( array( 'theme_location' => 'Solution' ) ); ?>


    </div>
    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('Resources', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'resoures' ) ); ?>
    </div>

    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('company', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'company' ) ); ?>
    </div>

    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('connect', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'connect' ) ); ?>
    </div>
    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('contact us', 'growbydata-site'); ?></strong>
      <ul>
        <!-- <li><span style="color:#929293; font-size:14px;">1.800.000.0000</span></li> -->
        <li><a href="mailto:info@growbydata.com" style="color:#ffa41f;font-size:14px;">info@growbydata.com</a>
        </li>
      </ul>
    </div>

    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('services', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'services' ) ); ?>
    </div>
    <div class="menu-col col-md-9 col-sm-12 topics">
      <strong><?php esc_html_e('topics', 'growbydata-site'); ?></strong>
      <div class="topics_menu">
        <?php wp_nav_menu( array( 'theme_location' => 'solution-topics' ) ); ?>
      </div>
    </div>
</amp-script>
  </div>
</div>
<div class="container gbd-mbl-footer-menu">
  <div class="row">
  	<amp-script layout="container" script="inline_amp" class="amp-script-sample">
	    <div class="menu-col col-md-3 col-sm-12">
	      <div id="solution_header"><strong><?php esc_html_e('Solutions', 'growbydata-site'); ?></strong></div>
	      <div id="solution_submenu">
	      <?php wp_nav_menu( array( 'theme_location' => 'Solution' ) ); ?>
	      </div>
	    </div>
	    <div class="menu-col col-md-3 col-sm-12">
	      <div id="resources_header"><strong><?php esc_html_e('Resources', 'growbydata-site'); ?></strong></div>
	      <div id="resources_submenu">
	      <?php wp_nav_menu( array( 'theme_location' => 'resoures' ) ); ?>
	      </div>
	    </div>
	    <div class="menu-col col-md-3 col-sm-12">
	      <div id="company_header">	
	      <strong><?php esc_html_e('company', 'growbydata-site'); ?></strong>
	      </div>
	      <div id="company_submenu">
	      <?php wp_nav_menu( array( 'theme_location' => 'company' ) ); ?>
	      </div>
	    </div>
	    <div class="menu-col col-md-3 col-sm-12">
	      <div id="services_header"><strong><?php esc_html_e('services', 'growbydata-site'); ?></strong></div>
	      <div id="services_submenu">
	      <?php wp_nav_menu( array( 'theme_location' => 'services' ) ); ?>
	      </div>
	    </div>
	    <div class="menu-col col-md-9 col-sm-12 topics">
	      <div id="topics_header"><strong><?php esc_html_e('topics', 'growbydata-site'); ?></strong></div>
	      <div class="topics_menu" id="topics_submenu">
	        <?php wp_nav_menu( array( 'theme_location' => 'solution-topics' ) ); ?>
	      </div>
	    </div>
	    <div class="menu-col col-md-3 col-sm-12">
	      <div id="connect_header"><strong><?php esc_html_e('connect', 'growbydata-site'); ?></strong></div>
	      <div id="connect_submenu">
	      <?php wp_nav_menu( array( 'theme_location' => 'connect' ) ); ?>
	      </div>
	    </div>
	    <div class="menu-col col-md-3 col-sm-12">
	      <strong><?php esc_html_e('contact us', 'growbydata-site'); ?></strong>
	      <ul>
	        <!-- <li><span style="color:#929293; font-size:14px;">1.800.000.0000</span></li> -->
	        <li><a href="mailto:info@growbydata.com" style="color:#ffa41f;font-size:14px;">info@growbydata.com</a>
	        </li>
	      </ul>
	    </div> 
	</amp-script> 

	<!-- styles targeted to amp footer since its not working on amp custom css -->
	<style>
	.twitter a:before {
  content: "\f099";
  font-family: "Font Awesome 5 Brands";
  font-style: normal;
  font-weight: 600;
  padding-right: 10px; }

.facebook a:before {
  content: "\f39e";
  font-family: "Font Awesome 5 Brands";
  font-style: normal;
  font-weight: 600;
  padding-right: 17px; }

.instagram a:before {
  content: "\f16d";
  font-family: "Font Awesome 5 Brands";
  font-style: normal;
  font-weight: 600;
  padding-right: 13px; }

.linkedin a:before {
  content: "\f0e1";
  font-family: "Font Awesome 5 Brands";
  font-style: normal;
  font-weight: 600;
  padding-right: 13px; }
  .youtube a:before{
content: "\f167";
font-family: "Font Awesome 5 Brands";
font-style: normal;
font-weight: 600;
padding-right:10px;

}
		@media (max-width: 767px) {
	footer strong:after {
    content: "\f067";
    padding-left: 10px;
    font-family: "Font Awesome 5 Free";
    float: right; 
}
.menu-col.col-md-3.col-sm-12:last-child strong:after{
  display:none;
}
footer .menu-footer-solutions-container{
	margin-bottom:0;
}

.gbd-mbl-footer-menu{
	padding:0;
}
.gbd-copyright-footer .container{
	padding:0;
}
}


</style> 
<!-- styles targeted to amp footer since its not working on amp custom css -->

  </div>
</div>

<div class="gbd-copyright-footer">
    <div class="container">
          <div class="col-md-4 col-sm-4 col-xs-12  px-0">
                <p class="pull-left" style="font-size:14px">&copy; <?php echo date('Y'); ?> GROWBYDATA</p>
            </div>

    </div>
</div><!-- gbd-copyright-contact -->
</footer>
<script id="inline_amp" type="text/plain" target="amp-script">
  const button1 = document.querySelector('#solution_header');
  const button2 = document.querySelector('#resources_header');
  const button3 = document.querySelector('#company_header');
  const button4 = document.querySelector('#services_header');
  const button5 = document.querySelector('#topics_header');
  const button6 = document.querySelector('#connect_header');
  button1.addEventListener('click', () => {
    const subelement1 = document.querySelector('#solution_submenu');
    subelement1.classList.toggle('show');
  });
  button2.addEventListener('click', () => {
    const subelement2 = document.querySelector('#resources_submenu');
    subelement2.classList.toggle('show');
  });
  button3.addEventListener('click', () => {
    const subelement3 = document.querySelector('#company_submenu');
    subelement3.classList.toggle('show');
  });
  button4.addEventListener('click', () => {
    const subelement4 = document.querySelector('#services_submenu');
    subelement4.classList.toggle('show');
  });
  button5.addEventListener('click', () => {
    const subelement5 = document.querySelector('#topics_submenu');
    subelement5.classList.toggle('show');
  });
  button6.addEventListener('click', () => {
    const subelement6 = document.querySelector('#connect_submenu');
    subelement6.classList.toggle('show');
  });
</script>
<?php } ?>