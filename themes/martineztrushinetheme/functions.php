<?php

// Creates the menues 
function martineztrushine_menus(){
    // WordPress Function 
    register_nav_menus(array(
     'main-menu' => 'Main Menu'
    ));
}


// Hook
add_action('init', 'martineztrushine_menus');

// Adds Stylsheets and JS files 
function martineztrushine_scripts(){

// Normalize CSS
wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

// Google font 

wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0' );

// Main stylsheet 

wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0' );

}

add_action('wp_enqueue_scripts', 'martineztrushine_scripts');