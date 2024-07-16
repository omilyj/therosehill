<?php

function rh_enqueue() {
    wp_register_style(
        'rh_google_fonts',
        'https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Silkscreen&display=swap',
        [],
        null
    );
    wp_register_style(
        'rh_bootstrap_icons',
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );
    wp_register_style(
        'rh_theme',
        get_theme_file_uri('assets/public/index.css')
    );

    wp_enqueue_style('rh_google_fonts');
    wp_enqueue_style('rh_bootstrap_icons');
    wp_enqueue_style('rh_theme');
}