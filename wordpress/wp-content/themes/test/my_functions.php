<?php

//Setups
define('MY_DEV_MODE', true);

//Includes
include( get_theme_file_path('/include/front/enqueue.php' ));

//Hooks
add_action('wp_enqueue_scripts', 'ju_enqueue');

//Shortcodes
