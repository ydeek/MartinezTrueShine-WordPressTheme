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