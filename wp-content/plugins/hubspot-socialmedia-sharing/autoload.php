<?php
spl_autoload_register(function($className) {
	$file = dirname(__DIR__) . '\\hubspot-socialmedia-sharing\\' . $className . '.php';
	$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
	if (file_exists($file)) {
		include_once($file);
	} else {
		// wp_die(
  //       esc_html( "The file attempting to be loaded at $filepath does not exist." )
  //   );
	}
});