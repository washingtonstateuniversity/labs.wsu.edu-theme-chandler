<?php

add_action( 'wp_enqueue_scripts', 'wsu_labs_enque_scripts');

function wsu_labs_enque_scripts(){

	wp_enqueue_script( 'wsu-labs-menu-animation', get_stylesheet_directory_uri() . '/js/uisearch.js', array( 'jquery' ), spine_get_script_version(), false );
		wp_enqueue_script( 'wsu-labs-classie', get_stylesheet_directory_uri() . '/js/classie.js', array( 'jquery' ), spine_get_script_version(), false );
}
/*
* Add HTML5 search box on the side bar menu
*/
add_theme_support( 'html5', array( 'sb-search' ) );
