<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function growbydata_blog_widgets_init() {
    register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'growbydata-site' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Col-1', 'growbydata-site' ),
        'id'            => 'footer-1',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Col-2', 'growbydata-site' ),
        'id'            => 'footer-2',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Col-3', 'growbydata-site' ),
        'id'            => 'footer-3',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'growbydata_blog_widgets_init' );

/**
 * function for google fonts
 */
if (!function_exists('growbydata_blog_fonts_url')) :

    /**
     * Return fonts URL.
     *
     * @since 1.0.0
     * @return string Fonts URL.
     */
    function growbydata_blog_fonts_url()
    {

        $fonts_url = '';
        $fonts = array();
        $subsets = 'latin,latin-ext';

        if ('off' !== _x('on', 'Ubuntu font: on or off', 'growbydata-site')) {
            $fonts[] = 'Ubuntu:400,500,600,700';
        }

        if ('off' !== _x('on', 'Open Sans font: on or off', 'growbydata-site')) {
            $fonts[] = 'Open+Sans:300,400,400i,600,700';
        }

        if ($fonts) {
            $fonts_url = add_query_arg(array(
                'family' => urldecode(implode('|', $fonts)),
                'subset' => urldecode($subsets),
            ), '//fonts.googleapis.com/css');
        }
        return $fonts_url;
    }
endif;