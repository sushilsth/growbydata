<?php
namespace src;
use GuzzleHttp\Client;
class hubspot_settings {
	private $hapikey;
	function __construct(){
		$this->hapikey = "ebc0ee98-e021-44b5-a449-0acda348e51d";
		// add_action('admin_menu',  [$this, 'pg_hubspotsettings'] );

		// save_post event
		add_action( 'save_post', [$this, 'save_post_callback'], 100, 3);

		add_action( 'admin_enqueue_scripts', [$this, 'plugscript'] );

		//set default time to datetime field
		add_filter('acf/load_field/name=publish_datetime', function ($field) {
			date_default_timezone_set("Asia/Kathmandu");
		    $field['default_value'] = date("Y-m-d H:i:s", strtotime('+5 hours'));
		    return $field;
		});

		//load custom js
		// wp_register_script( 'my_plugin_script', plugins_url('../js/my_plugin.js', __FILE__), array('jquery'));
		// wp_enqueue_script( 'my_plugin_script' );
		
	}

	function plugscript(){
		wp_enqueue_script( 'hubspot-js', plugins_url('../js/my_plugin.js', __FILE__));
	}

	function pg_hubspotsettings(){
   		add_menu_page( 'Hubspot Social Share', 'HubSpot Social Share', 'manage_options', 'hubspot-setting', [$this, 'pg_settings_init'] );
   		// add_submenu_page('hubspot-setting', 'Social Media', 'Connected Social Media', 'manage_options', 'connected-social-media', [$this, 'connected_social_media']);
   		// add_submenu_page(null, 'Social Media', 'Connected Social Media', 'manage_options', 'connected-social-media', [$this, 'connected_social_media']);
	}	

	function pg_settings_init(){
       	// include dirname(__DIR__) . '\\view\\api_key.php';
       	$res = $this->get_social_medias();
   		include dirname(__DIR__) . '\\view\\connected_media_list.php';
	}	

	function get_social_medias(){
		$client = new Client([
            'verify' => false,
            'timeout' => 3000,
            'connection_timeout' => 3000,
            'http_errors' => false
        ]);

        $result = $client->request('GET', 'https://api.hubapi.com/broadcast/v1/channels/setting/publish/current?hapikey='.$this->hapikey);

        if ($result->getStatusCode() == 200) {
        	return json_decode($result->getBody());
        }
	}

	function connected_social_media(){
    	// $res = $this->get_social_medias();
   		// include dirname(__DIR__) . '\\view\\connected_media_list.php';
	}

	function schedule_to_publish($channelGuid, $post_link){
		date_default_timezone_set("Asia/Kathmandu");
		$client = new Client([
	            'verify' => false,
	            'timeout' => 3000,
	            'connection_timeout' => 3000,
	            'http_errors' => false
            ]);
			$isImmediate = get_field("immediately_schedule_this_post")[0];
        	if($isImmediate == "yes"){
		        $data = [
				  "channelGuid" => $channelGuid,
				  "content" => [
				    "body" => $post_link
				  ]
				];
        	} else {
        		$schedule_time = get_field("publish_datetime");
        		$schedule_time = strtotime($schedule_time) * 1000;
        		// var_dump(date('m/d/Y H:i:s', $schedule_time));
        		// die;
        		$data = [
				  "channelGuid" => $channelGuid,
				  "triggerAt" => $schedule_time,
				  "content" => [
				    "body" => $post_link
				  ]
				];
        	}
			
	        $result = $client->request('POST', 'https://api.hubapi.com/broadcast/v1/broadcasts?hapikey='.$this->hapikey,[
        		'headers' => [
                        'Content-Type' => 'application/json',
                    ],
                'json' => $data
	        ]);

	        if ($result->getStatusCode() == 201) {
	        	// $res = json_decode($result->getBody());
	        }
	}


	function save_post_callback( $post_id, $post, $update ) {
		if(!empty($_POST) && $post->post_type == "post"){
			$post_link = get_the_permalink($post_id);
			$end = explode('/', $_POST[ '_wp_http_referer' ]);
	        $end = end($end);
	        if($end == 'post-new.php'){
				$res = $this->get_social_medias();
				if(!empty($res)){
					foreach ($res as $key => $value) {
						$this->schedule_to_publish($value->channelGuid, $post_link);
					}
				}
			}
		}
	}
}
?>