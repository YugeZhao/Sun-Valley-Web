<?php
/* Set ACF path */
add_filter('acf/settings/path', 'acf_path');
function acf_path( $path ) {
    /* update path */
    $path = get_stylesheet_directory() . '/acf/';
    return $path;
}
 
/* Set ACF directory */
add_filter('acf/settings/dir', 'acf_settings');
function acf_settings( $dir ) {
    /* update directory */
    $dir = get_stylesheet_directory_uri() . '/acf/';
    return $dir;    
}

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_template_directory() . '/acf/acf.php' );
 if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
