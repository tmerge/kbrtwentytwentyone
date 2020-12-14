<?php
function wpbootstrap_enqueue_styles() {
    wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . 'style.css');
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true );
    }
add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');
?>