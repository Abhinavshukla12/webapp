<?php

namespace Config;

$routes = Services::routes();
//all routes started herre 
$routes->group('webapp/', ['namespace' => 'App\Controllers\WebappControllers'], static function ($routes) {
    
    //project routes
    $routes->get('home', 'Dashboard_controller::index');
});
//routes end 