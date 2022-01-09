<?php
/**
 * Implement metabox.
 */

if (!function_exists('growbydata_blog_add_theme_meta_box')) :

    /**
     * Add the Meta Box
     *
     * @since 1.0.0
     */
    function growbydata_blog_add_theme_meta_box()
    {

        $apply_metabox_post_types = array('post', 'page');

        foreach ($apply_metabox_post_types as $key => $type) {
            add_meta_box(
                'growbydata-site-theme-settings',
                esc_html__('Single Page/Post Settings', 'growbydata-site'),
                'growbydata_blog_render_theme_settings_metabox',
                $type
            );
        }

    }

endif;

add_action('add_meta_boxes', 'growbydata_blog_add_theme_meta_box');

add_action( 'admin_enqueue_scripts', 'growbydata_blog_backend_scripts');
if ( ! function_exists( 'growbydata_blog_backend_scripts' ) ){
    function growbydata_blog_backend_scripts( $hook ) {
        if(('post.php' === $hook) ||('page.php' === $hook) || ('page-new.php' === $hook)||('post-new.php' === $hook)){
            wp_enqueue_style( 'wp-color-picker');
            wp_enqueue_script( 'wp-color-picker');
        }
    }
}

if (!function_exists('growbydata_blog_render_theme_settings_metabox')) :

    /**
     * Render theme settings meta box.
     *
     * @since 1.0.0
     */
    function growbydata_blog_render_theme_settings_metabox($post, $metabox)
    {

        $post_id = $post->ID;
        $growbydata_blog_post_meta_value = get_post_meta($post_id);

        // Meta box nonce for verification.
        wp_nonce_field(basename(__FILE__), 'growbydata_blog_meta_box_nonce');
        // Fetch Options list.

        $growbydata_blog_meta = get_post_custom( $post->ID );
        ?>
        <script>
            jQuery(document).ready(function($){
                $('.color_field').each(function(){
                    $(this).wpColorPicker();
                });
            });
        </script>
        <div class="pagebox">
            <label for="meta-checkbox">
                <input type="checkbox" name="growbydata-site-meta-checkbox" id="growbydata-site-meta-checkbox"
                       value="yes" <?php if (isset ($growbydata_blog_post_meta_value['growbydata-site-meta-checkbox'])) checked($growbydata_blog_post_meta_value['growbydata-site-meta-checkbox'][0], 'yes'); ?> />
                <?php _e('Check To dissable Featured Image from single page', 'growbydata-site') ?>
            </label>
        </div>
        <?php
    }

endif;


if (!function_exists('growbydata_blog_save_theme_settings_meta')) :

    /**
     * Save theme settings meta box value.
     *
     * @since 1.0.0
     *
     * @param int $post_id Post ID.
     * @param WP_Post $post Post object.
     */
    function growbydata_blog_save_theme_settings_meta($post_id, $post)
    {

        // Verify nonce.
        if (!isset($_POST['growbydata_blog_meta_box_nonce']) || !wp_verify_nonce($_POST['growbydata_blog_meta_box_nonce'], basename(__FILE__))) {
            return;
        }

        // Bail if auto save or revision.
        if (defined('DOING_AUTOSAVE') || is_int(wp_is_post_revision($post)) || is_int(wp_is_post_autosave($post))) {
            return;
        }

        // Check the post being saved == the $post_id to prevent triggering this call for other save_post events.
        if (empty($_POST['post_ID']) || $_POST['post_ID'] != $post_id) {
            return;
        }

        // Check permission.
        if ('page' === $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return;
            }
        } else if (!current_user_can('edit_post', $post_id)) {
            return;
        }
         $growbydata_blog_meta_checkbox = isset($_POST['growbydata-site-meta-checkbox']) ? esc_attr($_POST['growbydata-site-meta-checkbox']) : '';
        update_post_meta($post_id, 'growbydata-site-meta-checkbox', sanitize_text_field($growbydata_blog_meta_checkbox));

    }

endif;

add_action('save_post', 'growbydata_blog_save_theme_settings_meta', 10, 3);