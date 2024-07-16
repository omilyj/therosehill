<?php

// Variables

// Includes
include(get_theme_file_path('includes/front/enqueue.php'));
include(get_theme_file_path('includes/front/head.php'));
include(get_theme_file_path('includes/front/woo-account.php'));
include(get_theme_file_path('includes/setup.php'));

// Hooks
add_action('wp_enqueue_scripts', 'rh_enqueue');
add_action('wp_head', 'rh_head', 5);
add_action('after_setup_theme', 'rh_setup_theme');
// Woocommerce Accounts Page
add_filter ( 'woocommerce_account_menu_items', 'rh_custom_endpoint', 40 );
add_action( 'init', 'rh_new_endpoint' );
add_action( 'woocommerce_account_event-alerts_endpoint', 'rh_endpoint_content' );
add_filter ( 'woocommerce_account_menu_items', 'rh_custom_endpoint_order' );

add_post_type_support( 'page', 'excerpt' );