<?php

//register custom menus

// menu 
function register_my_menus()
{
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu'),
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

