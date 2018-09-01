<?php
include_once 'config.php';
require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
require_once 'core/Route.php';
spl_autoload_register(function ($trait_name) {
    $trait_file_name = '../application/core/Traits/' . $trait_name . '.php';
    if (file_exists($trait_file_name)) {
        include_once $trait_file_name;
    }
});
Route::init();