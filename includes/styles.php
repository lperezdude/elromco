<?php

// Load CSS on the frontend
function frontend_styles() {

    wp_register_style(
        'company_frontend',
        WPPLUGIN_URL . 'src/company/company.css',
        [],
        time()
    );
    wp_register_style(
        'elromco-frontend',
        WPPLUGIN_URL . 'src/elromco.css',
        [],
        time()
    );
        wp_enqueue_style('elromco-frontend');
        wp_enqueue_style('company_frontend');


}
add_action( 'wp_enqueue_scripts', 'frontend_styles', 100 );
