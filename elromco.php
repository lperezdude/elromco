<?php

/*
Plugin Name: Elromco - JS Form
Description: This plug in adds short codes to your wordpress site used to display the Elromco Forms.
Version: 1.0.4
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

// GitHub to Wordpress update integration
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/lperezdude/elromco/',
    __FILE__,
    'elromco'
);

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('a5bd1ceab34c36156bc7c1337ac4044c385b61ee');

//Checking for Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();