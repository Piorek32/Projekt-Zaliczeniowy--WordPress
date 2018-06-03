<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

//functions.php
function cl_scripts()
{
    //Add popper
    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', ['jquery'], null, true);
    //Add bootstrap
    wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['jquery', 'popper'], null, true);

    wp_enqueue_script('slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], null, true);

    //Add botstrap styles
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/main.css', null, '1.0.0', 'all');

}
add_action('wp_enqueue_scripts', 'cl_scripts');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(

    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


