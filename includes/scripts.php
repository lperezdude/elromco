<?php

// Load CSS on the frontend
function frontend_js() {
    wp_register_script(
        'elromco-frontend',
        WPPLUGIN_URL . 'src/app.import.js',
        [],
        time()
    );
    wp_register_script(
        'company_frontend',
        WPPLUGIN_URL . 'src/company/app.module.js',
        [],
        time()
    );
    wp_register_script(
        'google_api',
         'https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC2qUZ0Zej_411cxGJ-7DuHN-uoYTA68js&language=en',
        [],
        time()
    );
    wp_register_script(
        'jquery',
         'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
        [],
        time()
    );

        wp_enqueue_script('jquery');
        wp_enqueue_script('elromco-frontend');
        wp_enqueue_script('company_frontend');
        wp_enqueue_script('google_api');
}
add_action( 'wp_enqueue_scripts', 'frontend_js', 100 );
