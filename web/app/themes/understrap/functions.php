<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

//Google fonts
function hp_add_google_fonts() {
	wp_enqueue_style( 'hp-google-fonts', 'https://fonts.googleapis.com/css?family=Domine:400,700|Source+Sans+Pro:400,600,700|Forum&amp;subset=latin-ext', false ); 
	}
add_action( 'wp_enqueue_scripts', 'hp_add_google_fonts' );

//ACF options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ogólne ustawienia motywu',
		'menu_title'	=> 'Ust. Motywu',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Ustawienia treści nagłówka',
		'menu_title'	=> 'Nagłówek',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Ustawienia treści stopki',
		'menu_title'	=> 'Stopka',
		'parent_slug'	=> 'theme-general-settings',
	));
		
}

//Custom element (WP search form) in primary menu
function add_search_form($items, $args) {
	if( $args->theme_location == 'primary' ){
	$items .= '<li class="nav-item nav-search-form">'
			. '<form role="search" method="get" class="form-inline" action="'.home_url( '/' ).'">'
			. '<label class="search-form-label">'
			. '<span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>'
			. '<input type="search" class="form-control" placeholder="' . esc_attr_x( 'Search …', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />'
			. '</label>'
			. '<button type="submit" class="btn btn-outline-success" value="'. esc_attr_x('Search', 'submit button') .'" ><i class="fas fa-search"></i></button>'
			. '</form>'
			. '</li>';
	}
    return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

//Custom class to footer menu
function atg_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'footer_menu') {
	  $classes[] = 'footer-menu__item';
	}
	return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 10, 4);