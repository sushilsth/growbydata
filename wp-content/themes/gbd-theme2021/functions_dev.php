<?php
function includeWithVariables($filePath, $variables = array(), $print = true){

    $output = NULL;
    global $wp;
        if (is_numeric(strpos(home_url($wp->request), "https://growbydata.com")) || is_numeric(strpos(home_url($wp->request), "https://www.growbydata.com")) || is_numeric(strpos(home_url($wp->request), "http://growbydata.com")) || is_numeric(strpos(home_url($wp->request), "http://www.growbydata.com"))) {

			$filePath = "live_".$filePath;
        } else {

        	$filePath = "staging_".$filePath;
        }
    if(file_exists(get_template_directory().'/'.$filePath)){
        // Extract the variables to a local namespace
        extract($variables);

        // Start output buffering
        ob_start();
        // header("Content-type: application/json; charset=utf-8");
        // Include the template file
        include $filePath;
        
        // End buffering and return its contents
        $output = ob_get_clean();
    } else {
    	
    }
    if ($print) {
        print $output;
    }
    return $output;

}

function detect_webp_browser_support(){
    if(isset($_SERVER['HTTP_ACCEPT']) && strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
    // webp is supported!
        return true;
    }
    return false;
}

function remove_block_css(){
wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );

/* Increase Postmeta Limit.*/
add_filter( 'postmeta_form_limit', function( $limit ) {
    return 100;
} );


add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){
    global $wpdb;
    $query = esc_sql($_GET['query']);
    $total_limit = 7;
    $sql ="SELECT DISTINCT keyword, COUNT(*) as count FROM ".$wpdb->prefix."keyword_history WHERE keyword LIKE '%".$query."%' GROUP BY keyword ORDER BY count DESC
    LIMIT ". $total_limit;
    $keywords = $wpdb->get_results($wpdb->prepare($sql));
    $keywords_count = count($keywords);
    
    $res['keywords'] = $keywords;

    $post_count_limit = $total_limit-$keywords_count;
    if($post_count_limit > 0){
        $posts_sql = "SELECT post_title, ID
                    FROM ".$wpdb->posts."
                    WHERE 1=1
                    AND (((".$wpdb->posts.".post_title LIKE '%".$query."%')
                            OR (".$wpdb->posts.".post_content LIKE '%".$query."%')))
                    AND ".$wpdb->posts.".post_type = 'post'
                    AND ((".$wpdb->posts.".post_status = 'publish'))
                    ORDER BY ".$wpdb->posts.".post_date DESC LIMIT 0,".$post_count_limit;
        $post = $wpdb->get_results($wpdb->prepare($posts_sql));
        $posts = [];
        foreach ($post as $key => $value) {
            array_push($posts, ['post_title' => $value->post_title, 'post_link' => get_permalink($value->ID)]);
        }
        $res['posts'] = $posts;
    }
    echo json_encode($res);
    die;
}

add_action('wp_ajax_getCountry' , 'getCountry');
add_action('wp_ajax_nopriv_getCountry','getCountry');
function getCountry(){
    require get_template_directory().'/getCountry.php';
    $country = new getCountry();
    $country = $country->init();
    echo $country;
    die;
}



//Custom Search
function custom_store_search_query( $query ) {
     
    if ( $query->is_search() && $query->is_main_query() && !empty($query->query['s'])) {
        global $wpdb;  
        global $wp_query;
        
        $raw_search = esc_sql($query->query['s']);
        $search_query ="SELECT count(*) as count
        FROM ".$wpdb->posts."
        WHERE 1=1
          AND (((".$wpdb->posts.".post_title LIKE %s)
                OR (".$wpdb->posts.".post_content LIKE %s)))
          AND ".$wpdb->posts.".post_type = 'post'
          AND ((".$wpdb->posts.".post_status = 'publish'))
        ORDER BY ".$wpdb->posts.".post_date DESC LIMIT 0,5";
        // $parsed_search_query = str_replace("%keyword%",$raw_search,$search_query);
        
        $result = $wpdb->get_results($wpdb->prepare($search_query, $raw_search, $raw_search));

        if($result[0]->count >=1 ){
            //Save Keyword
            $ip = get_the_user_ip();  
            $wpdb->insert($wpdb->prefix."keyword_history", array(
                            'keyword' => $raw_search, 
                            'ip' => $ip,
                            'date' => date('Y-m-d H:i:s')
                            ) 
                        );
        }
    }
}
add_action( 'pre_get_posts', 'custom_store_search_query' );

/** * Dispaly Users Ip*/
function get_the_user_ip() {
    $ipaddress = '';
       if (getenv('HTTP_CLIENT_IP'))
          $ipaddress = getenv('HTTP_CLIENT_IP');
       else if(getenv('HTTP_X_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
       else if(getenv('HTTP_X_FORWARDED'))
          $ipaddress = getenv('HTTP_X_FORWARDED');
       else if(getenv('HTTP_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_FORWARDED_FOR');
       else if(getenv('HTTP_FORWARDED'))
          $ipaddress = getenv('HTTP_FORWARDED');
       else if(getenv('REMOTE_ADDR'))
          $ipaddress = getenv('REMOTE_ADDR');
       else
          $ipaddress = 'UNKNOWN';

       return $ipaddress;
}

require_once __DIR__ . '/vendor/autoload.php';
add_action('wp_ajax_download_blog_content' , 'download_blog_content');
add_action('wp_ajax_nopriv_download_blog_content','download_blog_content');
function download_blog_content() {
    ob_start();
    include "blog_pdf_template.php";
    $htmlvar = ob_get_clean();
    ob_flush();
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4', 'tempDir'=>__DIR__ .'/mpdfTemp']);
    $mpdf->showImageErrors = true;
    $mpdf->SetDisplayMode('fullpage');
    // $css = get_template_directory_uri() . '/css/mpdf.min.css';
    // $stylesheet = file_get_contents_curl($css); // external css
    // $mpdf->WriteHTML($stylesheet, 1);
    $mpdf->WriteHTML($htmlvar, 2);

    $mpdf->debug = true;
    $mpdf->Output($_POST["postslug"].date("his") . '.pdf', 'D');
}


// add_action( 'wp_default_scripts', 'move_jquery_into_footer' );

// function move_jquery_into_footer( $wp_scripts ) {

//     if( is_admin() ) {
//         return;
//     }

//     $wp_scripts->add_data( 'jquery', 'group', 1 );
//     $wp_scripts->add_data( 'jquery-core', 'group', 1 );
//     $wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
// }

function my_init() {
    $is_admin = current_user_can('manage_options');
    if (!$is_admin) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}
add_action('init', 'my_init');


function mytheme_comment_captcha() { 
   // Instantiate the ReallySimpleCaptcha class, which will handle all of the heavy lifting
$comment_captcha = new ReallySimpleCaptcha();

// ReallySimpleCaptcha class option defaults.
// Changing these values will hav no impact. For now, these are here merely for reference.
// If you want to configure these options, see "Set Really Simple CAPTCHA Options", below
// TODO: Add admin page to allow configuration of options.
$comment_captcha_defaults = array(
'chars' => 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789',
'char_length' => '4',
'img_size' => array( '72', '24' ),
'fg' => array( '0', '0', '0' ),
'bg' => array( '255', '255', '255' ),
'font_size' => '16',
'font_char_width' => '15',
'img_type' => 'png',
'base' => array( '6', '18'),
);

/**************************************
* All configurable options are below  *
***************************************/

// Set Really Simple CAPTCHA Options
$comment_captcha->chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
$comment_captcha->char_length = '4';
$comment_captcha->img_size = array( '72', '24' );
$comment_captcha->fg = array( '0', '0', '0' );
$comment_captcha->bg = array( '255', '255', '255' );
$comment_captcha->font_size = '16';
$comment_captcha->font_char_width = '15';
$comment_captcha->img_type = 'png';
$comment_captcha->base = array( '6', '18' );

// Set Comment Form Options
$comment_captcha_form_label = 'Enter letters from above image:';

/********************************************************************
* Nothing else to edit.  No configurable options below this point.  *
*********************************************************************/

// Generate random word and image prefix
$comment_captcha_word = $comment_captcha->generate_random_word();
$comment_captcha_prefix = mt_rand();
// Generate CAPTCHA image
$comment_captcha_image_name = $comment_captcha->generate_image($comment_captcha_prefix, $comment_captcha_word);
// Define values for comment form CAPTCHA fields
$comment_captcha_image_url =  get_bloginfo('wpurl') . '/wp-content/plugins/really-simple-captcha/tmp/';
$comment_captcha_image_src = $comment_captcha_image_url . $comment_captcha_image_name;
$comment_captcha_image_width = $comment_captcha->img_size[0];
$comment_captcha_image_height = $comment_captcha->img_size[1];
$comment_captcha_field_size = $comment_captcha->char_length;
// Output the comment form CAPTCHA fields
?>
<p class="comment-form-captcha">
<label for="captcha_code"><?php echo $comment_captcha_form_label; ?></label>
<br>
<img src="<?php echo $comment_captcha_image_src; ?>"
 alt="captcha"
 width="<?php echo $comment_captcha_image_width; ?>"
 height="<?php echo $comment_captcha_image_height; ?>" style="margin-bottom: 10px;" /> 
<br>

<input id="comment_captcha_code" name="comment_captcha_code"
 size="<?php echo $comment_captcha_field_size; ?>" type="text" />
<input id="comment_captcha_prefix" name="comment_captcha_prefix" type="hidden"
 value="<?php echo $comment_captcha_prefix; ?>" />
 <div id="incorrect_form_captcha" for="g_recaptcha" class="error" style="display: none; margin-bottom:20px;">Please solve Captcha correctly.</div>
</p>
<?php
}

if ( (is_user_logged_in() == false) && ( class_exists('ReallySimpleCaptcha') ) ) {
    add_action( 'comment_form_after_fields' , 'mytheme_comment_captcha' );
}


function mytheme_check_comment_captcha( $comment_data  ) {
$comment_captcha = new ReallySimpleCaptcha();
// This variable holds the CAPTCHA image prefix, which corresponds to the correct answer
$comment_captcha_prefix = $_POST['comment_captcha_prefix'];
// This variable holds the CAPTCHA response, entered by the user
$comment_captcha_code = $_POST['comment_captcha_code'];
// This variable will hold the result of the CAPTCHA validation. Set to 'false' until CAPTCHA validation passes
$comment_captcha_correct = false;
// Validate the CAPTCHA response
$comment_captcha_check = $comment_captcha->check( $comment_captcha_prefix, $comment_captcha_code );
// Set to 'true' if validation passes, and 'false' if validation fails
$comment_captcha_correct = $comment_captcha_check;
// clean up the tmp directory
$comment_captcha->remove($comment_captcha_prefix);
$comment_captcha->cleanup();
// If CAPTCHA validation fails (incorrect value entered in CAPTCHA field) don't process the comment.
if ( ! $comment_captcha_correct ) {
    wp_die('You have entered an incorrect CAPTCHA value. Click the BACK button on your browser, and try again.');
    // break;
}
// if CAPTCHA validation passes (correct value entered in CAPTCHA field), process the comment as per normal
return $comment_data;
}
if ( (is_user_logged_in() == false) && isset($comment_data['comment_type']) && ( $comment_data['comment_type'] == '' ) && ( class_exists('ReallySimpleCaptcha') ) ) {
    add_filter('preprocess_comment', 'mytheme_check_comment_captcha', 0);
}


add_action('wp_ajax_checkCommentCaptcha' , 'checkCommentCaptcha');
add_action('wp_ajax_nopriv_checkCommentCaptcha','checkCommentCaptcha');
function checkCommentCaptcha() {
    if(is_user_logged_in()){
        echo "correct";
        die;
    } else {
        $comment_captcha = new ReallySimpleCaptcha();
        // This variable holds the CAPTCHA image prefix, which corresponds to the correct answer
        $comment_captcha_prefix = $_POST['comment_captcha_prefix'];
        // This variable holds the CAPTCHA response, entered by the user
        $comment_captcha_code = $_POST['comment_captcha_code'];
        // This variable will hold the result of the CAPTCHA validation. Set to 'false' until CAPTCHA validation passes
        $comment_captcha_correct = false;
        // Validate the CAPTCHA response
        $comment_captcha_check = $comment_captcha->check( $comment_captcha_prefix, $comment_captcha_code );
        // Set to 'true' if validation passes, and 'false' if validation fails
        $comment_captcha_correct = $comment_captcha_check;
        // clean up the tmp directory
        // If CAPTCHA validation fails (incorrect value entered in CAPTCHA field) don't process the comment.
        if ( ! $comment_captcha_correct ) {
            echo "incorrect";
            die;
        }
        // if CAPTCHA validation passes (correct value entered in CAPTCHA field), process the comment as per normal
        echo "correct";
        $comment_captcha->remove($comment_captcha_prefix);
        $comment_captcha->cleanup();
        die;
    }
}

/*
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
function my_enqueue_scripts() {
    $flag = true;
    global $template;
    $templateName = basename($template);
    // echo $templateName;
    if(is_singular('post') and !is_home()){
        // echo "<p style='margin-top:200px;'><h1>blog details</h1></p>";
        //wp_enqueue_style('blog-detail', get_template_directory_uri() . '/assets/css/blog-detail.min.css');
        include "blog_details_css.php";
    } elseif(is_front_page()){
        // echo "<p style='margin-top:200px;'><h1>homepage</h1></p>";
        wp_enqueue_style('homepage', get_template_directory_uri() . '/assets/css/homepage.min.css');
    } elseif(is_page() && ($templateName === "template-ad-intelligence.php" || $templateName === "template-pricing-data.php" || $templateName === "template-enforce-map.php")){
        // echo "<p style='margin-top:200px;'><h1>Solution Page</h1></p>";
        wp_enqueue_style('solution', get_template_directory_uri() . '/assets/css/solution.min.css');
    } else {
        // echo "<p style='margin-top:200px;'><h1>other Page</h1></p>";
        $flag = false;
        wp_enqueue_style('growbydata-site-style', get_stylesheet_uri());
        wp_enqueue_style('stylesheets', get_template_directory_uri() . '/assets/css/stylesheets.css');
    }
    // if($flag){
    //     wp_enqueue_style('wp_style', get_stylesheet_uri());
    //     wp_enqueue_style('stylesheets_combine', get_template_directory_uri() . '/assets/css/stylesheets.css');
    // }
}

add_filter('style_loader_tag', 'my_style_loader_tag_filter',10, 2);

function CSSPreloadWithFallback($html){
    $onloadAttr = "this.rel='stylesheet'";
    $html .= $html;
    $pos = strpos($html, "rel='stylesheet'");
    if ($pos !== false) {
        return $preloadWithFallBack = substr_replace($html, 'rel="preload" as="style" onload="'.$onloadAttr.'"', $pos, strlen("rel='stylesheet'"));
    }
}

function my_style_loader_tag_filter($html, $handle) {
  if($handle === 'stylesheets_combine') {
    return CSSPreloadWithFallback($html);
  }
  if($handle === 'wp_style') {
    return CSSPreloadWithFallback($html);
  }
  return $html;
}


function wp_footer_styles() {
    $flag = true;
    global $template;
    $templateName = basename($template);
    // echo $templateName;
    if(is_singular('post') and !is_home()){
     
    } elseif(is_front_page()){
      
    } elseif(is_page() && ($templateName === "template-ad-intelligence.php" || $templateName === "template-pricing-data.php" || $templateName === "template-enforce-map.php")){
        
    } else {
        // echo "<p style='margin-top:200px;'><h1>other Page</h1></p>";
        $flag = false;
       
    }
    if($flag){
        wp_enqueue_style('wp_style', get_stylesheet_uri());
        wp_enqueue_style('stylesheets_combine', get_template_directory_uri() . '/assets/css/stylesheets.css'); 
    }
};
add_action( 'get_footer', 'wp_footer_styles' );
*/


function is_first_time() {
    if (isset($_COOKIE['_wp_first_time']) || is_user_logged_in()) {
        return false;
    } else {
        // expires in 30 days.
        setcookie('_wp_first_time', 1, time() + (WEEK_IN_SECONDS * 4), COOKIEPATH, COOKIE_DOMAIN, false);

        return true;
    }
}
add_action( 'init', 'is_first_time');


/*disable emoji*/
function disable_emoji_feature() {
    
    // Prevent Emoji from loading on the front-end
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    // Remove from admin area also
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

    // Remove from RSS feeds also
    remove_filter( 'the_content_feed', 'wp_staticize_emoji');
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji');

    // Remove from Embeds
    remove_filter( 'embed_head', 'print_emoji_detection_script' );

    // Remove from emails
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

    // Disable from TinyMCE editor. Currently disabled in block editor by default
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

    /** Finally, prevent character conversion too
         ** without this, emojis still work 
         ** if it is available on the user's device
     */

    add_filter( 'option_use_smilies', '__return_false' );

}

function disable_emojis_tinymce( $plugins ) {
    if( is_array($plugins) ) {
        $plugins = array_diff( $plugins, array( 'wpemoji' ) );
    }
    return $plugins;
}

add_action('init', 'disable_emoji_feature');

/*wp embedding disable*/
add_action( 'init', function() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
});

add_action('wp_ajax_get_blog_content' , 'get_blog_content');
add_action('wp_ajax_nopriv_get_blog_content','get_blog_content');
function get_blog_content(){
    $id = $_POST['postid'];
    echo apply_filters('the_content',get_post_field('post_content', $id));
    die;
}

function dequeue_jquery_migrate( $scripts ) {
    if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            [ 'jquery-migrate' ]
        );
    }
}
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );