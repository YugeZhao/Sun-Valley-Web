<?php
/* REGISTER MENU LOCATIONS */
add_theme_support( 'menus' );
register_nav_menus(
	array(
		'header-menu' => __( 'The Header Menu', 'sunvalley' ),
		'footer-menu' => __( 'The Footer Menu', 'sunvalley' ),
		'side-menu' => __( 'The Side Menu', 'sunvalley' ),
	)
);

/* The Header Menu */
function header_menu() {
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => '',
		'container_id'    => '',
		'menu_class'      => '',
		'menu_id'         => '',
		'depth'           => 0,
		'items_wrap'      => '<ul>%3$s</ul>'
		)
	);
}

/* The Focused Problems Menu */
function side_menu() {
	wp_nav_menu(
	array(
		'theme_location'  => 'side-menu',
		'menu'            => '',
		'container'       => '',
		'container_id'    => '',
		'menu_class'      => '',
		'menu_id'         => '',
		'depth'           => 0,
		'items_wrap'      => '<ul>%3$s</ul>'
		)
	);
}

/* The Footer Menu */
function footer_menu() {
	wp_nav_menu(
	array(
		'theme_location'  => 'footer-menu',
		'menu'            => '',
		'container'       => '',
		'container_id'    => '',
		'menu_class'      => '',
		'menu_id'         => '',
		'depth'           => 0,
		'items_wrap'      => '<ul>%3$s</ul>'
		)
	);
}

?>