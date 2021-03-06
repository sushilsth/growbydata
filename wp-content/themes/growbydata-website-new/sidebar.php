<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package growbydata_site
 */
if (growbydata_blog_get_option('select_global_sidebar_layout') == 'no-sidebar'){
    return;
}
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <div class="theiaStickySidebar">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside>
