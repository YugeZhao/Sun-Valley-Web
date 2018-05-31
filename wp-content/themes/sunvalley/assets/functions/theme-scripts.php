<?php
function theme_scripts() {
	if( !is_admin() ){
		/* Unhook scripts */
		wp_deregister_script( 'wp-embed' );
		wp_deregister_script( 'wp-emoji' );
		wp_deregister_script( 'jquery-migrate' );
		wp_deregister_script( 'jquery-core' );
		wp_deregister_script( 'jquery' );
	
		/* Move wordpress jquery to the footer */
	    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
		wp_enqueue_script( 'jquery' );
		
		/* add custom theme scripts */
		wp_register_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/min/main.min.js',array('jquery'), 	'1.2', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/min/main.min.js', array('jquery'), 	'1.2', true );
		
		/* add custom theme styles */
	    wp_register_style( 'main-styles', get_template_directory_uri() . '/assets/css/main.css', '', true );
	    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/main.css', '', true );
	    
	    /* add google font stylesheet */
	     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:700|Roboto:300,400,400i,500,500i,700', true );

	    
		/* Setup wordpress ajax for scripts */
		$AjaxScripts = array(
			'security' => wp_create_nonce('ajax-security'),
			'url' => admin_url('admin-ajax.php')
		); 
		wp_localize_script( 'theme-scripts', 'themeAjax', $AjaxScripts );
	}
} 
add_action('wp_enqueue_scripts', 'theme_scripts', 999);
