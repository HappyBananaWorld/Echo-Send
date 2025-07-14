<?php

use Illuminate\Database\Capsule\Manager as Capsule;

add_action('init', function () {
    if (!class_exists('Illuminate\Database\Capsule\Manager')) {
        require_once __DIR__ . '/vendor/autoload.php';
    }

    global $wpdb;

    $capsule = new Capsule;

    $capsule->addConnection([
        'driver' => 'mysql',
        'host' => DB_HOST,
        'database' => DB_NAME,
        'username' => DB_USER,
        'password' => DB_PASSWORD,
        'port' => 10006,
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => $wpdb->prefix,
    ]);

    // Set the Eloquent ORM… 
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
});