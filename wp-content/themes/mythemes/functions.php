<?php

define('DEV_MODE', true);

add_action('wp_enqueue_scripts', 'plugin_styles');

function plugin_styles() {
    $uri = get_theme_file_uri();
    $ver = DEV_MODE ? time() : false;

    wp_register_style('default', $uri . '/assets/css/default.css', [], $ver);

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

function mytheme_add_woocommerce_support(){
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'my_setup_theme');

function my_setup_theme(){
    /*register_nav_menu('primary', __('Primary Menu', 'mythemes'));*/
    add_theme_support('post-thumbnails');
}

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 20);
remove_action('woocommerce_before_shop_loop','woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering', 30);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

