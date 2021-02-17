<?php

function theme_scripts()
{
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), null);
}
add_action( 'wp_enqueue_scripts' , 'theme_scripts' );


// Theme Support
function mmb_theme_setup()
{

    add_theme_support('post-thumbnails');

    //Register Custom Navigation Walker
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ));

    // Post Formats
    add_theme_support('post-formats', array('gallery'));

}
add_action('after_setup_theme', 'mmb_theme_setup');


// Register Navwalker
function register_navwalker()
{
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function my_custom_excerpt ( $content, $limit = 20, $more = '...' ){                      
    return $data = wp_trim_words( strip_tags( $content ), $limit, $more );
}

// Widget Locations
function mmb_init_widgets($id)
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

    register_sidebar(array(
        'name' => 'Box4',
        'id' => 'box4',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

    register_sidebar(array(
        'name' => 'Box5',
        'id' => 'box5',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

    register_sidebar(array(
        'name' => 'Box6',
        'id' => 'box6',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

}
add_action('widgets_init', 'mmb_init_widgets');

// Customizer 
require_once get_template_directory() . '/includes/customizer.php';