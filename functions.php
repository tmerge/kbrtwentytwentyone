<?php
function wpbootstrap_enqueue_styles() {
    //wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    //wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true );
    wp_enqueue_style('fontawesome_min', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
    wp_enqueue_style('fontawesome_brands_min', get_template_directory_uri() . '/assets/css/brands.min.css');
    wp_enqueue_style('fontawesome_regular_min', get_template_directory_uri() . '/assets/css/regular.min.css');
    wp_enqueue_style('fontawesome_solid_min', get_template_directory_uri() . '/assets/css/solid.min.css');
    
    if(is_page('Impressum')) {
        wp_enqueue_style('impressum_css', get_template_directory_uri() . '/assets/css/module.impressum.css');
    }
    if(is_page('Blog')) {
        wp_enqueue_style('blog_css', get_template_directory_uri() . '/assets/css/module.blog.css');
    }
    if( is_page( array( 'Startseite') ) ){
        wp_enqueue_script( 'kbrscript', get_template_directory_uri() . '/assets/js/kbrscript.js');
    }
    }
add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

