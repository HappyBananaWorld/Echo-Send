<?php

/*
Plugin Name: Echo Send
Plugin URI: https://github.com/HappyBananaWorld/Echo-Send
Description: A lightweight plugin for automated SMS notifications and tracking code delivery.
Send order confirmations, tracking numbers via SMS, and display tracking info in user dashboards effortlessly.
Version: 1.0.0
Author mr banana
Author URI: https://github.com/happybananaworld
*/

if (!defined("ABSPATH"))
    exit;

// constants & import modules
define("ES_PLUGIN_DIR", plugin_dir_path(__FILE__));
define('ES_PLUGIN_URL', plugin_dir_url(__FILE__));

define('ES_PLUGIN_APP_PATH', ES_PLUGIN_DIR . "app/");
define('ES_PLUGIN_PATH', ES_PLUGIN_DIR);
define('ES_PLUGIN_ASSETS', ES_PLUGIN_DIR . "assets/");

require_once ES_PLUGIN_PATH . 'config/constants.php';
require_once ES_PLUGIN_APP_PATH . 'Helpers/helpers.php';
require_once ES_PLUGIN_PATH . 'bootstrap/app.php';