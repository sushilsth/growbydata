<?php

class WPLazyLoadImages {

    function __construct() {
        // Add Our Filters and actions for the plugin
        add_action('wp_enqueue_scripts', array($this, 'enqueue_lazyload'));
        add_filter('the_content', array($this, 'filter_lazyload'));
        add_action('wp_footer', array($this, 'footer_lazyload'));

    }

    function footer_lazyload() {
        // Add a small bit of Javascript which tells our jQuery plugin which images to target
        echo '
	<script type="text/javascript">
		(function($){
		  $("img.lazy").lazyload();
		})(jQuery);
	</script>
	';
    }

    function enqueue_lazyload() {
        // Make sure to load in the lazy load script
        wp_enqueue_script('jquery_lazy_load', get_stylesheet_directory_uri() . '/assets/lib/lazyload/jquery.lazyload.min.js', array('jquery'), '1.9.1');
    }

    function filter_lazyload($content) {
        // Performa search for all images

        return preg_replace_callback('/(<\s*img[^>]+)(src\s*=\s*"[^"]+")([^>]+>)/i', array($this, 'preg_replace_callback'), $content);
    }

    function preg_replace_callback($matches) {
        // Step 1: Replace our source attribute with a placeholder, and add a "data-original" attribute with our image source
        $img_replace = $img_match[1] . 'src="' . get_stylesheet_directory_uri() . '/img/grey.gif" data-original' . substr($img_match[2], 3) . $img_match[3];

        // Step 2: Add the class "lazy" to the image
        $img_replace = preg_replace('/class\s*=\s*"/i', 'class="lazy ', $img_replace);

        // Step 3: Add a noscript tag as a fallback
        $img_replace .= '<noscript>' . $img_match[0] . '</noscript>';
        return $img_replace;
    }

}

// Initiate Class
new WPLazyLoadImages();