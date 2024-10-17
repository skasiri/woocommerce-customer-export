<?php
require_once plugin_dir_path(__FILE__) . 'customer-export.php';

// Add wp-admin menu & pages
add_action('admin_menu', 'add_wcex_admin_page');
function add_wcex_admin_page()
{
    add_menu_page(
        __('Woo Customer Export', WCEX_PREFIX),
        __('Woo Customer Export', WCEX_PREFIX),
        'manage_options',
        WCEX_PREFIX . '_settings',
        'export_page_callback',
        'dashicons-admin-generic',
        6
    );
}
