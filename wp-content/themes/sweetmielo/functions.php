<?php

// unnecessary scripts
add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

// scripts
add_action( 'wp_enqueue_scripts', 'sweetmielo_scripts' );
function sweetmielo_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'main', get_template_directory_uri() .'/js/main.js', array(), null, true );
}


// global
add_theme_support('menus');

// functions
add_action('acf/init', function () {
	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Основные настройки сайта',
			'menu_title' => 'Настройки сайта',
			'menu_slug' 	=> 'theme-general-settings',
		));
	}
});

// menu
add_action( 'after_setup_theme', function () {
	register_nav_menu('header-menu', 'Шапка');
});

?>