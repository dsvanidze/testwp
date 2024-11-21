<?php 

function gamocda_files(){
    wp_enqueue_script('main-gamocda-js', get_theme_file_uri('/js/scripts-bundles.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('style.css', get_stylesheet_uri(), microtime(), true);
}

add_action('wp_enqueue_scripts', 'gamocda_files');

function gamocda_features() {
    register_nav_menu('menulocation', 'header menu location');
    register_nav_menu('footerlocation', 'footer location');
    register_nav_menu('footerlocationtwo', 'footertwo location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gamocda_features');
?>