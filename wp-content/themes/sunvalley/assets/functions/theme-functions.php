<?php
add_theme_support( 'post-thumbnails' ); 

/* Allow .svg files in media uploads */
function allow_svg( $mimes = array() ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg' );

/* Remove Mime Check for .svg uploads */
function svg_mime_check( $data, $file, $filename, $mimes ) {
	$wp_filetype = wp_check_filetype( $filename, $mimes );
	$ext = $wp_filetype['ext'];
	$type = $wp_filetype['type'];
	$proper_filename = $data['proper_filename'];
	return compact( 'ext', 'type', 'proper_filename' );
}
add_filter( 'wp_check_filetype_and_ext', 'svg_mime_check', 10, 4 );

/* Add inline .svg theme helper function */
function inline_svg($name) {
	$file = get_template_directory();
	$file .= "/assets/svg/" . $name . ".svg";
	include($file);
	return;
}

/* Add Media Library .svg theme helper function */
function media_svg( $id ) {
	$file = get_attached_file( $id );
	include($file);
	return;
}

/* Get template part helper function */
function include_part($folder, $file){
	$path = get_template_directory().'/parts/';
	return include_once($path.'/'.$folder.'/'.$file.'.php');
}
/* Get the text background image */
function backgroundImage(){
	$image = get_field("background_image");
	$imageUrl = $image['url'];
	return $imageUrl;
}
/* Get the text shadow color */
function textShadowColor(){
	$color = get_field("shadow_color");
	$shadow = 'text-shadow: 0 0 0 '.$color.', 1px 1px '.$color.', 2px 2px '.$color.', 3px 3px '.$color.', 4px 4px '.$color.', 5px 5px '.$color.';';
	return $shadow;
}
/* Get the text shadow color */
function belowTitleColor(){
	$color = get_field("below_title_color");
	$style = 'style="color:'.$color.';"';
	if ($color) {
		return $style;
	} else {
		return;
	}
}
/* Get the page title and use as class */
function pageClass(){
	$Class = (str_replace(' ', '-', strtolower(get_the_title())));
	return $Class;
}

function getPageContent(){
	$page = str_replace(' ', '-', strtolower(get_the_title()));
	$path = get_template_directory().'/templates/content/';
	return include_once($path.$page.'.php');	
}

function placeholderImg(){
	return 'https://placeimg.com/1000/1000/arch/sepia';
}

function getImage($name){
	$image = get_stylesheet_directory_uri().'/assets/img/'.$name;
	return $image;
}