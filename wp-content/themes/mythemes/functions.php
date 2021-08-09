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

function my_page_link(){
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

    $pagination = array(
        'base'         => @add_query_arg('page', '%#%'),
        'format'       => '',
        'total'        => $wp_query->max_num_pages,
        'current'      => $current,
        'show_all'     => true,
        'type'         => 'plain',
        'prev_text'    => __('Prev'),
        'next_text'    => __('Next'),
    );

    if($wp_rewrite->using_permalinks())
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) );

    if(!empty($wp_query->query_vars['s']))
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    echo woo_pagination($pagination);
}