<?php
function create_posttype() {
    register_post_type( 'jobs',
        array(
            'labels' => array(
                'name' => __( 'Job Vacancy' ),
                'singular_name' => __( 'Job Vacancy' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'jobs'),
        )
    );
}
add_action( 'init', 'create_posttype' );


/*
* Creating a function to create our CPT
*/
function custom_post_type() {
    $labels = array(
        'name'                => _x( 'Job Vacancy', 'Post Type General Name', 'growbydata-site' ),
        'singular_name'       => _x( 'Job Vacancy', 'Post Type Singular Name', 'growbydata-site' ),
        'menu_name'           => __( 'Job Vacancy', 'growbydata-site' ),
        'parent_item_colon'   => __( 'Parent Job Vacancy', 'growbydata-site' ),
        'all_items'           => __( 'All Job Vacancy', 'growbydata-site' ),
        'view_item'           => __( 'View Job Vacancy', 'growbydata-site' ),
        'add_new_item'        => __( 'Add New Job Vacancy', 'growbydata-site' ),
        'add_new'             => __( 'Add New', 'growbydata-site' ),
        'edit_item'           => __( 'Edit Job Vacancy', 'growbydata-site' ),
        'update_item'         => __( 'Update Job Vacancy', 'growbydata-site' ),
        'search_items'        => __( 'Search Job Vacancy', 'growbydata-site' ),
        'not_found'           => __( 'Not Found', 'growbydata-site' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'growbydata-site' ),
    );

    $args = array(
        'label'               => __( 'jobs', 'growbydata-site' ),
        'description'         => __( 'Job Vacancy at GrowByData', 'growbydata-site' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'jobs', $args );
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );


add_action( 'admin_init', 'gbd_jobs_meta_init' );
add_action( 'save_post', 'gbd_jobs_meta_save' );

function gbd_jobs_meta_init() {

    add_meta_box("gbd_jobs_meta", __( "Additional Settings", 'growbydata-site' ), "gbd_jobs_meta_options", "jobs", "normal", "high");
}

function gbd_jobs_meta_options( $post )
{
    /**
     * Outputs the content of the meta options
     */
    wp_nonce_field( 'gbd_options_jobs_nonce', 'gbd_jobs_nonce' );
    $gbd_jobs_additions = get_post_meta( $post->ID, 'gbd_jobs_set_added', true );
    $checked = '';

    if( $gbd_jobs_additions){
        $checked = 'checked';
    }
    ?>
    <input type="checkbox" name="gbd_jobs_set_added" id="gbd_jobs_set_added_id"  <?php echo $checked; ?> />
    <label><?php _e( 'Check to display job openings on career page.', 'growbydata-site' ); ?></label>

    <?php
}

function gbd_jobs_meta_save( $post_id )
{
    global $post;
    /**
     * Saves the mata input value
     */
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['gbd_jobs_nonce'] ) || !wp_verify_nonce( $_POST['gbd_jobs_nonce'], 'gbd_options_jobs_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post', $post_id ) ) return;

    if( isset( $_POST['gbd_jobs_set_added'] ) ) :
        $value = ! empty( $_POST['gbd_jobs_set_added'] ) ? $_POST['gbd_jobs_set_added'] : '';
        update_post_meta( $post_id, 'gbd_jobs_set_added',  $value  );
    else:
        update_post_meta( $post_id, 'gbd_jobs_set_added',  ''  );
    endif;
}