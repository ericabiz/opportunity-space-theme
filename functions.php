<?php

// Get some jQuery
function oppspa_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}
if (!is_admin()) add_action("wp_enqueue_scripts", "oppspa_jquery_enqueue", 11);

// Allow shortcodes to be used in widgets
add_filter('widget_text', 'do_shortcode');

// Register Header and Footer navigation menus
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-nav'  => __( 'Primary Nav' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

// Register 'hero' widget ready area ()
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'hero',
        'name'          => 'Homepage Hero',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
