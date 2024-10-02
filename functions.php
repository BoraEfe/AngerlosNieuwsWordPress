<?php

add_theme_support('post-thumbnails');

function my_theme_enqueue_styles(){
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style('header-style', get_template_directory_uri() . 'header.css');

}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');