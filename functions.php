<?php

//Dynamic title
function gameend_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom_logo');
    add_theme_support('post-thumbnails');
}
add_action('after_theme_setup', 'gameend_theme_support');

//Menu
function gameend_menus()
{
    // add_theme_support('menus');
    $locations = array(
        'primary' => "Primary",
    );
    register_nav_menus($locations);
}

add_action('init', 'gameend_menus');






function gameend_enqueue_styles()
{

    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', array());
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/css/style.css', array());
    wp_enqueue_style('hamburger', get_stylesheet_directory_uri() . '/css/hamburger.css', array());
}

add_action('wp_enqueue_scripts', 'gameend_enqueue_styles');


?>