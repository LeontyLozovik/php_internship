<?php

add_action('wp_enqueue_scripts', 'plugin_styles');

function plugin_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
}