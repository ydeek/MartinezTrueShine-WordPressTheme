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

}

add_action('wp_enqueue_scripts', 'martineztrushine_scripts');