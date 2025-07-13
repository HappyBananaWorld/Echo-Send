<?php

// routes and menus


/**
 * main dashboard
 */
add_action('admin_menu', function () {
    add_menu_page(
        'echo-send',
        'Echo Send',
        'manage_options',
        'echo-send',
        [new DashboardController(), 'index'],
        '',
        1
    );

    add_submenu_page(
        'echo-send',
        'Echo Send Setting',
        'setting',
        'manage_options',
        'echo-send-setting',
        [new SettingController(), 'index']
    );
});