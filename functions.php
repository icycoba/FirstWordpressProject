<?php
// Theme functions

function firstproject_register_styles(){
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('firstproject-fontawesome', "https://use.fontawesome.com/releases/v5.15.1/js/all.js", array('firstproject-style'), '5.15.1', 'all');
    wp_enqueue_style('firstproject-montserrat', "https://fonts.googleapis.com/css?family=Montserrat:400,700", array('firstproject-style'), '1.0', 'all');
    wp_enqueue_style('firstproject-lato', "https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic", array('firstproject-style'), '1.0', 'all');
    wp_enqueue_style('firstproject-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'firstproject_register_styles');

function firstproject_register_scripts(){
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script('firstproject-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1', true);
    wp_enqueue_script('firstproject-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", array(), '4.5.3', true);
    wp_enqueue_script('firstproject-jqueryeasing', "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js", array(), '1.4.1', true);
    wp_enqueue_script('firstproject-script', get_template_directory_uri() . "js/main.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'firstproject_register_scripts');

require_once locate_template('/functions/customizer.php');
require_once locate_template('/functions/widgets.php');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('firstproject_header_text');

// Simple regex taken from https://stackoverflow.com/a/69207369
function sanitize_header_text($input){
    return preg_replace('/\x00|<[^>]*>?/', '', $input);
}

function sanitize_header_logo($input){
    $output = $input;
    return $output;
}