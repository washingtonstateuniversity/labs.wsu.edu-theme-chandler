<?php

add_action( 'wp_enqueue_scripts', 'wsu_labs_chandler_enqueue_scripts' );

function wsu_labs_chandler_enqueue_scripts() {
	wp_enqueue_script( 'wsu-labs-menu-animation', get_stylesheet_directory_uri() . '/js/uisearch.js', array( 'jquery' ), spine_get_script_version(), true );
	wp_enqueue_script( 'wsu-labs-classie', get_stylesheet_directory_uri() . '/js/classie.js', array( 'jquery' ), spine_get_script_version(), false );
}

/*
* Add HTML5 search box on the side bar menu
*/
add_theme_support( 'html5', array( 'search-form' ) );

add_filter( 'get_search_form', 'search_form_placeholder' );
function search_form_placeholder( $html ) {
    /*if ( current_theme_supports( 'html5', 'search-form' ) ) {
        $html = str_replace( 'placeholder="Change me"', 'placeholder="New Text"', $html );
    }*/

    return $html;
}
