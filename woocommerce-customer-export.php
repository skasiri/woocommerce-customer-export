<?php

if (! defined('ABSPATH')) {
    exit();
}

/*
Plugin Name:  Woocommerce Customer Export
Plugin URI:   https://redeemgate.com
Description:  Export Woocommerce Customers as you want
Version:      1.0.0.1
Author:       Saeidksr
Author URI:   https://github.com/skasiri/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wcex
Domain Path:  /
*/

define('WCEX_PREFIX', 'wcex_');


final class WoocommerceCustomerExport
{
    private static $_instance = null;
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function __construct()
    {
        // Register Locale Files
        add_action('init', [$this, 'i18n']);
        // Plugin initialization
        $this->init();
    }

    // Register Locale Files
    public function i18n()
    {
        load_plugin_textdomain(WCEX_PREFIX, false, dirname(plugin_basename(__FILE__)) . '/languages');
    }

    // Plugin initialization
    public function init() {}
}

WoocommerceCustomerExport::instance();
