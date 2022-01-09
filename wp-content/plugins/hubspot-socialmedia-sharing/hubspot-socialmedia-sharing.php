<?php
/**
* Plugin Name: Hubspot Social Sharing
* Description: Shares the wp post to social media using hubspot.
* Version: 1.1.0
* Tested up to: 5.3.2
* Author URI: https://www.growbydata.com
* Plugin URI: https://www.growbydata.com
* Author: GBD
* Text Domain: social-share-hubspot
* Domain Path: /languages/
*/
// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

require 'vendor/autoload.php';
require_once( trailingslashit( dirname( __FILE__ ) ) . 'autoload.php' );
new src\hubspot_settings();


global $pagenow;
if (( $pagenow == 'post.php' ) || (get_post_type() == 'post')) {
?>
	<style type="text/css">
	#acf-group_5e0dcff6a7b82{display: none !important;}
	</style>
<?php
}