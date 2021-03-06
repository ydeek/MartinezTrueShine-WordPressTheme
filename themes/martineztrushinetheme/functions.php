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

 // Slicknav css
 wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.scss', array(), '1.0.10');
// Main stylsheet 

wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0' );

/** Load JS Files */
wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'martineztrushine_scripts');


// Enable Feature imges and other stuff 

function martineztrushine_setup() {
    // Register new image size 
    add_image_size('square', 350,350,true);
    add_image_size('portrait', 350, 720, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);
   
    // Add featured image
    add_theme_support('post-thumbnails');

    // SEO Titles
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'martineztrushine_setup'); // When the theme is activated and ready!


// Creates a Widget Zone 

function martineztrushine_widgets(){
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    
}

add_action('widgets_init', 'martineztrushine_widgets');