<?php
/* Function for cleaning up the wordpress head */
function clean_head() {
	/* Remove category feeds */
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	/* Remove post and comment feeds */
	remove_action( 'wp_head', 'feed_links', 2 );
	/* Remove EditURI link */
	remove_action( 'wp_head', 'rsd_link' );
	/* Remove Windows live writer */
	remove_action( 'wp_head', 'wlwmanifest_link' );
	/* Remove index link */
	remove_action( 'wp_head', 'index_rel_link' );
	/* Remove previous link */
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	/* Remove start link */
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	/* Remove links for adjacent posts */
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	/* Remove WP version */
	remove_action( 'wp_head', 'wp_generator' );
	
	/* Remove WP Emoji */
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	
	/* Remove pesky injected css for recent comments widget */
	if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
		remove_filter('wp_head', 'wp_widget_recent_comments_style' );
	}


}
/* Start cleaning the head after theme setup */
add_action('after_setup_theme','start_cleanup', 16);
function start_cleanup() {
    add_action('init', 'clean_head');
}


/* Remove query string from static files */
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

/* MOVE GRAVITY FORMS SCRIPTS TO FOOTER */
add_filter("gform_init_scripts_footer", "init_scripts");
function init_scripts() {
return true;
}
/* MOVE INLINE SCRIPTS FROM GRAVITY FORMS TO FOOTER*/

add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open' );
function wrap_gform_cdata_open( $content = '' ) {
	$content = 'document.addEventListener( "DOMContentLoaded", function() { ';
	return $content;
}
add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close' );
function wrap_gform_cdata_close( $content = '' ) {
	$content = ' }, false );';
	return $content;
}
