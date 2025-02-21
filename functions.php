<?php 

function gamocda_files(){
    wp_enqueue_script('main-gamocda-js', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style("material-icons", "//fonts.googleapis.com/icon?family=Material+Icons");
    wp_enqueue_style("bootstrap-icons", "//cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
    wp_enqueue_style("fontawesome-all", "//site-assets.fontawesome.com/releases/v6.2.1/css/all.css");
    wp_enqueue_style("bootstrap", "//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_enqueue_style('font-stylesheet', get_theme_file_uri('fonts/stylesheet.css'), microtime(), true);
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