<?php

// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Remove the crap
genesis_unregister_layout( 'sidebar-content' );
genesis_unregister_layout( 'full-width' );
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
unregister_sidebar( 'sidebar' );
unregister_sidebar( 'sidebar-alt' );

// Get some jQuery
function script_managment() {
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-ui' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' );
    wp_register_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js' );
    wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array( 'jquery' ), '4.0', false );
    wp_enqueue_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js', array( 'jquery' ), '1.8.16' );
}
add_action( 'wp_enqueue_scripts', 'script_managment', 99);

// Grab the right stylesheet
function os_enqueue_stylesheet() {
    wp_register_style( 'opportunity-space', get_stylesheet_directory_uri() . ('/css/opportunity-space-style.css') );
    wp_enqueue_style( 'opportunity-space' );
}
add_action('genesis_meta', 'os_enqueue_stylesheet');

// Add a new image size for the "features" on the homepage
add_image_size( 'features-image', 420, 315, false );

// Allow shortcodes to be used in widgets
add_filter('widget_text', 'do_shortcode');

// Register 'hero' widget ready area ()
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'hero',
        'name'          => 'Homepage Hero',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h1>',
        'after_title'   => '</h1>'
    ));

// Register 'features' widget ready area ()
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'features',
        'name'          => 'Homepage Features',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<span style="display: none">',
        'after_title'   => '</span>'
    ));

// Register 'footer-widgets' widget ready area ()
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'footer-widgets',
        'name'          => 'Footer Widgets',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
