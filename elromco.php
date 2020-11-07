<?php

/*
Plugin Name: Elromco - JS Form
Description: This plugin adds a form to the homepage
Version: 1.0.0
Author: Luis Perez
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: elromco
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('WPPLUGIN_URL', plugin_dir_url(__FILE__));

// Enqueue Plugin CSS
include(plugin_dir_path(__FILE__) . 'includes/styles.php');
// Enqueue Plugin CSS
include(plugin_dir_path(__FILE__) . 'includes/scripts.php');
// Adding Shotcodes for Forms
include(plugin_dir_path(__FILE__) . 'includes/forms.php');
// Adding Settings Page
include(plugin_dir_path(__FILE__) . 'includes/admin_settings.php');